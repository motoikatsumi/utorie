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
            <div class="block__search--headicon"><img src="{{asset('common_img/iconno1.png')}}" alt="?????????????????????????????????(2020???9???)"><small>?????????????????????????????????<br>(2020???9???)</small></div>
            <div class="block__search--headtxt">
              <h2 class="titstep">????????????????????????????????????????????????????????????????????????</h2>
              <h2 class="titstep1"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep2"><span class="area_click">??????????????????????????????????????????</span><span class="genre_click"></span></h2>
              <h2 class="titstep3"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep4">????????????</h2>
              <!-- <h2 class="titstep4"><span class="area_click"></span><span class="genre_click"></span></h2> -->
              <p class="logo dispc"><img src="{{asset('common_img/logowhite.png')}}" alt="utorie??????????????????"></p>
              <div class="buttonarr buttonReguest"><a class="btnRequest" href="{{route('front.catalog.index')}}"><span>????????????????????????</span></a></div>
            </div>
          </div>
          <div class="block__search--head search_head_sp">
            <div class="block__search--headicon"><img src="{{asset('common_img/iconno1.png')}}" alt="?????????????????????????????????(2020???9???)"><small>?????????????????????????????????<br>(2020???9???)</small></div>
            <div class="block__search--headtxt">
              <h2 class="titstep">????????????????????????????????????????????????????????????????????????</h2>
              <h2 class="titstep1"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep2"><span class="area_click"></span><span class="genre_click">??????????????????????????????????????????</span></h2>
              <h2 class="titstep3"><span class="area_click"></span><span class="genre_click"></span></h2>
              <h2 class="titstep4">????????????</h2>
              <!-- <h2 class="titstep4"><span class="area_click"></span><span class="genre_click"></span></h2> -->
              <p class="logo dispc"><img src="{{asset('common_img/logowhite.png')}}" alt="utorie??????????????????"></p>
              <div class="buttonarr buttonReguest"><a class="btnRequest" href="{{route('front.catalog.index')}}"><span>????????????????????????</span></a></div>
            </div>
          </div>
          <!-- /block__search--head-->
          <!-- block__search--body-->
          <div class="block__search--body">
            <!-- #genre-->
            <div class="block__genre block__search--genre" id="genre">
              <div class="block__search--tit dispc"><h3 class="tit">????????????????????????</h3></div>
              <div class="block__search--block">
                <h4>??????????????????</h4>
                <div class="block__search--inbox twocol">
                  <div class="buttonarr btnicon btnicon--icon1">
                    <button class="js-btnGenre" id="house-maker" data-name="ikkodate"><span>?????????????????????</span></button>
                  </div>
                  <div class="buttonarr btnicon btnicon--icon2">
                    <button class="js-btnGenre" id="real-company" data-name="tochi"><span>???????????????????????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--block">
                <h4>?????????????????????</h4>
                <div class="block__search--inbox">
                  <div class="buttonarr btnicon btnicon--icon3">
                    <button class="js-btnGenre" id="remodeling-company" data-name="remodel"><span>?????????????????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--block mb00">
                <h4>????????????</h4>
                <div class="block__search--inbox">
                  <div class="buttonarr btnicon btnicon--icon4">
                    <button class="js-btnGenre" id="real-estate" data-name="toushi"><span>?????????????????????</span></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /#genre-->
            <!-- #area-->
                   
            <div class="block__area dispc block__search--area" id="area">
              <div class="block__search--tit"><h3 class="tit">?????????????????????</h3></div>
              <div class="block__search--map" id="map">
                <div class="buttonarr mapHokkaido maparea">                  
                  <button class="js-btnArea" data-pref="1" data-url="hokkaido"><span>?????????</span></button>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr mapChugoku">
                    <button class="js-btnArea" data-pref=""><span>??????</span><small>??????/??????<br>??????/??????<br>??????</small></button>
                  </div>
                  <div class="buttonarr mapKoshinetu">
                    <button class="js-btnArea" data-pref=""><span>??????????????????</span><small>??????/??????/??????<br>??????/??????/??????</small></button>
                  </div>
                  <div class="buttonarr mapTohoku">
                    <button class="js-btnArea" data-pref=""><span>??????</span><small>??????/??????/??????<br>??????/??????/??????</small></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr mapKyushu">
                    <button class="js-btnArea" data-pref=""><span>???????????????</span><small>??????/??????/??????<br>??????/??????/??????<br>?????????/??????</small></button>
                  </div>
                  <div class="buttonarr mapKansai">
                    <button class="js-btnArea" data-pref=""><span>??????</span><small>??????/??????/??????<br>??????/??????/?????????</small></button>
                  </div>
                  <div class="buttonarr mapTokai">
                    <button class="js-btnArea" data-pref=""><span>??????</span><small>??????/??????<br>??????/??????</small></button>
                  </div>
                  <div class="buttonarr mapKanto">
                    <button class="js-btnArea" data-pref=""><span>??????</span><small>??????/?????????<br>??????/??????/??????<br>??????/??????</small></button>
                  </div>
                </div>
                <div class="buttonarr mapShikoku">
                  <button class="js-btnArea" data-pref=""><span>??????</span><small>??????/??????<br>??????/??????</small></button>
                </div>
              </div>
              <div class="block__search--mapTohoku dn maparea" id="mapTohoku">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="2" data-url="aomori"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="5" data-url="akita"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="3" data-url="iwate"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="6" data-url="yamagata"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="4" data-url="miyagi"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row4">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="7" data-url="fukushima"><span>?????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKanto dn maparea" id="mapKanto">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="10" data-url="gunnma"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="9" data-url="tochigi"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="11" data-url="saitama"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="8" data-url="ibaragi"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="13" data-url="tokyo"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="12" data-url="chiba"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row4">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="14" data-url="kanagawa"><span>????????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKoshinetu dn maparea" id="mapKoshinetu">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="15" data-url="niigata"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="17" data-url="ishikawa"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="16" data-url="toyama"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="18" data-url="fukui"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="20" data-url="nagano"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="19" data-url="yamanashi"><span>?????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapTokai dn maparea" id="mapTokai">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="21" data-url="gifu"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="24" data-url="mie"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="23" data-url="aichi"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="22" data-url="shizuoka"><span>?????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapChugoku dn maparea" id="mapChugoku">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="32" data-url="shimane"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="31" data-url="tottori"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="35" data-url="yamaguchi"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="34" data-url="hiroshima"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="33" data-url="okayama"><span>?????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKansai dn maparea" id="mapKansai">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="28" data-url="hyougo"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="26" data-url="kyouto"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="25" data-url="shiga"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="27" data-url="oosaka"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="29" data-url="nara"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="30" data-url="wakayama"><span>????????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapShikoku dn maparea" id="mapShikoku">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="38" data-url="ehime"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="37" data-url="kagawa"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="39" data-url="kouchi"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="36" data-url="tokushima"><span>?????????</span></button>
                  </div>
                </div>
              </div>
              <div class="block__search--mapKyushu dn maparea" id="mapKyushu">
                <div class="flexbox row1">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="42" data-url="nagasaki"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="41" data-url="saga"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr"> 
                    <button class="js-btnArea" data-pref="40" data-url="fukuoka"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row2">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="43" data-url="kumamoto"><span>?????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="44" data-url="ooita"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row3">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="46" data-url="kagoshima"><span>????????????</span></button>
                  </div>
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="45" data-url="miyazaki"><span>?????????</span></button>
                  </div>
                </div>
                <div class="flexbox row4">
                  <div class="buttonarr">
                    <button class="js-btnArea" data-pref="47" data-url="okinawa"><span>?????????</span></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /#area-->
            <!-- #areaSP-->
            <div class="block__search--area block__area--forsp dissp" id="areaSP">
              <div class="block__area--block areaHokkaido maparea js-btnArea btnArea_especially" data-pref="1" data-url="hokkaido"><span class="block__area--tit acr_title">?????????</span>
              </div>
              <div class="block__area--block areaTohoku maparea"><span class="block__area--tit acr_title">??????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">                    
                    <button class="js-btnArea" data-pref="2" data-url="aomori"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="5" data-url="akita"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="3" data-url="iwate"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="6" data-url="yamagata"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="4" data-url="miyagi"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="7" data-url="fukushima"><span>?????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKanto maparea"><span class="block__area--tit acr_title">??????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="10" data-url="gunnma"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="9" data-url="tochigi"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="11" data-url="saitama"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="8" data-url="ibaragi"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="13" data-url="tokyo"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="12" data-url="chiba"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="14" data-url="kanagawa"><span>????????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKoshinetu maparea"><span class="block__area--tit acr_title">??????????????????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="15" data-url="niigata"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="17" data-url="ishikawa"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="16" data-url="toyama"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="18" data-url="fukui"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="20" data-url="nagano"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="19" data-url="yamanashi"><span>?????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaTokai maparea"><span class="block__area--tit acr_title">??????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="21" data-url="gifu"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="24" data-url="mie"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="23" data-url="aichi"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="22" data-url="shizuoka"><span>?????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKansai maparea"><span class="block__area--tit acr_title">??????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="28" data-url="hyougo"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="26" data-url="kyouto"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="25" data-url="shiga"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="27" data-url="oosaka"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="29" data-url="nara"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="30" data-url="wakayama"><span>????????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaShikoku maparea"><span class="block__area--tit acr_title">??????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="38" data-url="ehime"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="37" data-url="kagawa"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="39" data-url="kouchi"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="36" data-url="tokushima"><span>?????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaChugoku maparea"><span class="block__area--tit acr_title">??????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="32" data-url="shimane"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="31" data-url="tottori"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="35" data-url="yamaguchi"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="34" data-url="hiroshima"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="33" data-url="okayama"><span>?????????</span></button>
                  </li>
                </ul>
              </div>
              <div class="block__area--block areaKyusyu maparea"><span class="block__area--tit acr_title">???????????????</span>
                <ul class="block__area--list acr_con">
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="42" data-url="nagasaki"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="41" data-url="saga"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="40" data-url="fukuoka"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="43" data-url="kumamoto"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="44" data-url="ooita"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="46" data-url="kagoshima"><span>????????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="45" data-url="miyazaki"><span>?????????</span></button>
                  </li>
                  <li class="block__area--btn">
                    <button class="js-btnArea" data-pref="47" data-url="okinawa"><span>?????????</span></button>
                  </li>
                </ul>
              </div>
            </div>

            <!-- /#areaSP-->
            <!-- #city-->
            <div class="block__city block__search--city" id="city">
              <div class="block__city--search">
                <div class="boxsearch">
                  <input class="input-search" type="text" id="search_area" placeholder="?????????????????????">
                  <button class="input-btnzoom btn-search"><span><img src="{{asset('common_img/icon/icon-z.png')}}" alt="icon"></span></button>
                </div>
              </div>
              <div id="append_area">
              </div>
              <div class="block__city--btn flexbox">
                <div class="buttonarr buttonarr-submit">
                  <input id="url_prefix"  type="hidden" data-url="{{route('front.search.index')}}">
                  <a href="{{route('front.search.index')}}" class="btnafix"><span>??????</span></a>
                </div>
                <div class="buttonarr js-btnAddcondition buttonarr-white">
                  <button class="choose_sticking_point"><span>????????????</span></button>
                </div>
              </div>
            </div>
            <!-- /#city-->
            <!-- #condition-->
            <div class="block__city block__search--condition" id="condition">
              <div class="block__city--tit area_type_2"><span>????????????</span></div>
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
                  {{-- <div class="block__city--tit"><span>?????????????????????</span></div> --}}
                  {{-- <div class="block__city--list">
                    <ul class="flexbox">
                      <li class="block__city--input">
                        <input type="checkbox" id="other1">
                        <label for="other1">???????????????</label>
                      </li>
                    </ul>
                  </div> --}}
                </div>
                {{-- <div class="sticking_point--sp dissp">
                  <div class="block__city--tit"><span>????????????</span></div>
                  <div class="block__city--list">
                    <ul class="flexbox">
                      <li class="block__city--input">
                        <input type="checkbox" id="ex1">
                        <label for="ex1">?????????????????????<small>1,000?????????????????????20?????????40?????????</small></label>
                      </li>
                      <li class="block__city--input">
                        <input type="checkbox" id="ex2">
                        <label for="ex2">????????????????????????<small>3,000????????????????????????100????????????</small></label>
                      </li>
                      <li class="block__city--input">
                        <input type="checkbox" id="ex3">
                        <label for="ex3">1???1???1???1???1???1???1???1???1???1???1???1???1???1</label>
                      </li>
                    </ul>
                  </div>
                  <div class="block__city--tit"><span>????????????</span></div>
                  <div class="block__city--list type2">
                    <ul class="flexbox">
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex4">
                        <label for="ex4">????????????<small>???????????????????????????????????????  |  ????????????????????????????????????  |  ?????????????????????  |  ?????????</small></label>
                      </li>
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex5">
                        <label for="ex5">??????<small>??????????????????????????????  |  ??????  |  ??????  |  ??????  |  ???????????????  |  ??????  |  ?????????  |  ??????  |  ??????  |  ??????  |  ??????</small></label>
                      </li>
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex6">
                        <label for="ex6">1???1???1???</label>
                      </li>
                      <li class="block__city--input type2col">
                        <input type="checkbox" id="ex7">
                        <label for="ex7">2???2???2???2???2???2???2???2???2???2???</label>
                      </li>
                    </ul>
                  </div>
                </div> --}}
                <div class="block__city--btn flexbox">
                  <div class="buttonarr buttonarr-submit">
                    <a class="btnafix company_search" href="{{route('front.search.index')}}"><span>???????????????????????????</span></a>
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
        <h2>?????????????????????</h2>
      </div>
      <div class="flexbox togglearc">
        <div class="buttonarr hokkaido">
          <button class="js-btnArea" data-area="areaHokkaido"><span>?????????</span></button>
        </div>
        <div class="buttonarr tohoku">
          <button class="js-btnArea" data-area="areaTohoku"><span>??????</span></button>
        </div>
        <div class="buttonarr kanto">
          <button class="js-btnArea" data-area="areaKanto"><span>??????</span></button>
        </div>
        <div class="buttonarr koshinetu">
          <button class="js-btnArea" data-area="areaKoshinetu"><span>??????????????????</span></button>
        </div>
        <div class="buttonarr tokai">
          <button class="js-btnArea" data-area="areaTokai"><span>??????</span></button>
        </div>
        <div class="buttonarr kansai">
          <button class="js-btnArea" data-area="areaKansai"><span>??????</span></button>
        </div>
        <div class="buttonarr shikoku">
          <button class="js-btnArea" data-area="areaShikoku"><span>??????</span></button>
        </div>
        <div class="buttonarr chugoku">
          <button class="js-btnArea" data-area="areaChugoku"><span>??????</span></button>
        </div>
        <div class="buttonarr kyusyu">
          <button class="js-btnArea" data-area="areaKyusyu"><span>???????????????</span></button>
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
                var list_not_same = '<div class="block__city--tit area_type_2" style="display: block;"><span>??????????????????</span></div>\
                                                <div class="block__city--list">\
                                                  <ul class="flexbox block__city-same">'
                  $.each(area_type, function (index, el) {
                      //push to group area type 2
                      group_area['group_'+el.id] = [];
                      title_same = el.name == '?????????' ? ' ??????23???':el.name;
                      
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
                                                              <label for="allarea_'+index+'">' + title_same + '??????</label>\
                                                          </li>'
                      $.each(data[0].get_area, function (k, area) {                        
                        if(click_type == '2'){
                          var letchecked = (dataSearch.cities.indexOf(''+area.id+'') > -1) ? 'checked' : '';
                        }else {
                          var letchecked = '';
                        }
                        if ((area.name.includes('???') && area.pref == 13 && area.name!='??????23???')||(area.name.includes(el.name) == true && area.name.includes('???') && area.area_type != 2)) {
                              group_area['group_'+el.id].push(area.id)
                              list_same += '<li class="block__city--input">\
                                              <input id="areaID_' + area.id + '" '+letchecked+' type="checkbox"  value="' + area.id + '" data-name="'+ area.name +'" class="js-area" data-id="'+area.id+'">\
                                              <label for="areaID_' + area.id + '">' + area.name + '</label>\
                                            </li>'
                          } else if (area.area_type != 2 && area.name.includes('???')===false && appeared.includes(area.id)===false && area.name!='??????23???') {
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
            $('.block__search--head.search_head_pc .titstep1 .area_click').text('??????????????????????????????????????????')
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