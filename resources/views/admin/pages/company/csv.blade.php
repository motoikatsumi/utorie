@extends('admin.layout',[
                'page_lang' => 'jp'
            ]
        )
@section('append_head')
<link href="{{ asset('vendor/pagination/pagination.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
@include('admin.components.notify')
<div class="container-fluid">
    <div class="panel" id="exampleReport">
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h1 class="panel-title">Export</h1>
            </div>
            <form 
                autocomplete="off" 
                enctype="multipart/form-data"
                action="{{ route('company.export') }}"
                method="get">
                {{ csrf_field() }}
                <div class="fss mt20">
                    <button type="submit" class="btn btn-outline-info">
                        {{Config::get('define.actionButton.export')}} <i class="fa fa-save ml5"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel pt50" id="">
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h1 class="panel-title">Import</h1>
            </div>
            <form 
                autocomplete="off" 
                enctype="multipart/form-data"
                action="{{ route('company.import') }}"
                method="POST">
                {{ csrf_field() }}
                <div class="fss mt20">
                    <input type="file" name="file" class="">
                </div>
                <button type="submit" class="btn btn-outline-info mt20">
                    {{Config::get('define.actionButton.import')}} <i class="fa fa-save ml5"></i>
                </button>
            </form>
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('vendor/pagination/pagination.min.js') }}"></script>
@endsection
