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
                    <h6 class="m-0">Create Store</h6>
                </div>
                @include('admin.components.notify')
                <div class="col-sm-12 col-md-6">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="store_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="brand">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="province">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="direction_description">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="tel">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="bussiness_hours">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="regular_holiday">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="packing_lot">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="license_to_hold">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="store_subject">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="store_content">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="store_img">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="about_store">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="scraping_url">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="affiliate_page">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="purchase_method">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="other_condition">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="correspondence_area">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="remake">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="latitude">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="" value="" name="longitude">
                        </div>
                        
                        <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">保存</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection