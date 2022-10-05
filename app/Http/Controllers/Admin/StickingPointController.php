<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StickingPointCat;
use App\Interfaces\StickingRepositoryInterface;
use App\Interfaces\GenreRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StickingPointController extends Controller
{
    const VIEW_PATH = 'admin.pages.sticking.';
    const ROUTE_PATH = 'admin.sticking.';

    private $stickingPoint;
    private $genre;
    public function __construct(StickingRepositoryInterface $stickingPoint, GenreRepositoryInterface $genre)
    {
        $this->stickingPoint = $stickingPoint;
        $this->genre = $genre;
        $this->middleware(['auth', 'verified']);
    }

    public function index(Request $request)
    {
        if($request->isMethod('post')){
            DB::beginTransaction();
            try {
                $fieldRequest = $request->sticking;
                $this->stickingPoint->updateMultiRows($fieldRequest);
                DB::commit();
                return redirect()->route('admin.sticking.index')->with(['message' => 'Update successfully', 'alert-class' => 'success']);
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with(['message' => 'Update Fail. Please try again', 'alert-class' => 'danger']);
            }
        }
        $genres = $this->genre->get();
        $stickingPoints = $this->stickingPoint->with('genre','GenreCat')->select('*')->get();
        $stickingPointCats =  StickingPointCat::get();
        return view(self::VIEW_PATH . 'index')->with([
            'stickingPoints' => $stickingPoints,
            'stickingPointCats' => $stickingPointCats,
            'genres' => $genres,
        ]);
    }

}
