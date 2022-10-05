@extends('front.layout',['body_class' => 'homepage step1 navstate_show'])
<style>
  .hidden{display:hidden !important}
</style>
@section('append_head')
  <script>
    function joinName(type, arr) {
    var stringJoined = '';    
    for(var i = 0; i < arr.length; i++) { 
        if(arr.length - 1 == i) {
            stringJoined += type+'_'+arr[i]
        }else {
            stringJoined += type+'_'+arr[i]+'--'
        }            
    }
    return stringJoined;
}

function gennerateUrl() {
    if(dataSearch.area == '') {
        //if area    
        if(dataSearch.genre !== '') {
            if(dataSearch.stickings.length > 0) {                
                dataSearch.url_search = homeurl + '/search' + '/' + dataSearch.genre + '/' + joinName('sticking', dataSearch.stickings);
            }else {
                dataSearch.url_search = homeurl + '/search' + '/' + dataSearch.genre ;
            }
        }
    }else {
        //if no area
        var newUrl = homeurl + '/search' + '/' + dataSearch.area;
        dataSearch.url_search = newUrl;
        if(dataSearch.cities.length == 0) {
            if(dataSearch.genre !== '') {                
                if(dataSearch.stickings.length > 0) {             
                    dataSearch.url_search = homeurl + '/search' + '/' + dataSearch.genre + '/' + dataSearch.area + '/' + joinName('sticking', dataSearch.stickings);
                }else {
                    dataSearch.url_search = homeurl + '/search' + '/' + dataSearch.genre + '/' + dataSearch.area;
                }
            }  
        }else {
            newUrl  = newUrl + '/' + joinName('city', dataSearch.cities);
            dataSearch.url_search = newUrl;
            if(dataSearch.genre !== '') {
                if(dataSearch.genre !== '') {                
                    if(dataSearch.stickings.length > 0) {             
                        dataSearch.url_search = homeurl + '/search' + '/' + dataSearch.genre + '/' + dataSearch.area + '/' + joinName('city', dataSearch.cities) + '/' + joinName('sticking', dataSearch.stickings);
                    }else {
                        dataSearch.url_search = homeurl + '/search' + '/' + dataSearch.genre + '/' + dataSearch.area + '/' + joinName('city', dataSearch.cities);
                    }
                }                  
            }
        }
    }
    $('.btnafix').attr('href', dataSearch.url_search);
}

    var click_type = "{{$click_type}}";
    @if($dataSearch)
      var dataSearch = {!! $dataSearch !!} ;
      if(click_type == 1) {
        dataSearch.cities = [];
      }
    @else
      var dataSearch = {
        url_search: homeurl + '/search',    
        area: "",
        genre: '',
        cities: [],
        stickings: [],
      };
    @endif
  </script>
@endsection
@section('content')
{{-- {{dd($prefs)}} --}}
<main class="main_body p-top">
  <input type="hidden" name="home_route" value="{{ route('front.home.ajax') }}">
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap"> 
      <div class="content site-content" id="content"> 
        <!-- block__search-->
        <div class="block__search disp_history">
          <!-- block__search--head-->
          <div class="block__search--head search_head_pc">
            <div class="block__search--headicon"><img src="{{asset('common_img/iconno1.png')}}" alt="※匿名リサーチ機構調べ(2020年9月)"><small>※匿名リサーチ機構調べ<br>(2020年9月)</small></div>
            <div class="block__search--headtxt">
              <h2 class="titstep">全国の不動産・住宅会社の検索・一括資料請求サイト</h2>
              <h2 class="titstep1"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep2"><span class="area_click">全国の不動産・住宅会社を探す</span><span class="genre_click"></span></h2>
              <h2 class="titstep3"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep4">詳細条件</h2>
              <!-- <h2 class="titstep4"><span class="area_click"></span><span class="genre_click"></span></h2> -->
              <p class="logo dispc"><img src="{{asset('common_img/logowhite.png')}}" alt="utorie（ウトリエ）"></p>
              <div class="buttonarr buttonReguest"><a class="btnRequest" href="{{route('front.catalog.index')}}"><span>一括資料請求する</span></a></div>
            </div>
          </div>
          <div class="block__search--head search_head_sp">
            <div class="block__search--headicon"><img src="{{asset('common_img/iconno1.png')}}" alt="※匿名リサーチ機構調べ(2020年9月)"><small>※匿名リサーチ機構調べ<br>(2020年9月)</small></div>
            <div class="block__search--headtxt">
              <h2 class="titstep">全国の不動産・住宅会社の検索・一括資料請求サイト</h2>
              <h2 class="titstep1"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep2"><span class="area_click"></span><span class="genre_click">全国の不動産・住宅会社を探す</span></h2>
              <h2 class="titstep3"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep4">詳細条件</h2>
              <!-- <h2 class="titstep4"><span class="area_click"></span><span class="genre_click"></span></h2> -->
              <p class="logo dispc"><img src="{{asset('common_img/logowhite.png')}}" alt="utorie（ウトリエ）"></p>
              <div class="buttonarr buttonReguest"><a class="btnRequest" href="{{route('front.catalog.index')}}"><span>一括資料請求する</span></a></div>
            </div>
          </div>
          <!-- /block__search--head-->
          <!-- block__search--body-->
          <div class="block__search--body">
            <!-- #genre-->
            <div class="block__genre block__search--genre" id="genre">
              <div class="block__search--tit dispc"><h3 class="tit">ジャンルから探す</h3></div>
              <div class="block__search--block">
                <h4>買う・建てる</h4>
                <div class="block__search--inbox twocol">
                  <div class="buttonarr btnicon btnicon--icon1">
                    <button class="js-btnGenre" id="house-maker" data-name="ikkodate"><span>ハウスメーカー</span></button>
                  </div>
                  <div class="buttonarr btnicon btnicon--icon2">
                    <button class="js-btnGenre" id="real-company" data-name="tochi"><span>不動産会社（土地）</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--block">
                <h4>リフォームする</h4>
                <div class="block__search--inbox">
                  <div class="buttonarr btnicon btnicon--icon3">
                    <button class="js-btnGenre" id="remodeling-company" data-name="remodel"><span>リフォーム会社</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--block mb00">
                <h4>投資する</h4>
                <div class="block__search--inbox">
                  <div class="buttonarr btnicon btnicon--icon4">
                    <button class="js-btnGenre" id="real-estate" data-name="toushi"><span>不動産投資会社</span></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /#genre-->
            <!-- #area-->
                   
            <div class="block__area dispc block__search--area" id="area">
              <div class="block__search--tit"><h3 class="tit">エリアから探す</h3></div>
              <div class="block__search--map" id="map">
                <div class="buttonarr mapHokkaido maparea">                  
                  <button class="js-btnArea" data-pref="1" data-url="hokkaido"><span>北海道</span></button>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr mapChugoku">
                    <button class="js-btnArea" data-pref=""><span>中国</span><small>岡山/広島<br>鳥取/島根<br>山口</small></button>
                  </div>
                  <div class="buttonarr mapKoshinetu">
                    <button class="js-btnArea" data-pref=""><span>甲信越・北陸</span><small>山梨/長野/新潟<br>富山/石川/福井</small></button>
                  </div>
                  <div class="buttonarr mapTohoku">
                    <button class="js-btnArea" data-pref=""><span>東北</span><small>青森/岩手/秋田<br>宮城/山形/福島</small></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr mapKyushu">
                    <button class="js-btnArea" data-pref=""><span>九州・沖縄</span><small>福岡/佐賀/長崎<br>熊本/大分/宮崎<br>鹿児島/沖縄</small></button>
                  </div>
                  <div class="buttonarr mapKansai">
                    <button class="js-btnArea" data-pref=""><span>関西</span><small>大阪/兵庫/京都<br>滋賀/奈良/和歌山</small></button>
                  </div>
                  <div class="buttonarr mapTokai">
                    <button class="js-btnArea" data-pref=""><span>東海</span><small>愛知/静岡<br>岐阜/三重</small></button>
                  </div>
                  <div class="buttonarr mapKanto">
                    <button class="js-btnArea" data-pref=""><span>関東</span><small>東京/神奈川<br>千葉/埼玉/茨城<br>栃木/群馬</small></button>
                  </div>
                </div>
                <div class="buttonarr mapShikoku">
                  <button class="js-btnArea" data-pref=""><span>四国</span><small>愛媛/香川<br>高知/徳島</small></button>
                </div>
              </div>
              <div class="block__search--mapTohoku dn maparea" id="mapTohoku">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="2" data-url="aomori"><span>青森県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="5" data-url="akita"><span>秋田県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="3" data-url="iwate"><span>岩手県</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="6" data-url="yamagata"><span>山形県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="4" data-url="miyagi"><span>宮城県</span></button>
                  </div>
                </div>
                <div class="flexbox row4">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="7" data-url="fukushima"><span>福島県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKanto dn maparea" id="mapKanto">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="10" data-url="gunnma"><span>群馬県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="9" data-url="tochigi"><span>栃木県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="11" data-url="saitama"><span>埼玉県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="8" data-url="ibaragi"><span>茨城県</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="13" data-url="tokyo"><span>東京都</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="12" data-url="chiba"><span>千葉県</span></button>
                  </div>
                </div>
                <div class="flexbox row4">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="14" data-url="kanagawa"><span>神奈川県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKoshinetu dn maparea" id="mapKoshinetu">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="15" data-url="niigata"><span>新潟県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="17" data-url="ishikawa"><span>石川県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="16" data-url="toyama"><span>富山県</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="18" data-url="fukui"><span>福井県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="20" data-url="nagano"><span>長野県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="19" data-url="yamanashi"><span>山梨県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapTokai dn maparea" id="mapTokai">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="21" data-url="gifu"><span>岐阜県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="24" data-url="mie"><span>三重県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="23" data-url="aichi"><span>愛知県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="22" data-url="shizuoka"><span>静岡県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapChugoku dn maparea" id="mapChugoku">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="32" data-url="shimane"><span>島根県</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="31" data-url="tottori"><span>鳥取県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="35" data-url="yamaguchi"><span>山口県</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="34" data-url="hiroshima"><span>広島県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="33" data-url="okayama"><span>岡山県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKansai dn maparea" id="mapKansai">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="28" data-url="hyougo"><span>兵庫県</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="26" data-url="kyouto"><span>京都府</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="25" data-url="shiga"><span>滋賀県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="27" data-url="oosaka"><span>大阪府</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="29" data-url="nara"><span>奈良県</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="30" data-url="wakayama"><span>和歌山県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapShikoku dn maparea" id="mapShikoku">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="38" data-url="ehime"><span>愛媛県</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="37" data-url="kagawa"><span>香川県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="39" data-url="kouchi"><span>高知県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="36" data-url="tokushima"><span>徳島県</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKyushu dn maparea" id="mapKyushu">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="42" data-url="nagasaki"><span>長崎県</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="41" data-url="saga"><span>佐賀県</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="40" data-url="fukuoka"><span>福岡県</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="43" data-url="kumamoto"><span>熊本県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="44" data-url="ooita"><span>大分県</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="46" data-url="kagoshima"><span>鹿児島県</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="45" data-url="miyazaki"><span>宮崎県</span></button>
                  </div>
                </div>
                <div class="flexbox row4">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="47" data-url="okinawa"><span>沖縄県</span></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /#area-->
            <!-- #areaSP-->
            <div class="block__search--area block__area--forsp dissp" id="areaSP">
              <div class="block__area--block areaHokkaido maparea js-btnArea btnArea_especially" data-pref="1" data-url="hokkaido"><span class="block__area--tit acr_title">北海道</span>
              </div>
              <div class="block__area--block areaTohoku maparea"><span class="block__area--tit acr_title">東北</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">                    
                    <button class="js-btnArea" data-pref="2" data-url="aomori"><span>青森県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="5" data-url="akita"><span>秋田県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="3" data-url="iwate"><span>岩手県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="6" data-url="yamagata"><span>山形県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="4" data-url="miyagi"><span>宮城県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="7" data-url="fukushima"><span>福島県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKanto maparea"><span class="block__area--tit acr_title">関東</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="10" data-url="gunnma"><span>群馬県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="9" data-url="tochigi"><span>栃木県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="11" data-url="saitama"><span>埼玉県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="8" data-url="ibaragi"><span>茨城県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="13" data-url="tokyo"><span>東京都</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="12" data-url="chiba"><span>千葉県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="14" data-url="kanagawa"><span>神奈川県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKoshinetu maparea"><span class="block__area--tit acr_title">甲信越・北陸</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="15" data-url="niigata"><span>新潟県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="17" data-url="ishikawa"><span>石川県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="16" data-url="toyama"><span>富山県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="18" data-url="fukui"><span>福井県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="20" data-url="nagano"><span>長野県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="19" data-url="yamanashi"><span>山梨県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaTokai maparea"><span class="block__area--tit acr_title">東海</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="21" data-url="gifu"><span>岐阜県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="24" data-url="mie"><span>三重県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="23" data-url="aichi"><span>愛知県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="22" data-url="shizuoka"><span>静岡県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKansai maparea"><span class="block__area--tit acr_title">関西</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="28" data-url="hyougo"><span>兵庫県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="26" data-url="kyouto"><span>京都府</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="25" data-url="shiga"><span>滋賀県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="27" data-url="oosaka"><span>大阪府</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="29" data-url="nara"><span>奈良県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="30" data-url="wakayama"><span>和歌山県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaShikoku maparea"><span class="block__area--tit acr_title">四国</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="38" data-url="ehime"><span>愛媛県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="37" data-url="kagawa"><span>香川県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="39" data-url="kouchi"><span>高知県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="36" data-url="tokushima"><span>徳島県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaChugoku maparea"><span class="block__area--tit acr_title">中国</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="32" data-url="shimane"><span>島根県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="31" data-url="tottori"><span>鳥取県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="35" data-url="yamaguchi"><span>山口県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="34" data-url="hiroshima"><span>広島県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="33" data-url="okayama"><span>岡山県</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKyusyu maparea"><span class="block__area--tit acr_title">九州・沖縄</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="42" data-url="nagasaki"><span>長崎県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="41" data-url="saga"><span>佐賀県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="40" data-url="fukuoka"><span>福岡県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="43" data-url="kumamoto"><span>熊本県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="44" data-url="ooita"><span>大分県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="46" data-url="kagoshima"><span>鹿児島県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="45" data-url="miyazaki"><span>宮崎県</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="47" data-url="okinawa"><span>沖縄県</span></button>
                  </li>
                </ul>
              </div>
            </div>

            <!-- /#areaSP-->
            <!-- #city-->
            <div class="block__city block__search--city" id="city">
              <div class="block__city--search">
                <div class="boxsearch">
                  <input class="input-search" type="text" id="search_area" placeholder="市区郡名を入力">
                  <button class="input-btnzoom btn-search"><span><img src="{{asset('common_img/icon/icon-z.png')}}" alt="icon"></span></button>
                </div>
              </div>
              <div id="append_area">
              </div>
              <div class="block__city--btn flexbox">
                <div class="buttonarr buttonarr-submit">
                  <input id="url_prefix"  type="hidden" data-url="{{route('front.search.index')}}">
                  <a href="{{route('front.search.index')}}" class="btnafix"><span>検索</span></a>
                </div>
                <div class="buttonarr js-btnAddcondition buttonarr-white">
                  <button class="choose_sticking_point"><span>条件追加</span></button>
                </div>
              </div>
            </div>
            <!-- /#city-->
            <!-- #condition-->
            <div class="block__city block__search--condition" id="condition">
              <div class="block__city--tit area_type_2"><span>ジャンル</span></div>
              <div class="block__city--list block__city--stick">
                <ul class="flexbox">
                  @foreach ($genres as $genre)
                    <li class="js-sticking" data-id="{{ $genre['id'] }}" data-name="{{$genre['url_text']}}">
                      <input type="radio" class="" id="genre-{{$genre['url_text']}}" name="genrecate">
                      <label for="genre-{{$genre['url_text']}}">{{ $genre['name'] }}</label>
                    </li>
                  @endforeach
                </ul>
              </div>
              <form action="{{ route('front.search.index') }}" method="get">
                <div class="ajax_sticking_point">
                  {{-- <div class="block__city--tit"><span>ダミーテキスト</span></div> --}}
                  {{-- <div class="block__city--list">
                    <ul class="flexbox">
                      <li class="block__city--input">
                        <input type="checkbox" id="other1">
                        <label for="other1">大阪市全域</label>
                      </li>
                    </ul>
                  </div> --}}
                </div>
                {{-- <div class="sticking_point--sp dissp">
                  <div class="block__city--tit"><span>一行表示</span></div>
                  <div class="block__city--list">
                    <ul class="flexbox">
                      <li class="block__city--input">
                        <input type="checkbox" id="ex1">
                        <label for="ex1">ローコスト住宅<small>1,000万円台／坪単価20万から40万円台</small></label>
                      </li>
                      <li class="block__city--input">
                        <input type="checkbox" id="ex2">
                        <label for="ex2">ハイグレード住宅<small>3,000万円以上／坪単価100万円以上</small></label>
                      </li>
                      <li class="block__city--input">
                        <input type="checkbox" id="ex3">
                        <label for="ex3">1行1行1行1行1行1行1行1行1行1行1行1行1行1</label>
                      </li>
                    </ul>
                  </div>
                  <div class="block__city--tit"><span>二行表示</span></div>
                  <div class="block__city--list type2">
                    <ul class="flexbox">
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex4">
                        <label for="ex4">水まわり<small>キッチン・システムキッチン  |  浴室・バス・ユニットバス  |  洗面所・脱衣所  |  トイレ</small></label>
                      </li>
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex5">
                        <label for="ex5">屋内<small>リビング・ダイニング  |  収納  |  寝室  |  和室  |  子ども部屋  |  書斎  |  ロフト  |  洋室  |  階段  |  廊下  |  玄関</small></label>
                      </li>
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex6">
                        <label for="ex6">1行1行1行</label>
                      </li>
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex7">
                        <label for="ex7">2行2行2行2行2行2行2行2行2行2行</label>
                      </li>
                    </ul>
                  </div>
                </div> --}}
                <div class="block__city--btn flexbox">
                  <div class="buttonarr buttonarr-submit">
                    <a class="btnafix company_search" href="{{route('front.search.index')}}"><span>この条件で検索する</span></a>
                  </div>
                </div>
              </form>
            </div>
            <!-- /#condition-->
          </div>
          <!-- /block__search--body-->
        </div>
        <!-- /block__search-->
      </div>
      <!-- sidebar-->
      <aside class="sidebar dispc">
        @include('front.components.images-sidebar')
      </aside>
      <!-- /sidebar-->
    </div>

    <!-- block city - sticking when click button change -->
    <div class="container">
      <div class="citychange"></div>
      <div class="stickingchange"></div>
    </div>
    <!-- /block city - sticking when click button change -->

  </section>
  <!-- /Mainlayout -->

  <!-- blockbtnsearch -->
  <section class="block__btnsearch dissp">
    <div class="container">
      <div class="titpage">
        <h2>エリアから探す</h2>
      </div>
      <div class="flexbox togglearc">
        <div class="buttonarr hokkaido">
          <button class="js-btnArea" data-area="areaHokkaido"><span>北海道</span></button>
        </div>
        <div class="buttonarr tohoku">
          <button class="js-btnArea" data-area="areaTohoku"><span>東北</span></button>
        </div>
        <div class="buttonarr kanto">
          <button class="js-btnArea" data-area="areaKanto"><span>関東</span></button>
        </div>
        <div class="buttonarr koshinetu">
          <button class="js-btnArea" data-area="areaKoshinetu"><span>甲信越・北陸</span></button>
        </div>
        <div class="buttonarr tokai">
          <button class="js-btnArea" data-area="areaTokai"><span>東海</span></button>
        </div>
        <div class="buttonarr kansai">
          <button class="js-btnArea" data-area="areaKansai"><span>関西</span></button>
        </div>
        <div class="buttonarr shikoku">
          <button class="js-btnArea" data-area="areaShikoku"><span>四国</span></button>
        </div>
        <div class="buttonarr chugoku">
          <button class="js-btnArea" data-area="areaChugoku"><span>中国</span></button>
        </div>
        <div class="buttonarr kyusyu">
          <button class="js-btnArea" data-area="areaKyusyu"><span>九州・沖縄</span></button>
        </div>
      </div>
    </div>
  </section>
  <!-- /blockbtnsearch -->

  <!-- block__materials -->
  @include('front.components.materials')
  <!-- /block__materials -->

  <!-- block__column -->
  @include('front.components.columns')
  <!-- /block__column -->

  <section class="sidebar dissp">
    <div class="container">
      @include('front.components.images-sidebar-sp')
    </div>
  </section>

  <!-- button for SP -->
  <div class="btnbottom">
    <div class="block__city--btn flexbox btncity"></div>
    <div class="block__city--btn flexbox btnsticking"></div>
  </div>
  <!-- /button for SP -->
</main>

@endsection
@section('append_foot')
  <script>      
    $(document).ready(function() {      
      var remember = [];       
      function Viewtype(obj, id) {
        return obj.some(function(val){ return val.view_type == id }) 
      }
      function Supplementary(obj, id) {
        return obj.some(function(val){ return val.is_sup == id }) 
      }
      var viewportW = jQuery(window).width(),
          viewportH = jQuery(window).height();
      
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
          }
      });

      $('body').on('click','.buttonarr-submit',function(){
          $('.block__search--condition .ajax_sticking_point .block__city--tit').each(function(k,v){
            var key = k;
            remember.push(
              {
                title: $(this).text()
              }
            )
            remember[key].choose = []
            $(this).next('div.block__city--list').find('li.block__city--input').each(function(){
              if ($(this).children('input').is(":checked")) {
                remember[key].choose.push($(this).children('input').attr('data-name'))
              }
            })
          })
          sessionStorage.setItem('side_bar', JSON.stringify(remember));
        })       
        .on('click', '.maparea .js-btnArea, .btnArea_especially', function (e) {
          $('html,body').animate({scrollTop: 0}, 300);
          e.preventDefault();
          var pref_name = $(this).children('span').text();
          var pref_id = $(this).attr('data-pref');
          var home_route = $('input[name="home_route"]').val();      
          $.ajax({
            type: "GET",
            url: home_route,
            data: {pref_id:pref_id, pref_name:pref_name},
            dataType: 'json',
            success: function (data) {
              sessionStorage.setItem('area_history', JSON.stringify(data));
              var list_same = title_same = list_not_same = '';
              var appeared = [];
              const area_type = data[0].get_area.filter(function (area) {
                return area.area_type === 2
              });
              
              if (area_type.length > 0) {
                var list_not_same = '<div class="block__city--tit area_type_2" style="display: block;"><span>その他の地域</span></div>\
                                                <div class="block__city--list">\
                                                  <ul class="flexbox block__city-same">'
                  $.each(area_type, function (index, el) {
                      //push to group area type 2
                      group_area['group_'+el.id] = [];
                      title_same = el.name == '文京区' ? ' 東京23区':el.name;
                      
                      if(click_type == '2'){
                        var letchecked = (dataSearch.cities.indexOf(''+el.id+'') > -1) ? 'checked' : '';
                      }else {
                        var letchecked = '';
                      }                      

                      list_same += '<div class="block__city--tit area_type_2" style="display: block;"><span>' + title_same + '</span></div>\
                                                      <div class="block__city--list">\
                                                        <ul class="flexbox block__city-same">\
                                                          <li class="block__city--input">\
                                                              <input '+letchecked+' id="allarea_'+index+'" type="checkbox" data-id="all_'+el.id+'" class="check_all js-area" value="'+el.id+'">\
                                                              <label for="allarea_'+index+'">' + title_same + '全域</label>\
                                                          </li>'
                      $.each(data[0].get_area, function (k, area) {                        
                        if(click_type == '2'){
                          var letchecked = (dataSearch.cities.indexOf(''+area.id+'') > -1) ? 'checked' : '';
                        }else {
                          var letchecked = '';
                        }
                        if ((area.name.includes('区') && area.pref == 13 && area.name!='東京23区')||(area.name.includes(el.name) == true && area.name.includes('区') && area.area_type != 2)) {
                              group_area['group_'+el.id].push(area.id)
                              list_same += '<li class="block__city--input">\
                                              <input id="areaID_' + area.id + '" '+letchecked+' type="checkbox"  value="' + area.id + '" data-name="'+ area.name +'" class="js-area" data-id="'+area.id+'">\
                                              <label for="areaID_' + area.id + '">' + area.name + '</label>\
                                            </li>'
                          } else if (area.area_type != 2 && area.name.includes('区')===false && appeared.includes(area.id)===false && area.name!='東京23区') {
                              appeared.push(area.id)
                              list_not_same += '<li class="block__city--input">\
                                                            <input '+letchecked+' id="areaID_' + area.id + '" type="checkbox" value="' + area.id + '" data-name="'+ area.name +'" class="js-area" data-id="'+area.id+'">\
                                                            <label for="areaID_' + area.id + '">' + area.name + '</label>\
                                                          </li>'
                          }
                      })
                    list_same += '</ul></div></div>'
                  })
                  list_not_same += '</ul></div></div>'
              }else{
                var list_not_same = '<div class="block__city--list">\
                                                  <ul class="flexbox block__city-same">'
                $.each(data[0].get_area, function (k, area) {                                    
                  if(click_type == '2'){
                    var letchecked = (dataSearch.cities.indexOf(''+area.id+'') > -1) ? 'checked' : '';
                  } else {
                    var letchecked = '';
                  }
                  list_not_same += '<li class="block__city--input">\
                                        <input '+letchecked+' id="areaID_' + area.id + '" type="checkbox" value="' + area.id + '" data-name="'+ area.name +'" class="js-area" data-id="'+area.id+'">\
                                        <label for="areaID_' + area.id + '">' + area.name + '</label>\
                                        </li>'
                })
                list_not_same += '</ul></div></div>'
              }
              setTimeout(function(){
                $('#append_area').html(list_same+list_not_same)
              }, 500);
              return true;
            }
        });
      })
      .on('click', '.choose_sticking_point', function (e) {

        $('input[name=genrecate]').prop('checked', false);

        var genrecate_checked = $('input[name=genrecate]:checked');
        
        genrecate_checked.trigger("click");
       
        if(genrecate_checked.length>0){
          genrecate_checked.trigger("click");
        }
        if(click_type == '1'){
          $('body').removeClass('bodygenre');
        }
        if(click_type == '1' || click_type == '2') {
          $('li[data-name="'+dataSearch.genre+'"] input').prop('checked', true);
          $('li[data-name="'+dataSearch.genre+'"] input').trigger('click');
        }else {
          $('li[data-name="'+dataSearch.genre+'"] input').prop('checked', true);
          $('li[data-name="'+dataSearch.genre+'"] input').trigger('click');
        }

      })
      .on('click', '.js-sticking', function (e) {
          $('.ajax_sticking_point').html('<div class="loader"></div>');
          $('html,body').animate({scrollTop: 0}, 300);
          e.preventDefault();
          $('input[name=genrecate]').prop('checked', false);
          $(this).find('input').addClass('active');
          $('.js-sticking').not(this).find('input').removeClass('active');          
          var genere_id = $(this).attr('data-id');

          genre_name = $(this).attr('data-name');          
          $.ajax({
              type: "GET",
              url: "{{ route('front.home.ajax') }}",
              data: {
                genere_id: genere_id
              },
              dataType: 'json',
              success: function (data) {
                var html = ''
                $.each(data, function (i, stickingpoint_cat) {
                    var sticking_points = stickingpoint_cat.get_sticking_point;
                    if($(window).width() > 768 && Supplementary(sticking_points, 1)) {
                      var checktype = 'type4col';
                    }else {
                      var checktype = 'type4col';
                    }
                    var type2 = Viewtype(sticking_points, 2) ? 'type2' : '',
                    type2col = Viewtype(sticking_points, 2) ? 'type2col' : '';
                    html += '<div class="block__city--tit"><span>' + stickingpoint_cat.name + '</span></div><div class="block__city--list '+type2+'">\
                      <ul class="default '+checktype+'">';
                    $.each(sticking_points, function (j, sticking_poin) {
                        var letchecked2 = (dataSearch.stickings.indexOf(''+sticking_poin.id+'') > -1) ? 'checked' : '';
                        console.log(dataSearch.stickings);
                        console.log(sticking_poin.id);
                        if(sticking_poin.is_sup){
                          var select_item = sticking_poin.name+'<br><small>'+sticking_poin.supplement_text+'</small>';
                        }else {
                          var select_item = sticking_poin.name;
                        }
                        html += '<li class="block__city--input">\
                                    <input '+letchecked2+' name="sticking_poin[]" value="' + sticking_poin.id + '" type="checkbox" id=' + sticking_poin.id + ' data-name="' + sticking_poin.name + '" class="sticking_poin_name">\
                                    <label for="' + sticking_poin.id + '">' + select_item + '</label>\
                                  </li>'
                    })
                    html += "</ul></div>"
                });
                function addHTML(callback){
                  $('.ajax_sticking_point').html(html);
                  callback()
                }
                function addCheck() {                  
                  // $.each(params_history.sticking, function (k,v) {
                  //   $('.sticking_poin_name[data-name="'+v+'"]').trigger('click');
                  // })
                }
                addHTML(addCheck);
              }
          })
      });

      if(click_type == '1') {
        if(dataSearch.genre !== ''){
          setTimeout(() => {
            $('button[data-name="'+dataSearch.genre+'"]').trigger('click');
          }, 500);
        }else {
          $('.homepage').removeClass('step1 step3 step4');
          if($(window).width() > 769) {
            $('.homepage').addClass('step2 bodygenre');
            $('.block__search--head.search_head_pc .titstep1 .area_click').text('全国の不動産・住宅会社を探す')
          } else {
            $('.homepage').addClass('step2');
          }
        }
        gennerateUrl();
      }
      if(click_type == '2') {
        if(dataSearch.area !== ''){                  
          $('.block__search--area .js-btnArea[data-url="'+dataSearch.area+'"]').each(function(){
            $(this).trigger('click');
          });
          $('.choose_sticking_point').each(function(){
            $(this).trigger('click');
          });
          $('.homepage').removeClass('step1 step2 step3');
          $('.homepage').addClass('step4');
          gennerateUrl();
        }else {                    
          $('.choose_sticking_point').each(function(){
            $(this).trigger('click');
          });
          $('.titstep').hide();
          $('.homepage').removeClass('step1 step2 step3');
          $('.homepage').addClass('step4');
        }
      }
      $('.btn-search').click(function(e){
        $('#append_area .area_type_2').hide();
        e.preventDefault();
        var query = $('#search_area').val().toLowerCase();
          $('#append_area li label').each(function(){
              if($(this).text().indexOf(query) == -1){
                $(this).closest('li').hide();
              }else{
                $(this).closest('li').show();
                // $('#search_area').closest('.area_type_2').show();
                $(this).closest('.block__city--list').prev('.area_type_2').show();
              }
              if (query==='') {
                $(this).closest('li').show();
              }
          })
      })
      $('#search_area').keyup(function(e){
        $('#append_area .area_type_2').hide();
        e.preventDefault();
        var query = $(this).val().toLowerCase();
          $('#append_area li label').each(function(){
              if($(this).text().indexOf(query) == -1){
                $(this).closest('li').hide();
              }else{
                $(this).closest('li').show();
                // $(this).closest('.area_type_2').show();
                $(this).closest('.block__city--list').prev('.area_type_2').show();
              }
              if (query==='') {
                $(this).closest('li').show();
              }
          })
      })
      sessionStorage.removeItem("side_bar");
      // sessionStorage.removeItem("dataSearch");
      sessionStorage.removeItem("save_all_city_name");
      sessionStorage.removeItem("save_all_city_id");
    })
  </script>
@endsection