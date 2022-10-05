<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\SeoRepo;
use App\Http\Requests\Admin\Seo\SeoRequest;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Seo;


class SeoController extends Controller
{

    private $seoRepo;
    private $req;
    private $seo; 
    const VIEW_PATH = 'admin.pages.seo.';
    const ROUTE_PATH = 'admin.seo.';

    public function __construct(Request $req, Seo $seo)
    {
        $this->middleware(['auth','verified']);
        $this->seoRepo = new SeoRepo();
        $this->req = $req;
        $this->seo = $seo;
    }

    public function index(Request $req)
    {
        //kiểm tra request;
        $seos = DB::table('seos')->orderBy('updated_at', 'desc')->paginate(Config::get('define.admin_pagination'));
        return view(self::VIEW_PATH.'index', ['seos' => $seos]);
    }

    public function create()
    {
        return view('admin.pages.seo.create');
    }

    public function store(SeoRequest $req)
    {
        //validate first
        if($req->isMethod('post')) {
            if ($req->has(['page_name', 'route', 'page_status', 'title', 'keywords', 'description', 'is_index','repeat_keyword_description'])) {
                //check exist
                $seoTable = Seo::firstOrNew(
                    $req->except(['_token', 'save_new_seo']) + ['created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
                );
                $seoTable ->save();
            }
            $status = 'SEO is created';
            return redirect()->route(self::ROUTE_PATH.'index', 'updated=1')->with('status', $status);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $seo = $this->seoRepo->find($id);
        return view( self::VIEW_PATH . '.create', ['seo' => $seo]);
    }

    public function update(SeoRequest $req, $id)
    {
        //get all request
        $allrequest = $req->except(['_token', 'save_new_seo']) + ['created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()];
        //update to db
        $this->seoRepo->update($id, $allrequest);
        $status = 'SEO is updated';
        return redirect()->route(self::ROUTE_PATH . 'index')->with('status', $status);
    }

    public function delete(Request $req, $id)
    {        
        if($req->isMethod('delete')) {
            $this->seoRepo->delete($id);
            $status = 'Seo for this page is deleted';
            return redirect()->route(self::ROUTE_PATH . 'index')->with('status', $status);
        }
    }
}
