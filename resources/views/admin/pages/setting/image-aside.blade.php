@extends('admin.layout',[
'page_lang' => 'jp'
]
)
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('status'))
<div class="alert alert-success w90 m0a center mb20">
    {{ session('status') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger w90 m0a center mb20">
    {{session('error')}}
</div>
@endif
<div class="container-fluid">
    <div class="panel" id="exampleReport">
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h4 class="panel-title">Setting</h4>
                <div class="panel-actions fce">
                    {{-- <a href={{route('admin.seo.store')}} class="ml20 btn btn-outline-info addnew">
                    {{Config::get('define.actionButton.add_new')}} <i class="fa fa-plus ml5"></i>
                    </a> --}}
                    <input type="hidden" id="img_ajax" name="img_ajax" value="{{ route('admin.setting.ajaxDel') }}">
                </div>
            </div>
            <div class="example-wrap">
                <div class="example">
                    <div class="table-responsive tableform" style="max-width:100%">
                        <form autocomplete="off" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-info">
                                更新 <i class="fa fa-save ml5"></i>
                            </button>
                            <table class="table table-hover tablelist c_table" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                <thead class="bg-blue-grey-100">
                                    <tr>
                                        <th>PC</th>
                                        <th>SP</th>
                                        <th>URL</th>
                                        <th>ALT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="file" name="images[1]" id="image_file" class=""
                                                multiple="multiple" style="height: auto;border:none">
                                            <div class="img_action">
                                                <i class="{{ isset($images[1]['id'])?'fas fa-backspace':'' }} delete_img"
                                                    data-id="{{ $images[1]['id']??null  }}"></i>
                                                <img src="{{ asset($images[1]['image_path']??null ) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="file" name="images[4]" id="image_file" class=""
                                                multiple="multiple" style="height: auto;border:none">
                                            <div class="img_action">
                                                <i class="{{ isset($images[4]['id'])?'fas fa-backspace':'' }} delete_img"
                                                    data-id="{{ $images[4]['id']??null }}"></i>
                                                <img src="{{ asset($images[4]['image_path']??null ) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="link[1]" value="{{ $images[1]['link']??null }}">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="alt[1]" value="{{ $images[1]['alt']??null }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="file" name="images[2]" id="image_file" class=""
                                                multiple="multiple" style="height: auto;border:none">
                                            <div class="img_action">
                                                <i class="{{ isset($images[2]['id'])?'fas fa-backspace':'' }} delete_img"
                                                    data-id="{{ $images[2]['id']??null  }}"></i>
                                                <img src="{{ asset($images[2]['image_path']??null ) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="file" name="images[5]" id="image_file" class=""
                                                multiple="multiple" style="height: auto;border:none">
                                            <div class="img_action">
                                                <i class="{{ isset($images[5]['id'])?'fas fa-backspace':'' }} delete_img"
                                                    data-id="{{ $images[5]['id']??null }}"></i>
                                                <img src="{{ asset($images[5]['image_path']??null ) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="link[2]" value="{{ $images[2]['link']??null }}">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="alt[2]" value="{{ $images[2]['alt']??null }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="file" name="images[3]" id="image_file" class=""
                                                multiple="multiple" style="height: auto;border:none">
                                            <div class="img_action">
                                                <i class="{{ isset($images[3]['id'])?'fas fa-backspace':'' }} delete_img"
                                                    data-id="{{ $images[3]['id']??null }}"></i>
                                                <img src="{{ asset($images[3]['image_path']??null) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="file" name="images[6]" id="image_file" class=""
                                                multiple="multiple" style="height: auto;border:none">
                                            <div class="img_action">
                                                <i class="{{ isset($images[6]['id'])?'fas fa-backspace':'' }} delete_img"
                                                    data-id="{{ $images[6]['id']??null }}"></i>
                                                <img src="{{ asset($images[6]['image_path']??null) }}" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="link[3]" value="{{ $images[3]['link']??null }}">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="alt[3]" value="{{ $images[3]['alt']??null }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            {{-- <h3>PC</h3>
                    <div class="wp-setting-img">
                        <div class="form-group" style="display: flex">
                            <div class="w-pc">
                                <input type="file" name="images[1]" id="image_file" class=""
                                    multiple="multiple" style="height: auto;border:none">
                                <div class="img_action">
                                    <i class="{{ isset($images[1]['id'])?'fas fa-backspace':'' }} delete_img"
                            data-id="{{ $images[1]['id']??null  }}"></i>
                            <img src="{{ asset($images[1]['image_path']??null ) }}" alt="">
                    </div>
                </div>
                <div class="w-pc">
                    <input type="file" name="images[2]" id="image_file" class="" multiple="multiple"
                        style="height: auto;border:none">
                    <div class="img_action">
                        <i class="{{ isset($images[2]['id'])?'fas fa-backspace':'' }} delete_img"
                            data-id="{{ $images[2]['id']??null  }}"></i>
                        <img src="{{ asset($images[2]['image_path']??null ) }}" alt="">
                    </div>
                </div>
                <div class="w-pc">
                    <input type="file" name="images[3]" id="image_file" class="" multiple="multiple"
                        style="height: auto;border:none">
                    <div class="img_action">
                        <i class="{{ isset($images[3]['id'])?'fas fa-backspace':'' }} delete_img"
                            data-id="{{ $images[3]['id']??null }}"></i>
                        <img src="{{ asset($images[3]['image_path']??null) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <h3>SMART PHONE</h3>
        <div class="wp-setting-img">
            <div class="form-group" style="display: flex">
                <div class="w-pc">
                    <input type="file" name="images[4]" id="image_file" class="" multiple="multiple"
                        style="height: auto;border:none">
                    <div class="img_action">
                        <i class="{{ isset($images[4]['id'])?'fas fa-backspace':'' }} delete_img"
                            data-id="{{ $images[4]['id']??null }}"></i>
                        <img src="{{ asset($images[4]['image_path']??null ) }}" alt="">
                    </div>
                </div>
                <div class="w-pc">
                    <input type="file" name="images[5]" id="image_file" class="" multiple="multiple"
                        style="height: auto;border:none">
                    <div class="img_action">
                        <i class="{{ isset($images[5]['id'])?'fas fa-backspace':'' }} delete_img"
                            data-id="{{ $images[5]['id']??null }}"></i>
                        <img src="{{ asset($images[5]['image_path']??null ) }}" alt="">
                    </div>
                </div>
                <div class="w-pc">
                    <input type="file" name="images[6]" id="image_file" class="" multiple="multiple"
                        style="height: auto;border:none">
                    <div class="img_action">
                        <i class="{{ isset($images[6]['id'])?'fas fa-backspace':'' }} delete_img"
                            data-id="{{ $images[6]['id']??null }}"></i>
                        <img src="{{ asset($images[6]['image_path']??null) }}" alt="">
                    </div>
                </div>
            </div>
        </div> --}}
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
