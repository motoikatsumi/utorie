@extends('admin.layout')
@php
$page = (object) $companies->toArray();
@endphp
@section('content')
<div class="main-content-container container-fluid px-4 mb-5">
    <div class="panel">
        @include('admin.components.notify')
        <div class="panel-body">
            <div class="panel-heading fsp">
                <h1 class="panel-title">会社一覧</h1>
            </div>
            <form method="GET" accept-charset="utf-8">
                @csrf
                <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                <div class="panel panel-default panel-search">
                    <div class="mt20">
                        <a href="#page-stats" class="panel-heading btn btn-outline-info collapsed" data-toggle="collapse">
                            <span>絞り込み</span><i class="fa fa-chevron-down ml20"></i>
                        </a>
                    </div>
                    <div id="page-stats" class="panel-collapse panel-body collapse" style="height: 30px;">
                        <div class="form-group">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="15%">ID</td>
                                        <td>
                                            <div class="fsc">
                                                <input type="text" name="id[]" class="form-control inline" style="width: 40%">
                                                <span class="mr4 ml4">～</span>
                                                <input type="text" name="id[]" class="form-control inline" style="width: 40%"> </td>
                                            </div>
                                        <td width="15%">カンパニー名部分一致</td>
                                        <td width="35%"><input type="text" name="company_name" class="form-control inline"></td>
                                    </tr>
                                    <tr>
                                        <td width="15%">都道府県</td>
                                        <td width="35%">
                                            <select name="pref" id="pref" class="form-control inline" style="width: 60%">
                                                <option value=""></option>
                                                @foreach ($prefectures as $prefecture)
                                                    <option value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td width="15%">市区町村</td>
                                        <td width="35%">
                                            <div class="input select">
                                                <select name="area" id="area" style="width: 100%" class="form-control" disabled="disabled">
                                                    <option value=""></option>
                                                    @foreach ($prefectures as $prefecture)
                                                        <option value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="15%">住所<span class="attention">部分一致</span></td>
                                        <td width="35%"><input type="text" name="address" class="form-control inline">
                                        </td>
                                        <td width="15%">フリーワード<span class="attention">部分一致</span></td>
                                        <td width="35%"><input type="text" name="free_word" class="form-control inline">
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td width="25%">
                                            <div class="w-td" style="display: flex;align-items: center;">
                                                <div style="margin-right: 20px;">検索表示優先度</div>
                                                <div class="input select">
                                                    <div>
                                                        <label><input type="radio" name="display_priority" value="0" class="inline mr4">表示</label>
                                                    </div>
                                                    <div>
                                                        <label><input type="radio" name="display_priority" value="1" class="inline mr4">非表示</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td width="25%">
                                            <div class="w-td" style="display: flex;align-items: center;">
                                                <div style="margin-right: 20px;">検索表示フラグ</div>
                                                <div class="input select">
                                                    <div>
                                                        <label><input type="radio" name="display_flg" value="0" class="inline mr4">表示</label>
                                                    </div>
                                                    <div>
                                                        <label><input type="radio" name="display_flg" value="1" class="inline mr4">非表示</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td width="25%">
                                            <div class="w-td" style="display: flex;align-items: center;">
                                                <div style="margin-right: 20px;">index</div>
                                                <div class="input select">
                                                    <div>
                                                        <label><input type="radio" name="index" value="0" class="inline mr4">表示</label>
                                                    </div>
                                                    <div>
                                                        <label><input type="radio" name="index" value="1" class="inline mr4">非表示</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" name="search" value="true">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> 絞り込む</button>
                    </div>
                </div>
            </form>
            <div class="result">
                <p>{{ $page->from ?? 0 }}件～{{ $page->to ?? 0 }}件目/<span>{{$companies->total()}}</span>件</p>
            </div>
            {!! $companies->appends(request()->input())->links('admin.components.pagination') !!}
            <div class="table-responsive">
                <table class="table table-hover tablelist" data-role="content" data-plugin="selectable" data-row-selectable="true">
                    <thead class="bg-blue-grey-100">
                        <tr>
                            <th class="w80px center">ID</th>
                            <th>カンパニー名</th>
                            <th>所在地</th>
                            <th class="w90px center">表示/非表示</th>
                            <th class="w90px center">状態</th>
                            <th class="w70px center">{{Config::get('define.actionButton.edit')}}</th>
                            <th class="w70px center">{{Config::get('define.actionButton.delete')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                        <tr>
                            <td class="w80px center">
                                <a href="{{ route('company.edit',$company->id) }}">
                                    <button type="button" class="btn btn-secondary">{{ $company->id }}</button>
                                </a>
                            </td>
                            <td>{{ $company->company_name }}</td>
                            <td>{{ $company->address }}</td>
                            <td class="center">{{ ($company->display_flg == 0) ? '非表示' :'表示'  }}</td>
                            <td class="center">{{ ($company->index == 0) ? 'index' :'noindex' }}</td>
                            <td class="center">
                                <a class="btn btn-outline-warning" href="{{ route('company.edit',$company->id) }}">
                                    <span>{{Config::get('define.actionButton.edit')}}</span>
                                </a>
                            </td>
                            <td class="center">
                                <form method="post" action="{{route('company.delete', $company->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-outline-danger" name="delete" value="{{Config::get('define.actionButton.delete')}}">
                                    <input type="hidden" name="id" value="{{ $company->id }}">
                                    <input type="hidden" name="action" value="delete_brand">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                
            {!! $companies->appends(request()->input())->links('admin.components.pagination') !!}
        </div>
    </div>
</div>
@endsection