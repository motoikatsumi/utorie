@extends('admin.layout',[
                'page_lang' => 'jp'
            ]
        )
@section('append_head')
<link href="{{ asset('vendor/pagination/pagination.css') }}" rel="stylesheet" type="text/css">
@endsection
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
                </div>
            </div>
            <div class="example-wrap">
                <div class="example">
                    <div class="table-responsive tableform">
                        <form 
                            autocomplete="off" 
                            enctype="multipart/form-data" 
                            method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-info">
                                更新 <i class="fa fa-save ml5"></i>
                            </button>
                            <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                <tbody>       
                                    {{-- {{dd($settings)}} --}}
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{$setting->name}}</td>
                                            <td>
                                                <textarea class="form-control" style="height:180px" name="settings[{{$setting->id}}][setting_value]">{{ old('ga_tags', isset($setting->setting_value) ? $setting ->setting_value : "") }}</textarea>
                                                <input name="settings[{{$setting->id}}][id]" value="{{$setting->id}}" type="hidden"/>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('vendor/pagination/pagination.min.js') }}"></script>
@endsection
