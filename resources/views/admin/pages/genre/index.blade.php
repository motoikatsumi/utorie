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
                <h1 class="panel-title">ジャンル一覧</h1>
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
                        <div class="table-responsive">                            
                            <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                                <thead class="bg-blue-grey-100">
                                    <tr>
                                        <th width="15" class="center">ID</th>
                                        <th width="170">ジャンル一覧</th>
                                        <th>ジャンル種別</th>
                                        <th>Display Name (Breadcrumbs)</th>
                                        <th>Display Title Name (H1,H2)</th>
                                        <th width="120">URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($genres as $genre)
                                        {{-- {{dd($genres)}} --}}
                                        <tr>
                                            <td class="center">{{$genre->id}}</td>
                                            <td>{{$genre->name}} <input class='form-control' type="hidden" value="{{$genre->genre_code}}" id='genre_code' name='genres[{{$genre->genre_code}}][genre_code]'> </td>
                                            <td>
                                                <input class='form-control' type="text" value="{{$genre->display_name}}" id='search_text' name='genres[{{$genre->genre_code}}][display_name]'>
                                            </td>
                                            <td>
                                                <input class='form-control' type="text" value="{{$genre->breadcrumb}}" id='url_text' name='genres[{{$genre->genre_code}}][breadcrumb]'>
                                            </td>
                                            <td>
                                                <input class='form-control' type="text" value="{{$genre->title_h2}}" id='url_text' name='genres[{{$genre->genre_code}}][title_h2]'>
                                            </td>
                                            <td>
                                                <input class='form-control' type="text" value="{{$genre->url_text}}" id='url_text' name='genres[{{$genre->genre_code}}][url_text]'>
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
