@extends('front.layout',['body_class' => 'secondpage navstate_show page-search'])
@php
$pref_aside=$genre_aside='';
if(!empty($arrParams['city'])){
  $city_name = collect($arrParams['city'])->reduce(function ($carry, $item) {
      return $item.'、'.$carry;
  });
  $city_name = mb_substr($city_name,0,-1);
  $pref_aside = $arrParams['pref_jp'].'（'.$city_name.'）';
}
if(!empty($arrParams['sticking'])){
  $sticking_name = collect($arrParams['sticking'])->reduce(function ($carry, $item) {
      return $item.'、'.$carry;
  });
  $sticking_name = mb_substr($sticking_name,0,-1);
}
if(!empty($arrParams['genre_jp'])){
  $genre_aside = $arrParams['genre_jp'];
}
@endphp
@section('content')
<style>
  .main_color{
    color:#ade18b;
  }
</style>
<main class="main_body p-search">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li class="breadcrumb--search"><a href="{{route('front.search.index')}}">検索</a></li>
        {!! $seoArr['breadcrumb']??'' !!}
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <div class="content site-content" id="content">
        <!-- block__search-->
        <div class="block__search">
          <!-- block__search--head-->
          <div class="block__search--head">
            <div class="block__search--headtxt">
              <h2>{{ $seoArr['title']??'全国の不動産・住宅会社の検索結果' }}</h2>
            </div>
          </div>
          <!-- /block__search--head-->
          <!-- block__search--body-->
          <div class="block__search--body block__results">
            <!-- blockCondition -->
            <div class="block__condition block__condition--forsp">
              <div class="block__condition--head">
                <h3>検索条件</h3>
              </div>
              <div class="block__condition--body">
                <div class="block__condition--block">
                  <div class="block__condition--tit">
                    <p><img src="{{asset('common_img/icon/icon-location.png')}}" alt="エリア"><span>エリア</span></p>
                  </div>
                  <div class="block__condition--info">
                    <div class="input">
                      <!-- <input type="text" placeholder="{{ $pref_aside }}" value="{{ $pref_aside }}"> -->
                      <p class="txtdata">{{ $pref_aside }}</p>
                    </div>
                    <div class="txt tit_area">
                      <p>{{ $pref_aside }}</p>
                    </div>
                    <form action="{{ route('front.home.index') }}" method="POST">@csrf
                      <input type="hidden" name="click_type" value="1">
                      <input type="hidden" name="dataSearch" value="">
                      <div class="block__condition--btn buttonarr buttonarr-white setPrefHistory"><button type="submit"><span>変更する</span></button></div>
                    </form>
                  </div>
                </div>
                <div class="block__condition--block">
                  <div class="block__condition--tit">
                    <p><img src="{{asset('common_img/icon/icon-chk.png')}}" alt="詳細条件"><span>詳細条件</span></p>
                  </div>
                  <div class="block__condition--info">
                    <div class="input">
                      <p class="txtdata">{{ $sticking_name??'' }}</p>
                    </div>
                    <div class="txt">
                      @if($genre_aside)<p><strong>ジャンル</strong></p>@endif
                      <p class="notknow">{{ $genre_aside }}</p>
                      <div class="w_as"></div>
                    </div>
                    <form action="{{ route('front.home.index') }}" method="POST">@csrf
                      <input type="hidden" name="click_type" value="2">
                      <input type="hidden" name="dataSearch" value="">
                      <div class="block__condition--btn buttonarr buttonarr-white setPrefHistory"><button type="submit"><span>変更する</span></button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /blockCondition -->
            <div class="block__results--order">
              <div class="resultsnumber">
                @php
                    $page = (object) $companies->toArray();
                @endphp
                <p>{{ $page->from ?? 0 }}件～{{ $page->to ?? 0 }}件目/<span>{{$companies->total()}}</span>件</p>
              </div>
              <div class="resultsorder">
                <select id="sort_company" name="">
                  <option data-id="1" value="おすすめ順" {{ request()->get('sort') == 1 ? 'selected' : '' }}>おすすめ順</option>
                  <!-- (điểm ưu tiên hiển thị->có url->điểm review->ngày update mới nhất) -->
                  <option data-id="2" value="口コミ点数順" {{ request()->get('sort') == 2 ? 'selected' : '' }}>口コミ点数順</option>
                  <!-- (điểm review->điểm ưu tiên hiển thị->có url->ngày update mới nhất) -->
                  <option data-id="3" value="口コミ件数順" {{ request()->get('sort') == 3 ? 'selected' : '' }}>口コミ件数順</option>
                  <!-- (số lượng đánh giá->điểm ưu tiên hiển thị->có url->điểm review->ngày update mới nhất) -->
                  <option data-id="4" value="新着・更新順" {{ request()->get('sort') == 4 ? 'selected' : '' }}>新着・更新順</option>
                  <!-- (ngày update mới nhất->điểm ưu tiên hiển thị->có url->điểm review) -->
                </select>
                <a href="" class="hidden" id="sort_link"></a>
              </div>
            </div>
            <!-- block__results--block -->
            @foreach ($companies as $company)
              <div class="block__results--block">
                <h3 class="block__results--tit" data-companyid={{$company->id}}><a href="{{route('front.company', $company->id)}}">{{$company['company_name']}}</a></h3>
                <div class="block__results--img {{(isset($company['getImageMain'][0]['image_path']) == 0) ? 'noimage':'hasimage'}}">
                  <img src="{{ isset($company['getImageMain'][0]['image_path']) ? asset($company['getImageMain'][0]['image_path']) : asset('images/notfound.png')}}" alt="{{ $company['company_name'] }}">
                </div>
                <div class="block__results--info">
                  <p><strong>{{$company->company_title}}</strong></p>
                  <p>{{$company->company_content}}</p>
                </div>
                <div class="block__results--btn flexbox">
                  <div class="buttonarr btnofficial"><a target="_blank" href="{{$company->home_page}}"><span>公式サイトを見る</span></a></div>
                  <div class="buttonarr btndetail buttonarr-green"><a href="{{route('front.company', $company->id)}}"><span>詳細を見る</span></a></div>
                </div>
              </div>
            @endforeach
            <!-- /block__results--block-->
            <!-- block__pagination-->
            {!! $companies->appends(request()->input())->links('front.components.pagination') !!}
            <!-- /block__pagination-->
            <!-- blockCondition -->
            <div class="block__condition block__condition--forsp">
              <div class="block__condition--head">
                <h3>検索条件</h3>
              </div>
              <div class="block__condition--body">
                <div class="block__condition--block">
                  <div class="block__condition--tit">
                    <p><img src="{{asset('common_img/icon/icon-location.png')}}" alt="エリア"><span>エリア</span></p>
                  </div>
                  <div class="block__condition--info">
                    <div class="input">
                      <!-- <input type="text" placeholder="{{ $pref_aside }}" value="{{ $pref_aside }}"> -->
                      <p class="txtdata">{{ $pref_aside }}</p>
                    </div>
                    <div class="txt tit_area">
                      <p>{{ $pref_aside }}</p>
                    </div>
                    <form action="{{ route('front.home.index') }}" method="POST">@csrf
                      <input type="hidden" name="click_type" value="1">
                      <input type="hidden" name="dataSearch" value="">
                      <div class="block__condition--btn buttonarr buttonarr-white setPrefHistory"><button type="submit"><span>変更する</span></button></div>
                    </form>
                  </div>
                </div>
                <div class="block__condition--block">
                  <div class="block__condition--tit">
                    <p><img src="{{asset('common_img/icon/icon-chk.png')}}" alt="詳細条件"><span>詳細条件</span></p>
                  </div>
                  <div class="block__condition--info">
                    <div class="input">
                      <p class="txtdata">{{ $sticking_name??'' }}</p>
                    </div>
                    <div class="txt">
                      @if($genre_aside)<div class="block__city--tit area_type_2" style="display: block;"><span>ジャンル</span></div>@endif
                      <p class="notknow">{{ $genre_aside }}</p>
                      <div class="w_as">
                        {{-- <div class="block__city--tit area_type_2 area_type_3" style="display: block;"><span>ダミーテキスト</span></div>
                        <p class="notknow">{{ $sticking_name??'' }}</p> --}}
                      </div>
                    </div>
                    <form action="{{ route('front.home.index') }}" method="POST">@csrf
                      <input type="hidden" name="click_type" value="2">
                      <input type="hidden" name="dataSearch" value="">
                      <div class="block__condition--btn buttonarr buttonarr-white setPrefHistory"><button type="submit"><span>変更する</span></button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /blockCondition -->
          </div>
          <!-- /block__search--body-->
        </div>
        <!-- /block__search-->
      </div>
      <!-- sidebar-->
      <aside class="sidebar dispc">
        {{-- {{ dd($arrParams) }} --}}
        @include('front.components.images-sidebar')
        <div class="hidden_block">
          <input type="hidden" name="current-url" value="{{url()->current()??''}}">
          <input type="hidden" name="current-params" value="{{ json_encode($arrParams??'')}}">
        </div>
        <!-- blockCondition -->
        <div class="block__condition">
          <div class="block__condition--head">
            <h3>検索条件</h3>
          </div>
          
            <div class="block__condition--body">
              <div class="block__condition--block">
                <div class="block__condition--tit">
                  <p><img src="{{asset('common_img/icon/icon-location.png')}}" alt="エリア"><span>エリア</span></p>
                </div>                
                  <div class="block__condition--info">
                    @if(isset($seoArr))
                      <div class="input">
                        <input type="text" placeholder="{{ $pref_aside }}" value="{{ $pref_aside }}">
                      </div>
                      @if(!isset($withoutParam))
                        <div class="txt tit_area">                  
                          <p class="aside_gencity">{{ $seoArr['arr_params']['pref_jp'] }}
                            @if(count($seoArr['arr_params']['city']) > 0)
                            （{{collect($seoArr['arr_params']['city'])->implode('、')}}）
                            @endif
                          </p>                  
                        </div>
                      @endif
                    @endif
                    <form action="{{ route('front.home.index') }}" method="POST">@csrf
                      <input type="hidden" name="click_type" value="1">
                      <input type="hidden" name="dataSearch" value="">
                      <div class="block__condition--btn buttonarr buttonarr-white setPrefHistory"><button type="submit"><span>変更する</span></button></div>
                    </form>
                  </div>                
              </div>
              <div class="block__condition--block">
                <div class="block__condition--tit">
                  <p><img src="{{asset('common_img/icon/icon-chk.png')}}" alt="詳細条件"><span>詳細条件</span></p>
                </div>
                
                  <div class="block__condition--info">
                    <div class="input">
                      <input type="text" placeholder="指定なし">
                    </div>
                    @if(!isset($withoutParam))
                      @if(isset($seoArr))
                        <div class="txt aside_genstick">
                          @if($genre_aside)<p><strong>ジャンル</strong></p>@endif
                          <p class="notknow">{{ $genre_aside }}</p>
                          {{-- <p><strong>ダミーテキスト</strong></p> --}}
                          {{-- <p class="notknow">{{ $sticking_name??'' }}</p> --}}

                          @if(count($seoArr['arr_params']['stickingwithcat']))
                            <div class="w_as">
                                @foreach ($seoArr['arr_params']['stickingwithcat'] as $key => $stickingss)
                                  <p><strong>{{$key}}</strong></p>
                                  @if(count($stickingss))
                                    @foreach ($stickingss as $key => $sticking)
                                      <p class="notknow">{{$sticking['name']}}</p>
                                    @endforeach
                                  @endif
                                @endforeach
                            </div>
                          @endif                    
                        </div>
                      @endif
                    @endif
                    <form action="{{ route('front.home.index') }}" method="POST">@csrf
                      <input type="hidden" name="click_type" value="2">
                      <input type="hidden" name="dataSearch" value="">
                      <div class="block__condition--btn buttonarr buttonarr-white setPrefHistory"><button type="submit"><span>変更する</span></button></div>
                    </form>
                  </div>                
                
              </div>
            </div>
          
        </div>
        <!-- /blockCondition -->
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
@endsection
@section('append_foot')
  <script>      
    var seoArr = {!! json_encode(@$seoArr) !!};
    if(seoArr) {
      dataSearchNew = {
        url_search: "",    
        area: "",
        pref_jp: "",
        genre: '',
        cities: [],
        stickings: [],        
      };    
      dataSearchNew.area = seoArr['arr_params']['pref'];
      dataSearchNew.pref_jp = seoArr['arr_params']['pref_jp'];
      dataSearchNew.cities = seoArr['cities_id'];
      dataSearchNew.genre = seoArr['arr_params']['genre'];    
      dataSearchNew.stickings = seoArr['stickings_id'];  
      dataSearchNew.url_search = location.href;
      localStorage.removeItem('dataSearch');
      $('input[name="dataSearch"]').val(JSON.stringify(dataSearchNew));      
    }

    $(document).ready(function () {
    })
    .on('change', '#sort_company', function (e) {
      href = window.location.href;
      sort = '?sort='+$(this).children("option:selected").attr('data-id')
      window.location.href = href.split('?')[0]+sort
    })
  </script>
@endsection