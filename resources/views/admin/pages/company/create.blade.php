@extends('admin.layout')
@section('append_head')
    <link href="https://code.jquery.com/ui/1.12.0-rc.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
@endsection
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
                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="" style="margin-top: 1rem">カンパニー名</label><span class="required-mark">※</span>
                            <input type="text" class="form-control"  placeholder="" value="" name="company_name">
                        </div>
                        <div class="form-group">
                            <label for="">50音</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="order_character">
                        </div>
                        <div class="form-group">
                            <label for="">ジャンル</label><span class="required-mark">※</span>
                            <select name="genre_id[]" multiple="multiple" id="genre_id" class="form-control">
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre['id'] }}">{{ $genre['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group dn" id="sticking_id">
                            <label for="">こだわりポイント (Sticking Points)</label><span class="required-mark"></span>
                            <select name="sticking_id[]" multiple="multiple" class="form-control" style="height: 200px"></select>
                        </div>

                        <div class="form-group">
                            <label for="">カンパニー説明文 件名</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="company_title">
                        </div>
                        <div class="form-group">
                            <label for="">カンパニー説明文 内容</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="company_content">
                        </div>
                        <div class="form-group">
                            <label>画像(1枚目)</label><br>
                            <input type="file" name="main_img[]" id="main_img" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>画像(2枚目以降)</label><br>
                            <input type="file" name="images[]" id="image_file" class="form-control" multiple="multiple" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="">施工対応可能エリア</label>
                            <select multiple="multiple" name="pref[]" id="pref" class="form-control" style="height: 230px;">
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                @endforeach
                            </select>
                            <select name="area_id[]" multiple="multiple" id="area" class="form-control" style="height: 230px;">
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control"  placeholder="" value="" name="possible_area"> -->
                        </div>
                        <div class="form-group">
                            <label for="">施工対応不可エリア</label>
                            <div class="form-group">
                                <input type="text" placeholder="" class="form-control" id="impossible_area" value="" name="impossible_area">
                                <input type="hidden" placeholder="" class="form-control" name="impossible_area_id" id="impossible_area_id"> 
                                <div class="choosen_companies mt10" id="choosen_areas"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">会社名</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="company_name_2">
                        </div>
                        <div class="form-group">
                            <label for="">所在地</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="address">
                        </div>
                        <!-- <div class="form-group">
                            <label for="">所在地</label>
                            <select multiple="multiple" name="pref[]" id="pref" class="form-control" style="height: 230px;">
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture['id'] }}">{{ $prefecture['namename'] }}</option>
                                @endforeach
                            </select>
                            <select name="area_id[]" multiple="multiple" id="area" class="form-control" style="height: 230px;">
                                @foreach ($prefectures as $prefecture)
                                    <option value="{{ $prefecture['id'] }}">{{ $prefecture['name'] }}</option>
                                @endforeach
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="">設立</label>
                            <input class="form-control" placeholder="yyyy-mm-dd" type="text" value="" id="example-date-input"  name="establishment_date">
                        </div>
                        <div class="form-group">
                            <label for="">代表者</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="representative">
                        </div>
                        <div class="form-group">
                            <label for="">資本金</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="capital">
                        </div>
                        <div class="form-group">
                            <label for="">従業員数</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="employees">
                        </div>
                        <div class="form-group">
                            <label for="">参考坪単価</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="unit_price">
                        </div>
                        <div class="form-group">
                            <label for="">施工実績</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="construction_results">
                        </div>
                        <div class="form-group">
                            <label for="">取扱い工法</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="handling_method">
                        </div>
                        <div class="form-group">
                            <label for="">アフター・保証</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="after_warranty">
                        </div>
                        <div class="form-group">
                            <label for="">建設業許可番号</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="construction_permit">
                        </div>
                        <div class="form-group">
                            <label for="">ホームページ</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="home_page">
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="facebook">
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="instagram">
                        </div>
                        <div class="form-group">
                            <label for="">LINE</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="line">
                        </div>
                        <div class="form-group">
                            <label for="">Pinterest</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="pinterest">
                        </div>
                        <div class="form-group">
                            <label for="">YouTube</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="youtube">
                        </div>
                        <div class="form-group">
                            <label for="">メールアドレス</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">備考</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="remarks">
                        </div>
                        <div class="form-group">
                            <label for="">HTML</label>
                            <textarea class="form-control"  name="html" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">検索表示フラグ</label>
                            <div class="form-group">
                                <input type="radio" name="display_flg" class="ml-50" value="1"><span> 表示</span>
                                <input type="radio" name="display_flg" class="ml-50" value="0" checked><span> 非表示</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">検索表示優先度</label>
                            <input type="text" class="form-control"  placeholder="" value="" name="display_priority">
                        </div>
                        <div class="form-group">
                            <label for="">公開設定</label><span class="required-mark">※</span>
                            <div class="form-group">
                                <input type="radio" name="index" class="ml-50" value="0" checked><span> index</span>
                                <input type="radio" name="index" class="ml-50" value="1"><span> noindex</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">関連会社</label><span class="required-mark">※</span>
                            <div class="form-group">
                                <input type="text" placeholder="" class="form-control" id="company_search" value="">
                                <input type="hidden" placeholder="" class="form-control" name="company_id" id="company_id"> 
                                <div class="choosen_companies mt10" id="choosen_companies"></div>
                            </div>
                        </div>
                        <input type="hidden" id="ajax_route" name="ajax_route" value="{{ route('company.index') }}">
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
        var selectedCompanies = [];
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
                        name:ui.item.label
                    });                    
                    for (i = 0; i < selectedCompanies.length; i++) {
                        htmlcompanies+= '<span id='+selectedCompanies[i].id+'><i class="fas fa-times"></i>'+selectedCompanies[i].name+'</span>';
                    }
                    console.log(ui);
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


            //impossible areas;
            var selectedAreas = [];
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
                        $("select#area option[value='"+selectedAreas[i].id+"']").prop("selected", false);
                        console.log(selectedAreas[i].id);
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
        });
    </script>
@endsection