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
                <h4 class="panel-title">SEO</h4>
                <div class="panel-actions fce">
                    <a href={{route('admin.seo.store')}} class="ml20 btn btn-outline-info addnew">
                        {{Config::get('define.actionButton.add_new')}} <i class="fa fa-plus ml5"></i>
                    </a>
                </div>
            </div>            
            <div class="example-wrap">
                <div class="example">
                    <div class="table-responsive">
                        <table class="table table-hover tablelist" data-role="content" data-plugin="selectable" data-row-selectable="true">
                        <thead class="bg-blue-grey-100">
                            <tr>
                                <th class="w40px center">
                                    Page name
                                </th>
                                <th class="w20px center">
                                    Route
                                </th>
                                <th class="w80px center">
                                    Meta title
                                </th>
                                <th class="w80px center">
                                    Meta description
                                </th>
                                <th class="w80px center">
                                    Meta keyword
                                </th>
                                <th class="w60px center">
                                    Use top page meta tags
                                </th>
                                <th class="w30px center">
                                    Is Index
                                </th>
                                <th class="w60px center">
                                    編集
                                </th>
                                <th class="w60px center">
                                    削除
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seos as $seo)
                            <tr>
                                <td class="center">
                                    {{$seo->page_name}}
                                </td>
                                <td>
                                    {{$seo->route}}
                                </td>
                                <td>
                                    {{$seo->title}}
                                </td>
                                <td>
                                    {{$seo->description}}
                                </td>
                                <td>
                                    {{$seo->keywords}}
                                </td>
                                <td class="center">
                                    @if($seo->repeat_keyword_description == 1)
                                        yes
                                    @else
                                        no
                                    @endif
                                </td>
                                <td class="center">
                                    @if($seo->is_index == 1)
                                        yes
                                    @else
                                        no
                                    @endif
                                </td>
                                <td class="center w20px">
                                    <a class="btn btn-outline-warning" href="{{route('admin.seo.edit', $seo->id)}}">
                                        <span>{{Config::get('define.actionButton.edit')}}</span>
                                    </a>
                                </td>
                                <td class="center">
                                    <form method="post" action="{{route('admin.seo.delete', $seo->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-outline-danger" name="delete" value="{{Config::get('define.actionButton.delete')}}">
                                        <input type="hidden" name="id" value="<?=$seo->id?>">
                                        <input type="hidden" name="action" value="delete_brand">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {!! $seos->appends(request()->input())->links('admin.components.pagination') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('vendor/pagination/pagination.min.js') }}"></script>
@endsection
