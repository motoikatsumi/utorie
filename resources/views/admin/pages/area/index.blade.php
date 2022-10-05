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
                <h1 class="panel-title">{{$title}}</h1>
            </div>
            <form 
                autocomplete="off" 
                enctype="multipart/form-data" 
                method="post">
                {{ csrf_field() }}
                <div class="fsc mt30">
                    <div class="col-md-2 pl-0">
                        <span>都道府県</span>
                    </div>
                    <div class="col-md-5">
                        <select class="form-control" name="pref_code">
                            <option value="" selected>選択して下さい</option>
                            @foreach ($prefdatas as $prefdata)
                                <option value="{{$prefdata->pref_code}}" @if(!empty($selected) && $prefdata->pref_code == $selected) {{'selected'}}  @endif>{{$prefdata->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary btn-info">
                            {{Config::get('define.actionButton.search')}} <i class="fa fa-search ml5"></i>
                        </button>
                    </div>
                    
                </div>
            </form>
            @if(!empty($areas))
            <div class="example-wrap">
                <div class="example">
                    <div class="table-responsive tableform maxw500">                            
                        <table class="table table-hover" data-role="content" data-plugin="selectable" data-row-selectable="true">
                            <thead class="bg-blue-grey-100">
                                <tr>
                                    <th width="60">ID</th>
                                    <th width="270">名前</th>
                                    <th width="270">市区町村タイプ</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($areas as $area)
                                        <tr class="{{ $area->area_type == '2' ? 'city_type2' : ''}}">
                                            <td>{{$area->id}}</td>
                                            <td>{{$area->name}}</td>
                                            <td>
                                                <?php 
                                                    if($area->area_type == 1) {echo '通常';}
                                                    if($area->area_type == 2) {echo '指定都市';}
                                                ?>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>         
                    </div>
                </div>
            </div>
            @endif
            
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('vendor/pagination/pagination.min.js') }}"></script>
@endsection
