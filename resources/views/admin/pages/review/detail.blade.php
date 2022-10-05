@extends('admin.layout')
<style>
    .required-mark {
        color: #f00;
    }
    .ml-50{
        margin-left: 50px;
    }
    .mr-50{
        margin-right: 50px;
    }
    select{
        width: 200px;
    }
</style>
@section('append_head')
    <link href="https://code.jquery.com/ui/1.12.0-rc.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
@endsection
@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="panel-heading fsp">
        <h1 class="panel-title">口コミ登録</h1>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row mt20">
        <div class="col">
            @include('admin.components.notify')
            <div class="card card-small mb-5">
                <div class="card-header border-bottom">
                    <h6 class="m-0">口コミ登録</h6>
                </div>
                <div class="col-sm-12 col-md-6">
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" style="margin-top: 1rem">カンパニー名</label><span class="required-mark">※</span>                            
                            <input type="text" placeholder="" class="form-control" id="company_search" value="{{$company_name}}">
                            <input type="hidden" placeholder="" value="{{ $review->company_id }}" class="form-control" name="company_id" id="company_id"> 
                        </div>
                        <div class="form-group">
                            <label for="">お名前・ニックネーム</label>
                            <input class="form-control" name="nickname" value="{{ $review->nickname }}">
                        </div>
                        <div class="form-group">
                            <label for="">年齢</label>
                            <select name="age" class="form-control">
                                <option {{ $review->age=='10代後半' ? 'selected' : '' }} value="10代後半">10代後半</option>
                                <option {{ $review->age=='20代前半' ? 'selected' : '' }} value="20代前半">20代前半</option>
                                <option {{ $review->age=='20代後半' ? 'selected' : '' }} value="20代後半">20代後半</option>
                                <option {{ $review->age=='30代前半' ? 'selected' : '' }} value="30代前半">30代前半</option>
                                <option {{ $review->age=='30代後半' ? 'selected' : '' }} value="30代後半">30代後半</option>
                                <option {{ $review->age=='40代前半' ? 'selected' : '' }} value="40代前半">40代前半</option>
                                <option {{ $review->age=='40代後半' ? 'selected' : '' }} value="40代後半">40代後半</option>
                                <option {{ $review->age=='50代前半' ? 'selected' : '' }} value="50代前半">50代前半</option>
                                <option {{ $review->age=='50代後半' ? 'selected' : '' }} value="50代後半">50代後半</option>
                                <option {{ $review->age=='60代以上' ? 'selected' : '' }} value="60代以上">60代以上</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">性別</label>
                            <select name="sex" class="form-control">
                                <option {{ $review->sex=='男性' ? 'selected' : '' }} value="男性">男性</option>
                                <option {{ $review->sex=='女性' ? 'selected' : '' }} value="女性">女性</option>
                            </select>
                        </div>

                        <div class="form-group date">
                            <label for="">投稿日</label>
                            <input class="form-control" type="text" value="{{ $review->created_at }}" id="example-date-input" name="created_at">
                        </div>
                        <div class="form-group">
                            <label for="">総合満足度</label>
                            <select class="form-control" name="satisfaction" id="">
                                <option {{ $review->satisfaction==1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $review->satisfaction==2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $review->satisfaction==3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $review->satisfaction==4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $review->satisfaction==5 ? 'selected' : '' }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">価格</label>
                            <select class="form-control" name="price" id="">
                                <option {{ $review->price==1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $review->price==2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $review->price==3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $review->price==4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $review->price==5 ? 'selected' : '' }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">商品力・性能</label>
                            <select class="form-control" name="performance" id="">
                                <option {{ $review->performance==1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $review->performance==2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $review->performance==3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $review->performance==4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $review->performance==5 ? 'selected' : '' }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">設計・提案力</label>
                            <select class="form-control" name="proposal_ability" id="">
                                <option {{ $review->proposal_ability==1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $review->proposal_ability==2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $review->proposal_ability==3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $review->proposal_ability==4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $review->proposal_ability==5 ? 'selected' : '' }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">選択自由度</label>
                            <select class="form-control" name="free_choice" id="">
                                <option {{ $review->free_choice==1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $review->free_choice==2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $review->free_choice==3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $review->free_choice==4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $review->free_choice==5 ? 'selected' : '' }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">アフターケア・メンテナンスサポート</label>
                            <select class="form-control" name="maintenance_support" id="">
                                <option {{ $review->maintenance_support==1 ? 'selected' : '' }} value="1">1</option>
                                <option {{ $review->maintenance_support==2 ? 'selected' : '' }} value="2">2</option>
                                <option {{ $review->maintenance_support==3 ? 'selected' : '' }} value="3">3</option>
                                <option {{ $review->maintenance_support==4 ? 'selected' : '' }} value="4">4</option>
                                <option {{ $review->maintenance_support==5 ? 'selected' : '' }} value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">口コミ件名</label>
                            <input type="text" class="form-control" name="review_title" value="{{ $review->review_title }}">
                        </div>
                        <div class="form-group">
                            <label for="">口コミ内容</label>
                            <textarea rows="7" type="text" class="form-control"  placeholder="" value="" name="review_content">{{ $review->review_content }}</textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label for="">口コミ内容</label>
                            <select class="form-control" name="review_show">
                                <option value="0" {{ $review->review_show==0 ? 'selected' : '' }}>非表示</option>
                                <option value="1" {{ $review->review_show==1 ? 'selected' : '' }}>表示</option>
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="">公開設定</label>
                            <div class="flbox">
                                <label class="ml-50">表示 <input class="ml-20" type="radio" name="review_show" value="1" {{ $review->review_show==1 ? 'checked' : '' }}></label>
                                <label class="ml-50">非表示 <input class="ml-20" type="radio" name="review_show" value="0" {{ $review->review_show==0 ? 'checked' : '' }}></label>
                            </div>
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
            var getdate = $('.date input').val();
            var newdate = getdate.split(' ')[0];
            $('.date input').val(newdate);
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