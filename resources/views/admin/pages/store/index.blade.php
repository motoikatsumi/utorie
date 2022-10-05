@extends('admin.layout')

@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Store Manage</h3>
        </div>
    </div>
    <form method="POST" accept-charset="utf-8">
        @csrf
        <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
        <div class="panel panel-default panel-search">
            <div style="padding: 10px">
                <a href="#page-stats" class="panel-heading collapsed" data-toggle="collapse">絞り込み</a>
            </div>
            <div id="page-stats" class="panel-collapse panel-body collapse" style="height: 30px;">
                <div class="form-group">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="15%">ID</td>
                                <td style="display: flex">
                                    <input type="text" name="id" class="form-control inline" style="width: 40%"> ～
                                    <input type="text" name="" class="form-control inline" style="width: 40%"> </td>
                                <td width="15%">店舗名<span class="attention">部分一致</span></td>
                                <td width="35%"><input type="text" name="store_name" class="form-control inline"></td>
                            </tr>
                            <tr>
                                <td width="15%">都道府県</td>
                                <td width="35%"><select name="pref" id="pref" class="form-control inline"
                                        style="width: 30%">
                                        <option value=""></option>
                                        <option value="99">未設定</option>
                                        <option value="1">北海道</option>
                                        <option value="2">青森県</option>
                                        <option value="3">岩手県</option>
                                    </select></td>
                                <td width="15%">市区町村</td>
                                <td width="35%">
                                    <div class="input select"><select name="correspondence_area" id="area_id"
                                            style="width: 30%" class="form-control" disabled="disabled">
                                            <option value=""></option>
                                        </select></div>
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
                            <tr>
                                <td width="15%">表示フラグ</td>
                                <td width="35%">
                                    <div class="input select"><input type="hidden" name="show_flg[]" value="">
                                        <div class="checkbox"><label for="shop-show-flg-1"><input type="checkbox"
                                                    name=show_flg[]" value="1" id="shop-show-flg-1"
                                                    class="inline">表示</label></div>
                                        <div class="checkbox"><label for="shop-show-flg-2"><input type="checkbox"
                                                    name="show_flg[]" value="2" id="shop-show-flg-2"
                                                    class="inline">非表示</label></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> 絞り込む</button>
            </div>
        </div>
    </form>
    @include('admin.components.notify')
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">ID</th>
                                <th scope="col" class="border-0">店舗名</th>
                                <th scope="col" class="border-0">都道府県/市区町村</th>
                                <th scope="col" class="border-0">番地以降</th>
                                <th scope="col" class="border-0">駅</th>
                                <th scope="col" class="border-0">画像</th>
                                <th scope="col" class="border-0">表示/非表示</th>
                                <th scope="col" class="border-0">更新日</th>
                                <th scope="col" class="border-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                            <tr>
                                <td>
                                    <a href="{{ route('store.edit',$store->id) }}">
                                        <button type="button"
                                            class="mb-2 btn btn-secondary mr-2">{{ $store->id }}</button>
                                    </a>
                                </td>
                                <td>{{ $store->store_name }}</td>
                                <td>{{ $store->province .'/'. $store->city }}</td>
                                <td>{{ $store->address }}</td>
                                <td>{{ 'Train station' }}</td>
                                <td>{{ $store->image }}</td>
                                <td>{{ $store->display_flg }}</td>
                                <td>{{ date('Y-m-d',strtotime($store->updated_at)) }}</td>
                                <td class="file-manager__item-actions">
                                    <div class="btn-group btn-group-sm d-flex justify-content-end" role="group"
                                        aria-label="Table row actions">
                                        <a class="btn btn-outline-warning" href="{{ route('store.edit',$store->id) }}">
                                            <span>{{Config::get('define.actionButton.edit')}}</span>
                                        </a>
                                        <form method="post" action="{{route('store.delete', $store->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-outline-danger" name="delete" value="{{Config::get('define.actionButton.delete')}}">
                                            <input type="hidden" name="id" value="{{ $store->id }}">
                                            <input type="hidden" name="action" value="delete_brand">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $stores->appends(request()->input())->links('admin.components.pagination') !!}
            </div>
        </div>
    </div>
</div>
@endsection