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
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                </div>
                <div class="col-sm-12 col-md-6">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['store_name'] }}" name="store_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['brand'] }}" name="brand">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['province'] }}" name="province">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['city'] }}" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['address'] }}" name="address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['direction_description'] }}" name="direction_description">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['tel'] }}" name="tel">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['bussiness_hours'] }}" name="bussiness_hours">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['regular_holiday'] }}" name="regular_holiday">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['packing_lot'] }}" name="packing_lot">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['license_to_hold'] }}" name="license_to_hold">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['store_subject'] }}" name="store_subject">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['store_content'] }}" name="store_content">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['store_img'] }}" name="store_img">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['about_store'] }}" name="about_store">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['scraping_url'] }}" name="scraping_url">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['affiliate_page'] }}" name="affiliate_page">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['purchase_method'] }}" name="purchase_method">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['other_condition'] }}" name="other_condition">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['correspondence_area'] }}" name="correspondence_area">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['remake'] }}" name="remake">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['latitude'] }}" name="latitude">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="{{ $store['longitude'] }}" name="longitude">
                        </div>
                        <div class="form-group">
                            
                        </div>
                        <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">保存</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection