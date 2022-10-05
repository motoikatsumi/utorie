<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\PrefDataRepo;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Setting;
use App\Enums\EPref;
use App\Extra\Code\Pref;

class PrefDataController extends Controller
{
    private $prefdataRepo;
    const VIEW_PATH = 'admin.pages.prefdata.';
    const ROUTE_PATH = 'admin.prefdata.';

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->prefdataRepo = new PrefDataRepo();
    }

    public function index(Request $req)
    {
        //check request;
        if($req->isMethod('post')) {
            $fieldRequest = $req['prefdatas'];
            $pref_codes = array_column($fieldRequest, 'pref_code');
            $this->prefdataRepo->updateMultiRows($fieldRequest);
            $status = 'Updated';
            return redirect()->route(self::ROUTE_PATH . 'index')->with('status', $status);
        }
        $this->prefdataRepo->registDefaultData();
        $prefdatas = DB::table('prefdatas')->orderBy('id', 'asc')->paginate(100);
        return view(self::VIEW_PATH.'index', ['prefdatas' => $prefdatas]);
    }

    public function show($id)
    {
        //
    }

}
