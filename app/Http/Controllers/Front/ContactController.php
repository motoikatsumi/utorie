<?php

namespace App\Http\Controllers\Front;

use App\Repositories\SettingRepo;
use App\Jobs\SendEmailJob;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Contact\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    const VIEW_PATH = 'front.pages.contact.';
    const ROUTE_PATH = 'front.contact';
    private $settingRepo;

    public function __construct(SettingRepo $SettingRepo)
    {
        $this->settingRepo = $SettingRepo;
    }

    public function index(ContactRequest $req)
    {
        //check if params   
        
        if($req->method() == 'POST') {
            $requestData = $req->except('_token');

            $req->session()->put('contactdata', $requestData);

            $admin_email = $this->settingRepo->getByOptions([
                'name' => 'admin_mail',
                'first' => true,
            ])->pluck('setting_value')->toArray()[0];
            $emails = [$req->email, $admin_email ?? 'info@utorie.jp'];

            try {
                foreach ($emails as $index => $item) {

                    $subject = $index == 0 ? 'お問い合わせ受付｜utorie（ウトリエ）' : '【 utorie（ウトリエ）】お問い合わせ';
                    $additional = $index == 0 ? '<br>お問い合わせありがとうございます。お問い合わせを受け付けました。<br><br>担当者より折り返しご連絡を差し上げますので、しばらくお待ちください。<br>内容によってはご返信にお時間をいただく場合や、ご返信ができかねる場合ががございますので、予めご了承ください。' : '<br>';

                    $contentbody = $index == 0 ? "" : "【お問い合わせ種別】".$requestData['issue']."<br>
                    【会社名】".$requestData['building_area2']."<br>
                    【氏名】".$requestData['name']."<br>
                    【メールアドレス】".$requestData['email']."<br>
                    【電話番号】".$requestData['phone']."<br>
                    【お問い合わせ内容】".$requestData['message']."";

                    $dataEmail = [
                        'subject' => $subject,
                        'content' => $additional.$contentbody
                    ];

                    dispatch(new SendEmailJob($item, $dataEmail));
                }
                // return view(self::VIEW_PATH . 'thanks');                
                return redirect()->route('front.contact.thanks');
            } catch (\Throwable $th) {
                $errors = 'There is an error while sending Email';
                return redirect()->route(self::ROUTE_PATH)->with('error', $errors);
            }
        }else {
            return view(self::VIEW_PATH . 'index');
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
