<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\AreaRepo;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Setting;
use App\Enums\EPref;
use App\Extra\Code\Pref;

class AreaController extends Controller
{
    private $areaRepo;
    const VIEW_PATH = 'admin.pages.area.';
    const ROUTE_PATH = 'admin.area.';

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->areaRepo = new AreaRepo();
        view()->share([
            'title' => '市区町村一覧'
        ]);
    }

    public function index(Request $req)
    {
        //check request;
        $prefdatas = DB::table('prefdatas')->orderBy('id', 'asc')->paginate(100);

        if($req->isMethod('post')) {
            $pref_code = $req->pref_code; 
            if($pref_code) {
                $areas = $this->areaRepo->where('pref', '=', $pref_code)->orderBy('pref', 'asc')->paginate(100);
                return view(self::VIEW_PATH.'index', ['areas' => $areas, 'prefdatas' => $prefdatas, 'selected' => $pref_code]);    
            }
            $status = "都道府県を選択して下さい。";
            return redirect()->route(self::ROUTE_PATH.'index')->with('error', $status);
        }
    
        return view(self::VIEW_PATH.'index', ['prefdatas' => $prefdatas]);
    }

    public function show($id)
    {
        //
    }

}
