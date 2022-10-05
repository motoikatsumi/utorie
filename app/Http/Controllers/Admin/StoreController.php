<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\StoreRepo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $pathViewController = 'admin.pages.store.';
    private $storeRepo;

    public function __construct()
    {
        $this->middleware('auth');
        $this->storeRepo = new StoreRepo();
        view()->share([
            'title' => '管理画面',
            'head_title' => '更新プログラム管理画面',
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $stores = $this->storeRepo->where('delete_flg',0);
        $limit = isset($request['limit']) ? $request['limit'] : $limit = Config::get('define.admin_pagination');
        $stores = $request->isMethod('POST')
                        ? $stores->filter($request->all())->paginate($limit)
                        : $stores->paginate($limit);
        return view($this->pathViewController . 'index', ['stores' => $stores]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $store = $this->storeRepo->create($request->toArray());
                DB::commit();
                return redirect()->route('store.index')->with(['message' => 'Create successfully', 'alert-class' => 'success']);
            } catch (Exception $exception) {
                DB::rollback();
                return view($this->pathViewController . 'create')->with(['message' => 'Create Fail. Please try again', 'alert-class' => 'danger']);
            }
        }else{
            return view($this->pathViewController . 'create');
        }
    }

    public function edit(Request $request,$id)
    {
        $store = $this->storeRepo->find($id);
        if ($request->isMethod('POST')) {
            DB::beginTransaction();
            try {
                $store = $this->storeRepo->update($id, $request->toArray());
                DB::commit();
                return redirect()->route('store.index')->with(['message' => 'Update successfully', 'alert-class' => 'warning']);
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with(['message' => 'Create Fail. Please try again', 'alert-class' => 'danger']);
            }
        }
        return view($this->pathViewController . 'detail', ['store' => $store]);
    }

    public function delete(Request $request)
    {
        $store = $this->storeRepo->find($request['id']);
        $store->delete_flg = '1';
        $store->save();
        return back()->with(['message' => 'Delete successfully', 'alert-class' => 'danger']);
    }
}
