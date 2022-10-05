<?php

namespace App\Http\Controllers\Front;

use App\Repositories\SettingRepo;
use App\Jobs\SendEmailJob;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Catalog\CatalogRequest;
use Illuminate\Http\Request;
use App\Repositories\AreaRepo;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;

use function PHPUnit\Framework\isEmpty;

class CatalogController extends Controller
{
    const VIEW_PATH = 'front.pages.catalog.';
    const ROUTE_PATH = 'front.catalog.';
    private $settingRepo;
    private $areaRepo;

    public function randomDate($sStartDate, $sEndDate, $sFormat = 'm/d H:i')
    {
        // Convert the supplied date to timestamp
        $fMin = strtotime($sStartDate);
        $fMax = strtotime($sEndDate);
        $h = mt_rand(0, 24);
        $min = mt_rand(0, 59);
        // Generate a random number from the start and end dates
        $fVal = date("Y-m-d",mt_rand($fMin, $fMax));
        $dates = explode('-', $fVal);
        $date = new DateTime();
        $date->setDate((int) $dates[0],(int) $dates[1],(int) $dates[2])->setTime((int) $h,(int) $min);
    
        return $date->format($sFormat);
    
    }
    public function getnewDAte(){
        date_default_timezone_set("Asia/Tokyo");
    
        $now = time();
        $sStartDate= date('Y-m-d',strtotime("-1 days"));
        $sEndDate = date('Y-m-d',strtotime("now"));
        
        $date = $this->randomDate($sStartDate,$sEndDate);
        
        return $date;
    }
    public function getnowDate(){
        date_default_timezone_set("Asia/Tokyo");
    
        $now = date('m/d H:i',time());
        
        return $now;
    }
    
    public function __construct(SettingRepo $SettingRepo, AreaRepo $AreaRepo) {
        $this->settingRepo = $SettingRepo;
        $this->areaRepo = $AreaRepo;

        $a = array();
        array_push($a,array('date'=> date('m/d H:i', strtotime('-32 minutes')),'message'=>"無料査定が実施されました"));
        array_push($a,array('date'=> date('m/d H:i', strtotime('-107 minutes')),'message'=>"無料査定が実施されました"));
        array_push($a,array('date'=> $this->getnowDate(),'message'=>"無料査定が実施されました"));        
        for ($i=0; $i < 9; $i++) { 
            array_push($a,array('date'=>$this->getnewDAte(),'message'=>"無料査定が実施されました"));
        }        
        $file = public_path()."/side.json";        
        $json = json_decode(file_get_contents($file));        
        $json = $a;        
        file_put_contents($file, json_encode($json));
    }

    public function index(CatalogRequest $req)
    {
        //check if params

        if($req->method() == 'POST') {
            $requestData = $req->except('_token');
            if($req->session()->has('lastime')) {
                $lastime = $req->session()->get('lastime')->diffInSeconds();
                if($lastime > 10) {
                    $req->session()->put('lastime', Carbon::now());
                }else {
                    $errors = '減速してください'; 
                    return redirect()->route(self::ROUTE_PATH.'index')->with('error', $errors);
                }               
            }else {
                $req->session()->put('lastime', Carbon::now());                
            }
                        
            $req->session()->put('catalogdata', $requestData);
            $admin_email = $this->settingRepo->getByOptions([
                'name' => 'admin_mail',
                'first' => true,
            ])->pluck('setting_value')->toArray()[0];

            $emails = [$req->email, $admin_email ?? 'info@utorie.jp'];
            try {
                if($requestData['isthereland'] === '1') {
                    $isthereland = 'あり';                    
                    if(empty($requestData['howbigland'])) {
                        $errors = '土地の広さは？ - 入力フィールドは必須です'; 
                        return redirect()->route(self::ROUTE_PATH.'index')->with('error', $errors);
                    }
                } else {
                    $isthereland = 'なし';
                }
                $howbigland = '';
                if(!empty($requestData['howbigland'])) {
                    if(is_numeric($requestData['howbigland']))
                        $howbigland = '【土地の広さは？】'.$requestData['howbigland_value'].'<br>';
                    else
                        $howbigland = '【土地の広さは？】'.$requestData['howbigland'].'<br>';
                } else {
                    $howbigland = '';
                }
                if ($isthereland === 'なし') {
                    $howbigland = '';
                }
                $addnew = '';
                if(!empty($requestData['addnew'])) {
                    $addnew = '【補足説明】'.$requestData['addnew'];
                } else {
                    $addnew = '';
                }

                foreach ($emails as $index => $item) {
                    $subject = $index == 1 ? '【 utorie（ウトリエ）】一括資料請求' : '一括資料請求 受付｜utorie（ウトリエ）';
                    $dataEmail = [
                        'subject' => $subject,
                        'content' => "
                            ".($index == 1 ? '' : '一括資料請求ありがとうございます。以下の内容で一括資料請求を受け付けました。<br><br>＜お申し込み内容＞')."<br>
                            【ご希望の住宅タイプは？】".collect($requestData['housetype'])->implode(' - ')."<br>
                            【ご希望のエリアは？】".$requestData['building_area']." <br>
                            【土地の有無は？】".$isthereland."<br>
                            $howbigland
                            【ご希望の建築予算は？】".$requestData['budget']."<br>
                            【お名前は？】".$requestData['name']."<br>
                            【ご年齢は？】".$requestData['age']."<br>
                            【メールアドレスは？】".$requestData['email']."<br>
                            【電話番号は？】".$requestData['tel']."<br>                            
                            $addnew"
                    ];                    
                   dispatch(new SendEmailJob($item, $dataEmail));
                }
                // return view(self::VIEW_PATH.'thanks');
                return redirect()->route('front.catalog.thanks');
               

            } catch (\Throwable $th) {
                dd($th);
                $errors = 'There is an error while sending Email'; 
                return redirect()->route(self::ROUTE_PATH.'index')->with('error', $errors);
            }
        }
        return view(self::VIEW_PATH.'index');
    }

    public function callCity(Request $req)
    {
        if($req->method() == 'POST') {
            $search = $req->search;
            if($search == ''){
                $cities = $this->areaRepo->orderby('name','asc')->select('id','name')->limit(5)->get();
             }else{
                $cities = $this->areaRepo->orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
             }

            $response = array();
            foreach($cities as $city){
                $response[] = array("value"=>$city->id,"label"=>$city->name);
            }
            return response()->json($response);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
