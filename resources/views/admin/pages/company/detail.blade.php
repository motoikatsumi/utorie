@extends('admin.layout')
@section('append_head')
    <link href="https://code.jquery.com/ui/1.12.0-rc.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
@endsection
@php
    $main_image = array_column($company['getImages']->toArray(), 'main');
    $main = array_search(1, $main_image);
@endphp
@section('content')
<div class="main-content-container container-fluid px-4 mb-3">
    <!-- Page Header -->
    <div class="panel-heading fsp">
        <h1 class="panel-title">会社登録</h1>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row mt20">
        <div class="col">
            @include('admin.components.notify')
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">会社登録</h6>
                </div>
                <div class="col-sm-12 col-md-6">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" style="margin-top: 1rem">カンパニー名</label><span class="required-mark">※</span>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['company_name'] }}" name="company_name">
                        </div>
                        <div class="form-group">
                            <label for="">50音</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['order_character'] }}" name="order_character">
                        </div>
                        <div class="form-group">
                            <label for="">ジャンル</label><span class="required-mark">※</span>
                            <select name="genre_id[]" multiple="multiple" id="genre_id"
                                class="form-control" style="height: 120px;">
                                @foreach ($genres as $genre)
                                    <option {{$selectedGenres->contains($genre['id']) ? 'selected' : ''}} value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" id="sticking_id">
                            <label for="">こだわりポイント (Sticking Points)</label><span class="required-mark"></span>
                            <select name="sticking_id[]" multiple="multiple" class="form-control">
                                @foreach ($selectedStickings as $selectedSticking) 
                                    <option selected value="{{ $selectedSticking['id'] }}">{{ $selectedSticking['name'] }}</option>
                                @endforeach
                                @foreach ($stickingNotSelected as $item)
                                    <option disabled value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">カンパニー説明文 件名</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['company_title'] }}" name="company_title">
                        </div>
                        <div class="form-group">
                            <label for="">カンパニー説明文 内容</label>
                            <textarea class="form-control" name="company_content" id="" cols="30" rows="5">{{ $company['company_content'] }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>画像(1枚目)</label><br>
                            <input type="file" name="main_img[]" id="main_img" class="form-control">
                            @if (is_numeric($main))
                            <div class="form-group" style="display: flex">
                                <div class="img_action">
                                    <i class="fas fa-backspace delete_img" data-id="{{ $company['getImages'][$main]['id'] }}"></i>
                                    <img src="{{ asset($company['getImages'][$main]['image_path']) }}" alt="">
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>画像(2枚目以降)</label><br>
                            <input type="file" name="images[]" id="image_file" class="form-control" multiple="multiple" accept="image/*">
                            
                            <div class="form-group form-groupimg">
                                @foreach ($company['getImages'] as $image)
                                    @if ($image->main==0)
                                        <div class="img_action">
                                            <i class="fas fa-backspace delete_img" data-id="{{ $image->id }}"></i>
                                            <img src="{{ asset($image->image_path) }}" alt="">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">施工対応可能エリア</label>
                            <select multiple="multiple" name="pref[]" id="pref" class="form-control" style="height: 230px;">
                                @foreach ($prefectures as $prefecture)
                                    <option {{$selectedPrefs->contains($prefecture['id']) ? 'selected' : ''}} value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                @endforeach
                            </select>
                            <select name="area_id[]" multiple="multiple" id="area" class="form-control" style="height: 230px;">
                                @foreach ($AreasBySelectedPrefs as $AreasBySelectedPref)
                                    <option {{$selectedAreas->contains($AreasBySelectedPref['id']) ? 'selected' : ''}} value="{{ $AreasBySelectedPref['id'] }}">{{ $AreasBySelectedPref['name'] }}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control mt-3"  placeholder="" value="{{ $company['possible_area'] }}" name="possible_area"> -->
                        </div>
                        <div class="form-group">
                            <label for="">施工対応不可エリア</label>                            
                            <div class="form-group">
                                <input type="text" placeholder="" class="form-control" id="impossible_area" value="" name="impossible_area">
                                <input type="hidden" placeholder="" class="form-control" name="impossible_area_id" id="impossible_area_id" value="{{json_encode($impossibleAreas->pluck('id'))}}">
                                <div class="choosen_companies mt10" id="choosen_areas">
                                    @if(count($impossibleAreas))
                                        あなたが選択しました:
                                        @foreach ($impossibleAreas as $impossibleArea)
                                            <span id="{{$impossibleArea->id}}"><i class="fas fa-times"></i>{{$impossibleArea->name}}</span>
                                        @endforeach
                                    @endif 
                                </div>                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">会社名</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['company_name_2'] }}" name="company_name_2">
                        </div>
                        <div class="form-group">
                            <label for="">所在地</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['address'] }}" name="address">
                        </div>
                        <div class="form-group">
                            <label for="">設立</label>
                            <input class="form-control" type="text" placeholder="yyyy-mm-dd" value="{{ $company['establishment_date'] }}" id="example-date-input"  name="establishment_date">
                        </div>
                        <div class="form-group">
                            <label for="">代表者</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['representative'] }}" name="representative">
                        </div>
                        <div class="form-group">
                            <label for="">資本金</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['capital'] }}" name="capital">
                        </div>
                        <div class="form-group">
                            <label for="">従業員数</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['employees'] }}" name="employees">
                        </div>
                        <div class="form-group">
                            <label for="">参考坪単価</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['unit_price'] }}" name="unit_price">
                        </div>
                        <div class="form-group">
                            <label for="">施工実績</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['construction_results'] }}" name="construction_results">
                        </div>
                        <div class="form-group">
                            <label for="">取扱い工法</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['handling_method'] }}" name="handling_method">
                        </div>
                        <div class="form-group">
                            <label for="">アフター・保証</label>
                            <textarea class="form-control" name="after_warranty" id="" cols="30" rows="5">{{ $company['after_warranty'] }}</textarea>
                            <!-- <input type="text" class="form-control"  placeholder="" value="{{ $company['after_warranty'] }}" name="after_warranty"> -->
                        </div>
                        <div class="form-group">
                            <label for="">建設業許可番号</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['construction_permit'] }}" name="construction_permit">
                        </div>
                        <div class="form-group">
                            <label for="">ホームページ</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['home_page'] }}" name="home_page">
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['facebook'] }}" name="facebook">
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['instagram'] }}" name="instagram">
                        </div>
                        <div class="form-group">
                            <label for="">LINE</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['line'] }}" name="line">
                        </div>
                        <div class="form-group">
                            <label for="">Pinterest</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['pinterest'] }}" name="pinterest">
                        </div>
                        <div class="form-group">
                            <label for="">YouTube</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['youtube'] }}" name="youtube">
                        </div>
                        <div class="form-group">
                            <label for="">メールアドレス</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['email'] }}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">備考（フロントでは非表示）</label>
                            <input type="text" class="form-control"  placeholder="" value="{{ $company['remarks'] }}" name="remarks">
                        </div>
                        <div class="form-group">
                            <label for="">備考</label>
                            <textarea id="html" class="form-control"  name="html" id="" cols="30" rows="10">{{ $company['html'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">検索表示フラグ</label>
                            <div class="form-group">
                                <input type="radio" name="display_flg" class="ml-50" value="1" {{ $company['display_flg']==1 ? 'checked' : ''  }}><span> 表示</span>
                                <input type="radio" name="display_flg" class="ml-50" value="0" {{ $company['display_flg']==0 ? 'checked' : '' }}><span> 非表示</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">検索表示優先度</label>
                            <div class="form-group">
                                {{-- <input type="radio" name="display_priority" class="ml-50" value="1" {{ $company['display_priority']==1 ? 'checked' : '' }}><span> 表示</span>
                                <input type="radio" name="display_priority" class="ml-50" value="0" {{ $company['display_priority']==0 ? 'checked' : '' }}><span> 非表示</span> --}}
                                <input type="text" class="form-control"  placeholder="" value="{{ $company['display_priority'] }}" name="display_priority">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">公開設定</label><span class="required-mark">※</span>
                            <div class="form-group">
                                <input type="radio" name="index" class="ml-50" value="0" {{ $company['index']==0 ? 'checked' : '' }}><span> index</span>
                                <input type="radio" name="index" class="ml-50" value="1" {{ $company['index']==1 ? 'checked' : '' }}><span> noindex</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">関連会社</label>
                            <div class="form-group">
                                <input type="text" placeholder="" class="form-control" id="company_search" value="">
                                <input type="hidden" placeholder="" class="form-control" name="company_id" id="company_id" value="{{json_encode($relateds->pluck('id'))}}">
                                <div class="choosen_companies mt10" id="choosen_companies">
                                    @if(count($relateds))
                                        あなたが選択しました:
                                        @foreach ($relateds as $related)
                                            <span id="{{$related->id}}"><i class="fas fa-times"></i>{{$related->company_name}}</span>
                                        @endforeach
                                    @endif 
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="ajax_route" name="ajax_route" value="{{ route('company.index') }}">
                        <input type="hidden" id="img_ajax" name="img_ajax" value="{{ route('company.edit',$company['id']) }}">
                        <button type="submit" class="mb-2 btn btn-sm btn-primary mr-1">保存</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('append_foot')
    <script>
        $('body').on('change', '#genre_id', function(){
            var selectedGenres = $(this).val();
            $.ajax({
                method: 'POST',
                url: "{{route('company.ajax')}}",
                data: {selectedGenres, type:'get_sticking'},
                dataType: "json",
                success: (results)=>{
                    $('#sticking_id select').html(results);
                    $('#sticking_id').show();
                }
            })
        });


        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var selectedCompanies  = {!! json_encode($relateds) !!};
        var htmlcompanies = '';
        $(document).ready(function(){            
            $("#company_search").autocomplete({
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
                    $('#company_search').val('');
                    var isExist = selectedCompanies.some(function(el) {
                        return el.id === ui.item.value;
                    });
                    if(isExist) {
                        alert('会社はリストに存在します。');
                        $('#company_search').val('');
                        return false;
                    }
                    if(selectedCompanies.length == 3) {
                        alert('最大3社が関与します。');
                        $('#company_search').val('');
                        return false;
                    }
                    selectedCompanies.push({
                        id:ui.item.value,
                        company_name:ui.item.label
                    });                    
                    for (i = 0; i < selectedCompanies.length; i++) {
                        htmlcompanies+= '<span id='+selectedCompanies[i].id+'><i class="fas fa-times"></i>'+selectedCompanies[i].company_name+'</span>';
                    }
                    $('#choosen_companies').html('あなたが選択しました: '+ htmlcompanies);
                    var listid = selectedCompanies.map(function(el){
                        return el.id;
                    });
                    $('#company_id').val(JSON.stringify(listid));
                    htmlcompanies = '';
                    return false;
                }
            });
            $('body').on('click', '#choosen_companies span i', function() {
                var selected_id = $(this).parent('span').attr('id');                
                selectedCompanies = selectedCompanies.filter(function(el){
                    return el.id != selected_id
                });
                
                var listid = selectedCompanies.map(function(el){
                    return el.id;
                });                
                $(this).parent('span').remove();
                $('#company_id').val(JSON.stringify(listid));
                if(selectedCompanies.length == 0) {
                    $('#choosen_companies').html('');
                }
            });
        });


        //impossible areas;
        var selectedAreas = {!! json_encode($impossibleAreas) !!};
        var htmlareas = '';            
        $("#impossible_area").autocomplete({
            source: function(request, response) {
                var selectedPrefectures = $('#pref').val();
                $.ajax({
                    url:"{{route('admin.callArea')}}",
                    type: 'post',
                    dataType: "json",
                    data: {
                        _token: CSRF_TOKEN,
                        search: request.term,
                        prefs: selectedPrefectures
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },                
            select: function (event, ui) {
                $('#impossible_area').val('');
                var isExist = selectedAreas.some(function(el) {
                    return el.id === ui.item.value;
                });                    
                if(isExist) {
                    alert('エリアが存在します');
                    $('#impossible_area').val('');
                    return false;
                }                   
                selectedAreas.push({
                    id:ui.item.value,
                    name:ui.item.label
                });        
                
                for (i = 0; i < selectedAreas.length; i++) {
                    htmlareas+= '<span id='+selectedAreas[i].id+'><i class="fas fa-times"></i>'+selectedAreas[i].name+'</span>';
                }
                

                $('#choosen_areas').html('あなたが選択しました: '+ htmlareas);
                var listid = selectedAreas.map(function(el){
                    return el.id;
                });
                $('#impossible_area_id').val(JSON.stringify(listid));
                htmlareas = '';
                return false;
            }
        });
        $('body').on('click', '#choosen_areas span i', function() {
            var selected_id = $(this).parent('span').attr('id');                
            selectedAreas = selectedAreas.filter(function(el){
                return el.id != selected_id
            });
            var listid = selectedAreas.map(function(el){
                return el.id;
            });                
            $(this).parent('span').remove();
            $('#impossible_area_id').val(JSON.stringify(listid));
            if(selectedAreas.length == 0) {
                $('#choosen_areas').html('');
            }
        });
    </script>
@endsection