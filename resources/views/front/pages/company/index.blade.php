@extends('front.layout',['body_class' => 'secondpage navstate_show page-company'])
@section('append_head')
  <link rel="stylesheet" href="{{asset('css/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}">
@endsection
@section('content')

@if($currentRouteName !== 'front.company.reviewthanks') 
<main class="main_body p-company">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li><a href="{{route('front.search.index')}}">不動産会社検索</a></li>
        <li>{{$seoArr['breadcrumb']}}</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <div class="content site-content" id="content">
        <!-- block__search -->
        <div class="block__search">
          @if (count($company['get_images']) > 0)
            <div class="block__company--slider dissp">
              <div class="slider slider-for">
                @foreach ($company['get_images'] as $img)
                  <div class="sliderimg"><img src="{{asset($img['image_path'])}}" alt=""></div>
                @endforeach
              </div>
              <div class="slider slider-nav">
                @foreach ($company['get_images'] as $img)
                  <div class="thumbsimg"><img src="{{asset($img['image_path'])}}" alt=""></div>
                @endforeach
              </div>
            </div>
          @endif
          @if (count($company['get_images']) == 0)
            <div class="block__company--slider dissp">
              <div class="slider slidernoimg">
                <div class="sliderimg"><img src="{{asset('images/notfound.png')}}" alt="{{ $company['company_name'] }}"></div>
              </div>
            </div>
          @endif

          <!-- block__search--head -->
          <div class="block__search--head"> 
            <div class="block__search--headtxt"> 
              <h2>{{$company['company_name']}}</h2>
            </div>
          </div>
          <!-- /block__search--head -->
          <!-- block__search--body -->
          <div class="block__search--body">
            <ul class="flexbox tablist">
              <li class="active"><a href="#info"><span>基本情報</span></a></li>
              <li><a href="#area"><span>対応エリア</span></a></li>
              <li><a href="#office"><span>営業所</span></a></li>
              <li><a href="#review"><span>口コミ</span></a></li>
            </ul>
            <div class="block__company">
              @if (count($company['get_images']) > 0)
                <div class="block__company--slider dispc">
                  <div class="slider slider-for">
                    @foreach ($company['get_image_main'] as $img)
                      <div class="sliderimg"><img src="{{asset($img['image_path'])}}" alt="{{ $company['company_name'] }}"></div>
                    @endforeach
                    @foreach ($company['get_images'] as $img)
                      @if($img['main']==0)
                        <div class="sliderimg"><img src="{{asset($img['image_path'])}}" alt="{{ $company['company_name'] }}"></div>
                      @endif
                    @endforeach
                  </div>
                  <div class="slider slider-nav">
                    @foreach ($company['get_images'] as $img)
                      <div class="thumbsimg"><img src="{{asset($img['image_path'])}}" alt="{{ $company['company_name'] }}"></div>
                    @endforeach
                  </div>
                </div>
              @endif
              @if (count($company['get_images']) == 0)
                <div class="block__company--slider dispc">
                  <div class="slider slidernoimg">
                    <div class="sliderimg"><img src="{{asset('images/notfound.png')}}" alt="{{ $company['company_name'] }}"></div>
                  </div>
                </div>
              @endif
              <div class="block__company--desc {{(count($company['get_images']) == 0) ? 'noslider':''}}">
                <h3 class="title">{{$company['company_title']}}</h3>
                <p class="desc">{{$company['company_content']}}</p>
              </div>
              <div class="block__company--btn flexbox">
                <div class="buttonarr buttonarr-green"><a href="{{route('front.catalog.index')}}"><span>一括資料請求をする</span></a></div>
                @if(!empty($company['home_page']))
                  <div class="buttonarr btnofficial"><a target="_blank" href="{{$company['home_page']}}"><span>公式サイトを見る</span></a></div>
                @endif
              </div>
              <div id="info" class="tt60"></div>
              <div class="titpage3 tit--information linkarchor">
                <h2>{{$company['company_name']}}の基本情報</h2>
              </div>
              <div class="block__company--information table table--style">
                <div class="tabblock tabinfor">
                  @if(!empty($company['company_name_2']))
                    <dl>
                      <dt>会社名</dt>
                      <dd>{{$company['company_name_2']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['address']))
                    <dl>
                      <dt>住所</dt>
                      <dd>{{$company['address']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['establishment_date']))
                    <dl>
                      <dt>設立</dt>
                      <dd>{{$company['establishment_date']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['capital']))
                    <dl>
                      <dt>資本金</dt>
                      <dd>{{$company['capital']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['employees']))
                    <dl>
                      <dt>従業員数</dt>
                      <dd>{{$company['employees']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['unit_price']))
                    <dl>
                      <dt>参考坪単価</dt>
                      <dd>{{$company['unit_price']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['construction_results']))
                    <dl>
                      <dt>施工実績</dt>
                      <dd>{{$company['construction_results']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['handling_method']))
                    <dl>
                      <dt>取扱い工法</dt>
                      <dd>{{$company['handling_method']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['after_warranty']))
                    <dl>
                      <dt>アフター・保証</dt>
                      <dd>{{$company['after_warranty']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['construction_permit']))
                    <dl>
                      <dt>建設業許可番号</dt>
                      <dd>{{$company['construction_permit']}}</dd>
                    </dl>
                  @endif
                  @if(!empty($company['home_page']))
                    <dl>
                      <dt>ホームページ</dt>
                      <dd><a href="{{$company['home_page']}}" target="_Blank">{{$company['home_page']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['facebook']))
                    <dl>
                      <dt>Facebook</dt>
                      <dd><a href="{{$company['facebook']}}" target="_Blank">{{$company['facebook']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['instagram']))
                    <dl>
                      <dt>Instagram</dt>
                      <dd><a href="{{$company['instagram']}}" target="_Blank">{{$company['instagram']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['line']))
                    <dl>
                      <dt>LINE</dt>
                      <dd><a href="{{$company['line']}}" target="_Blank">{{$company['line']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['pinterest']))
                    <dl>
                      <dt>Pinterest</dt>
                      <dd><a href="{{$company['pinterest']}}" target="_Blank">{{$company['pinterest']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['youtube']))
                    <dl>
                      <dt>YouTube</dt>
                      <dd><a href="{{$company['youtube']}}" target="_Blank">{{$company['youtube']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['email']))
                    <dl>
                      <dt>メールアドレス</dt>
                      <dd><a href="{{$company['email']}}" target="_Blank">{{$company['email']}}</a></dd>
                    </dl>
                  @endif
                  @if(!empty($company['remarks']))
                    <dl>
                      <dt>備考</dt>
                      <dd>{{$company['remarks']}}</dd>
                    </dl>
                  @endif
                </div>
                <div class="arcmore"><span>もっと見る</span></div>
              </div>
              <div class="block__company--btn flexbox">
                <div class="buttonarr buttonarr-green"><a href="{{route('front.catalog.index')}}"><span>一括資料請求をする</span></a></div>
                @if(!empty($company['home_page']))
                  <div class="buttonarr btnofficial"><a target="_blank" href="{{$company['home_page']}}"><span>公式サイトを見る</span></a></div>
                @endif
              </div>
              {{-- {{ dd($stickings) }} --}}
              @if(count($stickings))
                <div class="titpage3 tit--features">
                  <h2>{{$company['company_name']}}の特徴・強み</h2>
                </div>
                <div class="block__company--features">
                    @foreach ($stickings as $key => $stickingss)
                      <dl>
                        <dt>{{$key}}</dt>
                        <dd>
                          <div class="flexbox">
                            @if(count($stickingss))
                              @foreach ($stickingss as $key => $sticking)
                                <span>{{$sticking['name']}}</span>
                              @endforeach
                            @endif
                          </div>
                        </dd>
                      </dl>
                    @endforeach
                </div>
              @endif

              @if(count($company_area))
                <div id="area" class="tt80"></div>
                <div class="titpage3 tit--construction linkarchor">
                  <h2>{{$company['company_name']}}の施工対応エリア</h2>
                </div>
                <div class="block__company--construction">             
                  <div id="mapCompany" class="mapsvg"></div>
                  <div class="table table--style">
                    <div class="tabblock tabconstruction">
                      <div class="tabhead">
                        <dl>
                          <dt>エリア</dt>
                          <dt>都道府県</dt>
                        </dl>
                      </div>
                      {{-- {{dd($company_area)}} --}}
                      <div class="tabbody">
                        @foreach ($company_area as $key => $areas)
                          @if($loop->iteration <= 5)
                            <dl>
                              <dd>
                                {{$key}}
                              </dd>
                              <dd>
                                @foreach ($areas as $area)
                                  @if($loop->last) 
                                    {{$area['name']}}
                                  @else
                                    {{$area['name']}}、
                                  @endif
                                @endforeach
                              </dd>
                            </dl>
                          @endif
                        @endforeach
                      </div>
                      <div class="tabbody dn">
                        @foreach ($company_area as $key => $areas)
                          @if($loop->iteration > 5)
                            <dl>
                              <dd>
                                {{$key}}
                              </dd>
                              <dd>
                                @foreach ($areas as $area)
                                  @if($loop->last) 
                                    {{$area['name']}}
                                  @else
                                    {{$area['name']}}、
                                  @endif
                                @endforeach
                              </dd>
                            </dl>
                          @endif
                        @endforeach
                      </div>
                    </div>
                    @if(count($company_area) > 5)
                      <div class="arcmore"><span>もっと見る</span></div>
                    @endif
                  </div>
                </div>
              @endif

              @if(count($offices))
                <div id="office" class="tt60"></div>
                <div class="titpage3 tit--offices linkarchor">
                  <h2>{{$company['company_name']}}の営業所一覧</h2>
                </div>
                <div class="block__company--offices">
                  <div id="mapOffice" class="mapsvg"></div>
                    <div class="table table--style mb00">
                      <div class="tabblock taboffices">
                        <div class="block__company--tbscroll">  
                          <div class="scroll">
                            <div class="tabhead">
                              <dl>
                                <dt>都道府県</dt>
                                <dt>営業所名</dt>
                                <dt>住所</dt>
                                <dt>アクセス</dt>
                                <dt>営業時間</dt>
                                <dt>定休日</dt>
                                <dt>電話番号</dt>    
                              </dl>                      
                            </div>    
                            <div class="tabbody">                  
                              @foreach ($offices as $key => $officess)
                                @if($loop->iteration <= 5)
                                  @foreach ($officess as $key2 => $office)
                                    @if($loop->iteration == 1)
                                        <dl>
                                          <dd class="countofficess" rowspan="{{count($officess)}}">{{$key}}</dd>
                                          <dd>{{$office['name']}}</dd>
                                          <dd><a target="_blank" href="http://maps.google.com/?q={{$office['address']}}">{{$office['address']}}</a></dd>
                                          <dd>{{$office['access']}}</dd>
                                          <dd>{{$office['hours']}}</dd>
                                          <dd>{{$office['holiday']}}</dd>
                                          <dd><a href="tel:{{$office['tel']}}">{{$office['tel']}}</a></dd>
                                        </dl>
                                      @else
                                        <dl>
                                          <dd class="blank"></dd>
                                          <dd>{{$office['name']}}</dd>
                                          <dd><a target="_blank" href="http://maps.google.com/?q={{$office['address']}}">{{$office['address']}}</a></dd>
                                          <dd>{{$office['access']}}</dd>
                                          <dd>{{$office['hours']}}</dd>
                                          <dd>{{$office['holiday']}}</dd>
                                          <dd><a href="tel:{{$office['tel']}}">{{$office['tel']}}</a></dd>
                                        </dl>
                                    @endif
                                  @endforeach
                                @endif
                              @endforeach
                            </div>
                            <div class="tabbody dn">                  
                              @foreach ($offices as $key => $officess)
                                @if($loop->iteration > 5)
                                  @foreach ($officess as $key2 => $office)
                                    @if($loop->iteration == 1)
                                        <dl>
                                          <dd rowspan="{{count($officess)}}">{{$key}}</dd>
                                          <dd>{{$office['name']}}</dd>
                                          <dd><a target="_blank" href="http://maps.google.com/?q={{$office['address']}}">{{$office['address']}}</a></dd>
                                          <dd>{{$office['access']}}</dd>
                                          <dd>{{$office['hours']}}</dd>
                                          <dd>{{$office['holiday']}}</dd>
                                          <dd><a href="tel:{{$office['tel']}}">{{$office['tel']}}</a></dd>
                                        </dl>
                                      @else
                                        <dl>
                                          <dd>{{$office['name']}}</dd>
                                          <dd><a target="_blank" href="http://maps.google.com/?q={{$office['address']}}">{{$office['address']}}</a></dd>
                                          <dd>{{$office['access']}}</dd>
                                          <dd>{{$office['hours']}}</dd>
                                          <dd>{{$office['holiday']}}</dd>
                                          <dd><a href="tel:{{$office['tel']}}">{{$office['tel']}}</a></dd>
                                        </dl>
                                    @endif
                                  @endforeach
                                @endif
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                      @if(count($offices) > 5)
                        <div class="arcmore"><span>もっと見る</span></div>
                      @endif
                    </div>
                </div>
                <div class="block__company--btn flexbox">
                  <div class="buttonarr buttonarr-green"><a href="{{route('front.catalog.index')}}"><span>一括資料請求をする</span></a></div>
                  @if(!empty($company['home_page']))
                    <div class="buttonarr btnofficial"><a target="_blank" href="{{$company['home_page']}}"><span>公式サイトを見る</span></a></div>
                  @endif
                </div>
              @endif
              
              <div id="review" class="tt100"></div>
              <div class="titpage3 tit--reviews linkarchor">
                <h2>{{$company['company_name']}}の口コミ・評判</h2>
              </div>
              <div class="block__company--reviews">
                <div class="tabblock">
                  @if(count($company['reviews']))
                    @foreach (array_reverse($company['reviews']) as $review)
                      @if($review['review_show'])
                        @if($loop->iteration == 1)
                          <dl class="{{ ($loop->iteration > 3) ? 'dn' : ''}}">
                            <dt class="{{ $review['sex'] == '男性' ? 'menhappy' : 'womenhappy'}}">
                              <div class="icon">
                                @if($review['satisfaction'] < 3)
                                  <img src="../common_img/{{$review['sex'] == '男性' ? 'menb' : 'womenb'}}.png" alt="">
                                @else
                                  <img src="../common_img/{{$review['sex'] == '男性' ? 'men' : 'women'}}.png" alt="">
                                @endif
                              </div>
                              <div class="info">
                                <div class="info--name">{{$review['nickname']}}</div>
                                <div class="info--title">{{$review['review_title']}}</div>
                              </div>
                            </dt>
                            <dd> 
                              <div class="desc">{{$review['review_content']}}</div>
                            </dd>
                          </dl>
                          @else

                          <dl class="{{ ($loop->iteration > 3) ? 'dn' : ''}}">
                            <dt class="womenhappy">
                              <div class="icon"><img src="../common_img/{{$review['sex'] == '男性' ? 'men' : 'women'}}.png" alt=""></div>
                              <div class="info">
                                <div class="info--name">{{$review['nickname']}}</div>
                                <div class="info--title">{{$review['review_title']}}</div>
                              </div>
                            </dt>
                            <dd>
                              <span class="readmore">続きを読む</span>
                              <div class="desc">{{$review['review_content']}}</div>
                            </dd>
                          </dl>
                        @endif
                      @endif
                    @endforeach
                  @endif
                </div>
                @if(count($company['reviews']) > 3)
                <div class="arcmore"><span>もっと見る</span></div>
                @endif

                <div class="sendreview acrtoggle"><span>口コミを投稿する</span></div>
                <div class="form-review acrcontent">
                  <form class="needs-validation form" method="POST" action="{{ route('front.company', $company['id']) }}">
                    @csrf
                    <div class="formrow mt00">
                      <p class="cth3 mt00">お名前・ニックネーム<span class="required"></span></p>
                      <div class="formrow_e">
                        <input type="text" name="nickname" placeholder="お名前・ニックネームをご入力ください">
                      </div>
                    </div>
                    <div class="formrow formrow-year">
                      <p class="cth3 mb05">年代</p>
                      <div class="formrow_e formrow_fss">
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="10代後半"><span class="radio_label">10代後半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="20代前半"><span class="radio_label">20代前半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="20代後半"><span class="radio_label">20代後半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="30代前半"><span class="radio_label">30代前半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="30代後半"><span class="radio_label">30代後半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="40代前半"><span class="radio_label">40代前半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="40代後半"><span class="radio_label">40代後半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="50代前半"><span class="radio_label">50代前半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="50代後半"><span class="radio_label">50代後半</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="age" value="60代以上"><span class="radio_label">60代以上</span>
                        </label>
                      </div>
                    </div>
                    <div class="formrow formrow-year formrow-genre">
                      <p class="cth3 mb05">性別</p>
                      <div class="formrow_e formrow_fss">
                        <label class="checkcontainer">
                          <input type="radio" name="sex" value="男性"><span class="radio_label">男性</span>
                        </label>
                        <label class="checkcontainer">
                          <input type="radio" name="sex" value="女性"><span class="radio_label">女性</span>
                        </label>
                      </div>
                    </div>
                    <!-- <div class="formrow">
                      <p class="cth3">投稿日</p>
                      <div class="formrow_e">
                        <input type="text" name="posted_at" placeholder="投稿日をご入力ください（yyyy/mm/dd）">
                      </div>
                    </div> -->
                    <div class="formrow formstar">
                      <p class="cth3">総合満足度<span class="required"></span></p>
                      <div class="choosestar-e">
                        <div class="detail-choosestar-1">
                          <div class="chooserating_c sumrating">
                            <div class="review-stars chooserating" id="selectstar">
                              <input id="star01" type="radio" name="satisfaction" value="5">
                              <label class="full" for="star01" title="5 stars"></label>
                              <input id="star02" type="radio" name="satisfaction" value="4">
                              <label class="full" for="star02" title="4 stars"></label>
                              <input id="star03" type="radio" name="satisfaction" value="3">
                              <label class="full" for="star03" title="stars"></label>
                              <input id="star04" type="radio" name="satisfaction" value="2">
                              <label class="full" for="star04" title="2 stars"></label>
                              <input id="star05" type="radio" name="satisfaction" value="1">
                              <label class="full" for="star05" title="1 star"></label>
                            </div>
                            <span class="text point">0</span>
                          </div>
                        </div>
                      </div>
                      <div class="formrow_e">
                        {{-- <p class="rating sumrating">
                          <span class="rating-box"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><span class="totalpercent" style="width:0%"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></span>
                          <span class="text total_point">0</span>
                        </p> --}}
                        
                      </div>
                      <div class="choosestar">
                        <div class="acrtoggle">評価詳細</div>
                        <div class="acrcontent">
                          <div class="choosestar-e">
                            <p>価格</p>
                            <div class="detail-choosestar-1">
                              <div class="chooserating_c">
                                <div class="review-stars chooserating" id="selectstar">
                                  <input id="star11" type="radio" name="price" value="5">
                                  <label class="full" for="star11" title="5 stars"></label>
                                  <input id="star12" type="radio" name="price" value="4">
                                  <label class="full" for="star12" title="4 stars"></label>
                                  <input id="star13" type="radio" name="price" value="3">
                                  <label class="full" for="star13" title="stars"></label>
                                  <input id="star14" type="radio" name="price" value="2">
                                  <label class="full" for="star14" title="2 stars"></label>
                                  <input id="star15" type="radio" name="price" value="1">
                                  <label class="full" for="star15" title="1 star"></label>
                                </div>
                                <span class="text point">0</span>
                              </div>
                            </div>
                          </div>
                          <div class="choosestar-e">
                            <p>商品力・性能</p>
                            <div class="detail-choosestar-2">
                              <div class="chooserating_c">
                                <div class="review-stars chooserating" id="selectstar2">
                                  <input id="star21" type="radio" name="performance" value="5">
                                  <label class="full" for="star21" title="5 stars"></label>
                                  <input id="star22" type="radio" name="performance" value="4">
                                  <label class="full" for="star22" title="4 stars"></label>
                                  <input id="star23" type="radio" name="performance" value="3">
                                  <label class="full" for="star23" title="stars"></label>
                                  <input id="star24" type="radio" name="performance" value="2">
                                  <label class="full" for="star24" title="2 stars"></label>
                                  <input id="star25" type="radio" name="performance" value="1">
                                  <label class="full" for="star25" title="1 star"></label>
                                </div>
                                <span class="text point">0</span>
                              </div>
                            </div>
                          </div>
                          <div class="choosestar-e">
                            <p>設計・提案力</p>
                            <div class="detail-choosestar-3">
                              <div class="chooserating_c">
                                <div class="review-stars chooserating" id="selectstar3">
                                  <input id="star31" type="radio" name="proposal_ability" value="5">
                                  <label class="full" for="star31" title="5 stars"></label>
                                  <input id="star32" type="radio" name="proposal_ability" value="4">
                                  <label class="full" for="star32" title="4 stars"></label>
                                  <input id="star33" type="radio" name="proposal_ability" value="3">
                                  <label class="full" for="star33" title="stars"></label>
                                  <input id="star34" type="radio" name="proposal_ability" value="2">
                                  <label class="full" for="star34" title="2 stars"></label>
                                  <input id="star35" type="radio" name="proposal_ability" value="1">
                                  <label class="full" for="star35" title="1 star"></label>
                                </div>
                                <span class="text point">0</span>
                              </div>
                            </div>
                          </div>
                          <div class="choosestar-e">
                            <p>選択自由度</p>
                            <div class="detail-choosestar-4">
                              <div class="chooserating_c">
                                <div class="review-stars chooserating" id="selectstar4">
                                  <input id="star41" type="radio" name="free_choice" value="5">
                                  <label class="full" for="star41" title="5 stars"></label>
                                  <input id="star42" type="radio" name="free_choice" value="4">
                                  <label class="full" for="star42" title="4 stars"></label>
                                  <input id="star43" type="radio" name="free_choice" value="3">
                                  <label class="full" for="star43" title="stars"></label>
                                  <input id="star44" type="radio" name="free_choice" value="2">
                                  <label class="full" for="star44" title="2 stars"></label>
                                  <input id="star45" type="radio" name="free_choice" value="1">
                                  <label class="full" for="star45" title="1 star"></label>
                                </div>
                                <span class="text point">0</span>
                              </div>
                            </div>
                          </div>
                          <div class="choosestar-e">
                            <p>アフターケア・メンテナンスサポート</p>
                            <div class="detail-choosestar-5">
                              <div class="chooserating_c">
                                <div class="review-stars chooserating" id="selectstar5">
                                  <input id="star51" type="radio" name="maintenance_support" value="5">
                                  <label class="full" for="star51" title="5 stars"></label>
                                  <input id="star52" type="radio" name="maintenance_support" value="4">
                                  <label class="full" for="star52" title="4 stars"></label>
                                  <input id="star53" type="radio" name="maintenance_support" value="3">
                                  <label class="full" for="star53" title="stars"></label>
                                  <input id="star54" type="radio" name="maintenance_support" value="2">
                                  <label class="full" for="star54" title="2 stars"></label>
                                  <input id="star55" type="radio" name="maintenance_support" value="1">
                                  <label class="full" for="star55" title="1 star"></label>
                                </div>
                                <span class="text point">0</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="formrow">
                        <h3 class="cth3">口コミ件名</h3>
                        <div class="formrow_e">
                          <input type="text" name="review_title" placeholder="口コミ件名をご入力ください">
                        </div>
                      </div>
                      <div class="formrow">
                        <h3 class="cth3">口コミ内容</h3>
                        <div class="formrow_e">
                          <textarea name="review_content" cols="30" rows="10" placeholder="口コミ内容をご入力ください"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="block__company--btn flexbox flexbox-center">
                      <input type="hidden" name="company_id" value="{{ $company['id'] }}">
                      <input type="hidden" name="type" value="client">
                      <div class="buttonarr buttonarr-green submit-review"><button><span>送信する</span></button></div>
                      {{-- <div class="buttonarr buttonarr-green submit-review"><button><span>送信する</span></button></div> --}}
                    </div>
                  </form>
                </div>
              </div>
              <div class="block__company--btn flexbox">
                <div class="buttonarr buttonarr-green"><a href="{{route('front.catalog.index')}}"><span>一括資料請求をする</span></a></div>
                <div class="buttonarr btnofficial"><a target="_blank" href="{{$company['home_page']}}"><span>公式サイトを見る</span></a></div>
              </div>

              <div class="block__company--html">
                {!! $company['html'] !!}
              </div>

              @if(count($relateds))
                <div class="titpage3 tit--related">
                  <h2>{{$company['company_name']}}に関連する不動産・住宅会社</h2>
                </div>
                <div class="block__company--related">
                  @foreach ($relateds as $related)
                    <dl>
                      <dt>
                          @if(count($related['get_image_main']))
                            <div class="img">
                              <img src="{{asset($related['get_image_main'][0]['image_path'])}}" alt="{{$related['company_name']}}">
                            </div>
                          @else
                            <div class="img noimage">
                              <img src="{{asset('images/notfound.png')}}" alt="">
                            </div>
                          @endif
                      </dt>
                      <dd><a href="{{route('front.company', $related['id'])}}">{{$related['company_name']}}</a></dd>
                    </dl>
                  @endforeach
                </div>
              @endif

            </div>
          </div>
          <!-- /block__search--body -->
        </div>
        <!-- block__search -->
      </div>
      <!-- sidebar-->
      
      <aside class="sidebar dispc">
        <div class="block__condition">
          <div class="block__condition--head">
            <h3>お問い合わせ</h3>
          </div>
          <div class="block__condition--body">
            <div class="buttonarr buttonarr-green"><a href="{{route('front.catalog.index')}}"><span>一括資料請求をする</span></a></div>
            <div class="buttonarr btnofficial"><a target="_blank" href="{{$company['home_page']}}"><span>公式サイトを見る</span></a></div>
          </div>
        </div>
        
        @include('front.components.images-sidebar')
      </aside>

      <!-- /sidebar-->
    </div>
  </section>
  <!-- /Mainlayout -->
  
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
</main>

@else 
  <!-- review sec -->
  <div class="page-contact-thanks">
  <main class="main_body p-contact-thanks">
    <!-- BREADCRUMB -->
    <section class="breadcrumb">
      <div class="container">
        <ul>          
          <li><a href="{{route('front.home.index')}}">TOP</a></li>
          <li><a href="{{route('front.company', $seoArr['id'])}}">{{$seoArr['breadcrumb']}}</a></li>
          <li>口コミ完了</li>
        </ul>
      </div>
    </section>
    <!-- /END BREADCRUMB-->
    <!-- Mainlayout -->
    <section class="mainlayout">
      <div class="container flexwrap">
        <div class="content site-content site-content--fullw" id="content">
          @if(Session::has('reviewc'))
            @php
              $reviews = Session::get('reviewc');
            @endphp                    
            <div class="titpage noline">
              <h2 class="black">口コミを送信しました</h2>
            </div>
            <p class="text_center">内容を確認のうえ、問題がない場合は反映いたします。</p>
            <div class="table thanks--table">
              <h3>お申し込み内容</h3>
              <table>
                <tbody>
                  <tr>
                    <th>お名前・ニックネーム</th>
                    <td>{{$reviews['nickname'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>年代</th>
                    <td>{{$reviews['age'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>性別</th>
                    <td>{{$reviews['sex'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>総合満足度</th>
                    <td>{{$reviews['satisfaction'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>価格</th>
                    <td>{{$reviews['price'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>商品力・性能</th>
                    <td>{{$reviews['performance'] ?? ''}}</td>
                  </tr>    
                  <tr>
                    <th>設計・提案力</th>
                    <td>{{$reviews['proposal_ability'] ?? ''}}</td>
                  </tr>  
                  <tr>
                    <th>選択自由度</th>
                    <td>{{$reviews['free_choice'] ?? ''}}</td>
                  </tr>  
                  <tr>
                    <th>アフターケア・メンテナンスサポート</th>
                    <td>{{$reviews['maintenance_support'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>口コミ件名</th>
                    <td>{{$reviews['review_title'] ?? ''}}</td>
                  </tr>
                  <tr>
                    <th>口コミ内容</th>
                    <td>{{$reviews['review_content'] ?? ''}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          @endif
        </div>
      </div>
    </section>
  </main>
</div>
@endif
@endsection

@section('append_foot')  
  <script src="{{asset('js/slick.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
  <script>
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: false,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      arrows: false,
      centerPadding: '10px',
      centerMode: false,
      focusOnSelect: true
    });
    $('.form-review.acrcontent').hide();
    $('body').on('click', '.arcmore', function(){
      $(this).find('span').toggleText('もっと見る','もっと見る');
      $(this).toggleClass('active');
      $(this).prev('.tabblock').find('.dn').slideToggle();
      // $(this).closest('.block__company--reviews').find('dl.dn').toggleClass('showhide');
    }).on('click', '.readmore', function(){
      $(this).toggleClass("showhide");
      $(this).toggleText('続きを読む', '表示を減らす')
      $(this).next('.desc').slideToggle();
    }).on('click', '.acrtoggle', function(){
      $(this).next('.acrcontent').slideToggle();
    });
    var paths = {
      sector_1: {
        id: 1,
        name: 'hokkaido',
        path:"M1400.9,1.5h-366.8c-6.1,0-11.1,5-11.1,11.1v198v31.1v35.4c0,6.1,5,11.1,11.1,11.1h75.7c6.1,0,11.1-5,11.1-11.1v-24.3H1401c6.1,0,11.1-5,11.1-11.1V12.6C1412,6.5,1407,1.5,1400.9,1.5"
      },
      sector_2: {
        id: 2,
        name: '',
        path: "M1373.1,465.1v-96.5c0-7.4-6-13.4-13.4-13.4h-320.1c-7.4,0-13.4,6-13.4,13.4v96.5h173.5H1373.1z"
      },
      sector_3: {
        id: 3,
        name: '',
        path: "M1199.6,465.1 h173.5 v96.4 h-173.5z"
      },
      sector_4: {
        id: 4,
        name: '',
        path: "M1199.6,561.5 h173.5 v96.4 h-173.5z"
      },
      sector_5: {
        id: 5,
        name: '',
        path: "M1026.2,465.1 h173.5 v96.4 h-173.5z"
      },
      sector_6: {
        id: 6,
        name: '',
        path: "M1199.6,657.9L1199.6 561.5 1026.2 561.5 1026.2 657.9 1160 657.9z"
      },
      sector_7: {
        id: 7,
        name: '',
        path: "M1199.6,657.9L1160 657.9 1160 776.7 1271.8 776.7 1373.1 776.7 1373.1 657.9z"
      },
      sector_8: {
        id: 8,
        name: '',
        path: "M1271.8,929.9L1271.8 967.7 1373.1 967.7 1373.1 948.9 1373.1 781.4 1373.1 776.7 1271.8 776.7z"
      },
      sector_9: {
        id: 9,
        name: '',
        path: "M1160,776.7 h111.8 v153.2 h-111.8z"
      },
      sector_10: {
        id: 10,
        name: '',
        path: "M1064.1,929.9L1128.5 929.9 1160 929.9 1160 776.7 1064.1 776.7z"
      },
      sector_11: {
        id: 11,
        name: '',
        path: "M1128.5,929.9L1128.5 1005.1 1271.8 1005.1 1271.8 967.7 1271.8 929.9 1160 929.9z"
      },
      sector_12: {
        id: 12,
        name: '',
        path: "M1271.8,967.7v37.4v12.9h19.5c7.4,0,13.4,8.5,13.4,18.8v116c0,11.1,6.4,20,14.3,20h40.6c7.4,0,13.4-8.5,13.4-18.8V967.7H1271.8z"
      },
      sector_13: {
        id: 13,
        name: '',
        path: "M1128.5,1005.1v62.2H1252v-30.6c0-10.3,6-18.8,13.4-18.8h6.4V1005L1128.5,1005.1L1128.5,1005.1z"
      },
      sector_14: {
        id: 14,
        name: '',
        path: "M1128.5,1067.4v105.5v0.4l109.2-0.4c7.9,0,14.3-9,14.3-20v-85.4L1128.5,1067.4L1128.5,1067.4z"
      },
      sector_15: {
        id: 15,
        name: '',
        path: "M1064.1,776.7L1160 776.7 1160 657.9 1026.2 657.9 1026.2 708.1 1008.1 708.1 1008.1 776.7z"
      },
      sector_16: {
        id: 16,
        name: '',
        path: "M855.1,766.6L855.1 776.7 856.1 776.7 950.9 776.7 1008.1 776.7 1008.1 708.1 855.1 708.1z"
      },
      sector_17: {
        id: 17,
        name: '',
        path: "M841.7,591.5h-53.8c-7.4,0-13.4,6-13.4,13.4v116.5v41.8v3.3h80.6v-58.6V605C855.1,597.6,849.1,591.5,841.7,591.5"
      },
      sector_18: {
        id: 18,
        name: '',
        path: "M774.5,780v2.5v14.3c0,10.8-8.7,19.5-19.5,19.5h-13.5v40.9h33h80.6v-90.7h-80.6V780z"
      },
      sector_19: {
        id: 19,
        name: '',
        path: "M1064.1,929.9L1041.8 929.9 1041.8 1067.4 1128.5 1067.4 1128.5 1005.1 1128.5 929.9z"
      },
      sector_20: {
        id: 20,
        name: '',
        path: "M1064.1,929.9L1064.1 776.7 1008.1 776.7 950.9 776.7 950.9 1067.4 1041.8 1067.4 1041.8 929.9z"
      },
      sector_21: {
        id: 21,
        name: '',
        path: "M855.1,776.7L855.1 889.4 855.1 1035.7 855.1 1067.4 950.9 1067.4 950.9 776.7 856.1 776.7z"
      },
      sector_22: {
        id: 22,
        name: '',
        path: "M1128.5,1067.4L1041.8 1067.4 950.9 1067.4 950.9 1173.8 1128.5 1173.2 1128.5 1172.9z"
      },
      sector_23: {
        id: 23,
        name: '',
        path: "M855.1,1067.4L855.1 1174.2 950.9 1173.8 950.9 1067.4z"
      },
      sector_24: {
        id: 24,
        name: '',
        path: "M855.1,961.9h-80.6v201v82.4h67.2c7.4,0,13.4-6,13.4-13.4V1061v-76.3L855.1,961.9L855.1,961.9z"
      },
      sector_25: {
        id: 25,
        name: '',
        path: "M774.5,857.3 h80.6 v104.6 h-80.6z"
      },
      sector_26: {
        id: 26,
        name: '',
        path: "M741.5,816.3L667.1 816.3 667.1 961.9 708.6 961.9 774.5 961.9 774.5 857.3 741.5 857.3z"
      },
      sector_27: {
        id: 27,
        name: '',
        path: "M708.6,961.9L667.1 961.9 667.1 1060.9 667.1 1101.1 708.6 1101.1z"
      },
      sector_28: {
        id: 28,
        name: '',
        path: "M577.9,816.3L577.9 938.6 577.9 1060.9 667.1 1060.9 667.1 961.9 666.2 961.9 667.1 961.9 667.1 816.3z"
      },
      sector_29: {
        id: 29,
        name: '',
        path: "M708.6,1101.1L708.6 1162.8 774.5 1162.8 774.5 961.9 708.6 961.9z"
      },
      sector_30: {
        id: 30,
        name: '',
        path: "M708.6,1162.8v-61.7h-41.5v130.7c0,7.4,6,13.4,13.4,13.4h94v-82.4H708.6z"
      },
      sector_31: {
        id: 31,
        name: '',
        path: "M497.6,816.3 h80.3 v122.3 h-80.3z"
      },
      sector_32: {
        id: 32,
        name: '',
        path: "M417.3,816.3 h80.3 v122.3 h-80.3z"
      },
      sector_33: {
        id: 33,
        name: '',
        path: "M497.6,938.6 h80.3 v122.3 h-80.3z"
      },
      sector_34: {
        id: 34,
        name: '',
        path: "M417.6,938.6 h80.3 v122.3 h-80.3z"
      },
      sector_35: {
        id: 35,
        name: '',
        path: "M417.3,816.3h-58.1c-7.4,0-13.4,6-13.4,13.4v217.7c0,7.4,6,13.4,13.4,13.4h58.1V938.6V816.3z"
      },
      sector_36: {
        id: 36,
        name: '',
        path: "M486.1,1247.3H613c7.4,0,13.4-6,13.4-13.4v-59.7H486.1V1247.3z"
      },
      sector_37: {
        id: 37,
        name: '',
        path: "M613,1101.1H486.1v73.1h140.3v-59.7C626.4,1107.1,620.4,1101.1,613,1101.1"
      },
      sector_38: {
        id: 38,
        name: '',
        path: "M359.2,1101.1c-7.4,0-13.4,6-13.4,13.4v59.7h140.3v-73.1H359.2z"
      },
      sector_39: {
        id: 39,
        name: '',
        path: "M345.8,1174.2v59.7c0,7.4,6,13.4,13.4,13.4h126.9v-73.1H345.8z"
      },
      sector_40: {
        id: 40,
        name: '',
        path: "M295.4,913.3v-83.5c0-7.4-6-13.4-13.4-13.4h-76.4v96.9H295.4z"
      },
      sector_41: {
        id: 41,
        name: '',
        path: "M205.5,960.8h-60.3H205.5v-47.5v-96.9h-27.1c-0.4,0-0.8-0.1-1.2-0.1H118v144.4h24.8h2.4L205.5,960.8L205.5,960.8z"
      },
      sector_42: {
        id: 42,
        name: '',
        path: "M69.4,816.3c-7.4,0-13.4,6-13.4,13.4v117.6c0,7.4,6,13.4,13.4,13.4H118V816.3H69.4z"
      },
      sector_43: {
        id: 43,
        name: '',
        path: "M145.2,960.8L145.2 1171.2 205.5 1171.2 205.5 1041.9 205.5 960.8z"
      },
      sector_44: {
        id: 44,
        name: '',
        path: "M205.5,913.3L205.5 960.8 205.5 1041.9 295.4 1041.9 295.4 913.3z"
      },
      sector_45: {
        id: 45,
        name: '',
        path: "M205.5,1041.9 h89.9 v129.3 h-89.9z"
      },
      sector_46: {
        id: 46,
        name: '',
        path: "M205.5,1171.2h-60.3v62.6c0,7.4,6,13.4,13.4,13.4H282c7.4,0,13.4-6,13.4-13.4v-62.6H205.5z"
      },
      sector_47: {
        id: 47,
        name: '',
        path: "M27.2,1317.9L27.2,1317.9c-14.1,0-25.7-11.6-25.7-25.7v-69c0-14.1,11.6-25.7,25.7-25.7s25.7,11.6,25.7,25.7v69C52.9,1306.4,41.3,1317.9,27.2,1317.9"
      },
    }
    
    $(function(){
      var company_prefs = {{json_encode($company_prefs)}};
      var office_prefs = {{json_encode($office_prefs)}};      
      var mapCompany = Raphael('mapCompany', '100%', '100%');

      @if(count($offices))
      var mapOffice = Raphael('mapOffice', '100%', '100%');
      @endif
        var attributes = {
          fill: '#DDE8CE',
          stroke: '#fff',
          'stroke-width': 3,
          'stroke-miterlimit': "10",
          'stroke-linejoin': 'round'
        },  
        attributes_active = {
          fill: '#58B01D',
        },  
        arr = new Array();

      if(company_prefs.length > 0) {
        mapCompany.setViewBox(0,0,1413.6,1319.4,true);
        for (var region in paths) {
          var obj = mapCompany.path(paths[region].path);
          obj.name = paths[region].name; 
          obj.attr(attributes);
          arr[obj.id] = region;
          var point = obj.getBBox();
          pointX = point.x+(point.width/2);
          pointY = point.y+(point.height/2)
          var c = mapCompany.circle(pointX, pointY, 5);
          var txt = mapCompany.text(pointX, pointY+10, obj.name);
          c.attr({
            fill: "#DDE8CE",
            stroke: "#000",
          });
          $prefid = paths[region].id;
          if(company_prefs.indexOf($prefid) > -1) {
            obj.attr(attributes_active);
          }          
          obj.hover(
          )
          .click(function(){
          });
        }
      }

      @if(count($offices))
        if(office_prefs.length > 0) {
          mapOffice.setViewBox(0,0,1413.6,1319.4,true);
          for (var region in paths) {
            var obj = mapOffice.path(paths[region].path);
            obj.name = paths[region].name; 
            obj.attr(attributes);
            arr[obj.id] = region;
            var point = obj.getBBox();
            pointX = point.x+(point.width/2);
            pointY = point.y+(point.height/2)
            var c = mapOffice.circle(pointX, pointY, 5);
            var txt = mapOffice.text(pointX, pointY+10, obj.name);
            c.attr({
              fill: "#DDE8CE",
              stroke: "#000",
            });
            $prefid = paths[region].id;
            if(office_prefs.indexOf($prefid) > -1) {
              obj.attr(attributes_active);
            }
            obj.hover(
            )
            .click(function(){
            });
          }
        }
      @endif
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){

    })
    // .on('click','.submit-review',function(){
    //   var company_id = $('input[name="company_id"]').val();
    //   var name = $('input[name="review_name"]').val();
    //   var age = $('input[name="review_years"]').val();
    //   var sex = $('input[name="review_gender"]').val();
    //   var posted_at = $('input[name="posted_at"]').val();
    //   var price = $('input[name="star_price"]').val();
    //   var performance = $('input[name="star_product"]').val();
    //   var proposal_ability = $('input[name="star_design"]').val();
    //   var free_choice = $('input[name="star_choice"]').val();
    //   var maintenance_support = $('input[name="star_support"]').val();
    //   var review_title = $('input[name="review_title"]').val();
    //   var review_content = $('input[name="review_content"]').val();
    //   // alert(price)
    //   $.ajax({
    //       type: "POST",
    //       url: "{{ route('review.create') }}",
    //       data: {
    //         company_id: company_id,
    //         name: name,
    //         age: age,
    //         sex: sex,
    //         posted_at: posted_at,
    //         price: price,
    //         performance: performance,
    //         proposal_ability: proposal_ability,
    //         free_choice: free_choice,
    //         maintenance_support: maintenance_support,
    //         review_title: review_title,
    //         review_content: review_content
    //       },
    //       dataType: 'json',
    //       success: function (data) {
            
    //       }
    //   });
    // })
    .on('click','.chooserating input', function () {
      $(this).closest('.choosestar-e').find('.text').text($(this).val()).css('color','#fb2b2b');
      var point = 0
      var difference = 0
      var percent = 0
      $('.point').each(function(index,elem){
        if ($(this).text()!=0) {
          ++difference
          point += parseInt($(this).text())
        }
      })
      point = Math.round(point/difference);
      percent = (100/5)*point
      // console.log(percent);
      $('.total_point').text(point).css('color','#fb2b2b');
      $('.totalpercent').css('width',percent+'%');
    });
    
    //company
    // var eltr = '';
    // var eltr2 = '';
    // $('.block__company--information tbody td').each(function(i, v){
    //   if(i < 5) {
    //     eltr += '<tr>'+$(this).html()+'</tr>';
    //     $('.block__company--information .arcmore').hide();
    //   }else {
    //     eltr2 += '<tr>'+$(this).html()+'</tr>';
    //     $('.block__company--information .arcmore').show();
    //   }
    // });
    // $('.block__company--information table').html('<tbody>'+eltr+'</tbody><tbody class="dn">'+eltr2+'</tbody>')

    //company
    var eltr = '';
    var eltr2 = '';
    $('.block__company--information dl').each(function(i, v){
      if(i < 5) {
        eltr += '<dl>'+$(this).html()+'</dl>';
        $('.block__company--information .arcmore').hide();
      }else {
        eltr2 += '<dl>'+$(this).html()+'</dl>';
        $('.block__company--information .arcmore').show();
      }
    });
    $('.block__company--information .tabinfor').html('<div>'+eltr+'</div><div class="dn">'+eltr2+'</div>')
  </script>
@endsection