<header class="Header">
  <div class="container Header__cont">
    <div class="Header__cont--logo"><a href="{{route('front.home.index')}}"><img src="{{asset('common_img/logo.png')}}" alt="utorie（ウトリエ）"></a></div>
    <div class="Header__cont--nav">
      <div class="hamburger">
        <div class="hamburger__inside"><span></span><span></span><span></span></div>
      </div>
      <div class="GloNav">
        <nav class="GloNav__inside">
          <ul class="GloNav__inside--list">
            <li><a href="{{route('front.search.index')}}"><img src="{{asset('common_img/icon/nav-icon1.png')}}" alt="不動産・住宅会社を探す"><span>不動産・住宅会社を探す</span></a></li>
            <li class="has-child-menu"><span class="nav_title titleacr"><img src="{{asset('common_img/icon/nav-icon2.png')}}" alt="一括資料請求する"><span>一括資料請求する</span></span>
              <div class="nav_sub clearfix">
                <ul>
                  <li><a href="{{route('front.catalog.index')}}">まとめて</a></li>
                  <li><a href="{{route('front.catalog.mansion.index')}}">分譲マンション</a></li>
                  <?php /*<li><a href="{{route('front.home.index')}}">建売住宅</a></li>
                  <li><a href="{{route('front.home.index')}}">注文住宅</a></li>
                  <li><a href="{{route('front.home.index')}}">新築マンション</a></li>
                  <li><a href="{{route('front.home.index')}}">リフォーム</a></li>
                  <li><a href="{{route('front.home.index')}}">不動産投資</a></li>*/?>
                </ul>
              </div>
            </li>
            <li><a href="https://utorie.jp/column/"><img src="{{asset('common_img/icon/nav-icon3.png')}}" alt="コラムを見る"><span>コラムを見る</span></a></li>
            <li><a href="{{route('front.contact')}}"><img src="{{asset('common_img/icon/nav-icon4.png')}}" alt="お問い合わせする"><span>お問い合わせする</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>