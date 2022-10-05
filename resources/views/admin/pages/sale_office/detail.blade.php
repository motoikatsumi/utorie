@extends('admin.layout')
@section('append_head')
    <link href="https://code.jquery.com/ui/1.12.0-rc.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
@endsection
@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="panel-heading fsp">
        <h1 class="panel-title">営業所一覧</h1>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row mt20">
        <div class="col">
            @include('admin.components.notify')
            <div class="card card-small mb-5">
                <div class="card-header border-bottom">
                    <h6 class="m-0">店舗登録</h6>
                </div>
                <div class="col-sm-12 col-md-6">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" style="margin-top: 1rem">営業所名</label><span class="required-mark">※</span>
                            <input required type="text" class="form-control" placeholder="" value="{{ $office->name }}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">所在地</label>
                            <select name="pref_id" class="form-control">
                                <option selected>都道府県を選択</option>
                                @foreach ($prefectures as $prefecture)
                                    <option {{$prefecture['id'] == $office->pref_id ? 'selected' : ''}} value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">会社（検索する会社名を入力してください）</label>
                            <input required type="text" placeholder="" class="form-control" id="company_search" value="{{$company_name}}">
                            <input type="hidden" placeholder="" value="{{ $office->company_id }}" class="form-control" name="company_id" id="company_id"> 
                        </div>
                        <div class="form-group">
                            <label for="">住所</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $office->address }}" name="address">
                        </div>
                        <div class="form-group">
                            <label for="">アクセス</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $office->access }}" name="access">
                        </div>
                        <div class="form-group">
                            <label for="">営業時間</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $office->hours }}" name="hours">
                        </div>
                        <div class="form-group">
                            <label for="">定休日</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $office->holiday }}" name="holiday">
                        </div>
                        <div class="form-group">
                            <label for="">電話番号</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $office->tel }}" name="tel" maxlength="14">
                        </div>
                        <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1 mt10">保存</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('append_foot')
    <script>
        CKEDITOR.replace( 'html' );

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $( "#company_search" ).autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url:"{{route('admin.callCompany')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                            _token: CSRF_TOKEN,
                            search: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function (event, ui) {
                    $('#company_search').val(ui.item.label);
                    $('#company_id').val(ui.item.value);
                    return false;
                }
            });
        });
    </script>
@endsection