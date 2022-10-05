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
                <h1 class="panel-title">都道府県一覧</h1>
            </div>
            <form 
                autocomplete="off" 
                enctype="multipart/form-data" 
                method="post">
                {{ csrf_field() }}
                <div class="fss mt20">
                    <button type="submit" class="btn btn-outline-info">
                        {{Config::get('define.actionButton.update')}} <i class="fa fa-save ml5"></i>
                    </button>
                </div>
                <div class="example-wrap">
                    <div class="example">
                        <div class="table-responsive tableform maxw500">                            
                            <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                <thead class="bg-blue-grey-100">
                                    <tr>
                                        <th width="60">都道府県</th>
                                        <th width="270">検索ワード</th>
                                        <th width="270">URLテキスト</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prefdatas as $prefdata)
                                        <tr>
                                            <td>{{$prefdata->name}} <input class='form-control' type="hidden" value="{{$prefdata->pref_code}}" id='pref_code' name='prefdatas[{{$prefdata->pref_code}}][pref_code]'> </td>
                                            <td>
                                                <input class='form-control' type="text" value="{{$prefdata->search_text}}" id='search_text' name='prefdatas[{{$prefdata->pref_code}}][search_text]'>
                                            </td>
                                            <td>
                                                <input class='form-control' type="text" value="{{$prefdata->url_text}}" id='url_text' name='prefdatas[{{$prefdata->pref_code}}][url_text]'>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>         
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('vendor/pagination/pagination.min.js') }}"></script>
@endsection
