<?php

namespace App\Http\Controllers\Admin;
use App\Repositories\SettingRepo;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Setting;
use App\Enums\EImage;
use App\Models\Image;
use App\Models\ImageOther;

class SettingController extends Controller
{
    private $settingRepo;
    const VIEW_PATH = 'admin.pages.setting.';
    const ROUTE_PATH = 'admin.setting.';

    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->settingRepo = new SettingRepo();
    }

    public function index(Request $req)
    {
        if($req->isMethod('post')) {
            $fieldRequest = $req['settings'];            
            
            $this->settingRepo->updateMultiRows($fieldRequest);
            $status = 'Updated';
            return redirect()->route(self::ROUTE_PATH . 'index')->with('status', $status);
        }

        //check request;
        $this->settingRepo->registDefaultData();
        $settings = DB::table('settings')->orderBy('updated_at', 'desc')->paginate(100);
        return view(self::VIEW_PATH.'index', ['settings' => $settings]);
    }

    public function show($id)
    {
        //
    }

    //create/edit/update.
    public function edit(Request $req)
    {
       $fieldRequest = [];
       foreach (['ga_tags', 'admin_email'] as $key => $setting) {
            $fieldRequest[] = [
                'name' => $setting,
                'setting_value' => $req[$setting]
            ];
       }
       $this->settingRepo->replaceFields($fieldRequest, [], ['name' => ['ga_tags', 'admin_email']]);
    }

    public function imageAside(Request $request){
        if($request->isMethod('POST')){
            DB::beginTransaction();
            try {
                if ($request->hasFile('images')) {
                    $input = $request->file('images');
                    $destinationPath = '/uploads/aside/' . date('m-Y') . '/';
                    $type = EImage::ASIDE;
                    foreach ($input as $key=>$files) {
                        $img_del = ImageOther::where('id',$key)->first();
                        if($img_del){
                            $img_dir = unlink(public_path().$img_del['image_path']);
                            $img_del->delete();
                        }
                        $this->image = new ImageOther();
                        $file_name = time() . rand(0,9999). "_" . $files->getClientOriginalName();
                        $files->move(public_path().$destinationPath, $file_name);
                        $this->image->id = $key;
                        $this->image->type = $type;
                        $this->image->image_path = $destinationPath.$file_name;
                        $this->image->save();
                    }
                }
                foreach ($request->link as $key => $value) {
                    ImageOther::whereIn('id',[$key,$key+3])->update(['link'=>$value]);
                }
                foreach ($request->alt as $key => $value) {
                    ImageOther::whereIn('id',[$key,$key+3])->update(['alt'=>$value]);

                }
                DB::commit();
                return redirect()->route('admin.setting.aside')->with(['message' => 'Update successfully', 'alert-class' => 'warning']);
            } catch (Exception $exception) {
                DB::rollback();
                return redirect()->back()->with(['message' => 'Update Fail. Please try again', 'alert-class' => 'danger']);
            }
        }
        $images = $this->settingRepo->getAsideImages();
        foreach ($images as $key => $image) {
            $image_resolve[$image['id']] = $image;
        }
        $images = !empty($image_resolve) ? $image_resolve : $images;
        return view(self::VIEW_PATH.'image-aside')->with('images', $images);
    }

    public function ajaxDeleteImage(Request $request){
        if($request->ajax()){
            $img = ImageOther::findOrFail($request->img_id)->delete();
            return response()->json($img);
        }
    }
}
