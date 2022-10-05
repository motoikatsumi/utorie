<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\GenreRepo;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Setting;
use App\Extra\Code\GenreDefault;
use App\Enums\EGenre;

class GenreController extends Controller
{
    private $genreRepo;
    const VIEW_PATH = 'admin.pages.genre.';
    const ROUTE_PATH = 'admin.genre.';

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->genreRepo = new GenreRepo();
    }

    public function index(Request $req)
    {
        //check request;
        if($req->isMethod('post')) {
            DB::beginTransaction();
            try {
                $fieldRequest = $req->genres;
                $pref_codes = array_column($fieldRequest, 'pref_code');
                $this->genreRepo->updateMultiRows($fieldRequest);
                $status = 'Updated';
                DB::commit();
                return redirect()->route(self::ROUTE_PATH . 'index')->with('status', $status);
            }catch (Exception $exception) {
                DB::rollback();
                $status = 'Update Fail';
                return redirect()->route(self::ROUTE_PATH . 'index')->with('error', $status);
            }
        }
        $this->genreRepo->registDefault(EGenre::class, GenreDefault::class);

        $genres = DB::table('genres')->orderBy('id', 'asc')->paginate(100);
        return view(self::VIEW_PATH.'index', ['genres' => $genres]);
    }

    public function show($id)
    {
        //
    }

}
