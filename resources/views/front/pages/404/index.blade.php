@extends('front.layout',['body_class' => 'secondpage navstate_show page-notfound'])
@section('content')
<main class="main_body p-notfound">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li>404 NOT FOUND</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <section class="content site-content" id="content">
        <!-- block__search-->
        <div class="nfoundfirst"><img src="{{asset('images/notfound.png')}}" alt="">
          <h2>お探しのページは見つかりませんでした</h2>
        </div>
        <p class="nffirst">申し訳ありません。お探しのページは削除されたか、<br class="dispc">移動された可能性がありますので、以下のコンテンツから探してみてください。</p>
        <!-- blocksitemap     -->
        <div class="blocksitemap">
          <div class="titpage3"> 
            <h3>全国の不動産・住宅会社を探す</h3>
          </div>
          <div class="blocksitemap__h"><span>エリアから探す</span></div>
          <div class="blocksitemap__links">
            <ul class="area">
              <li><a href="{{ route('front.search.by','hokkaido') }}">北海道</a></li>
              <li><span>東北</span>（<a href="{{ route('front.search.by','aomori') }}">青森</a>/<a href="{{ route('front.search.by','iwate') }}">岩手</a>/<a href="{{ route('front.search.by','akita') }}">秋田</a>/<a href="{{ route('front.search.by','miyagi') }}">宮城</a>/<a href="{{ route('front.search.by','yamagata') }}">山形</a>/<a href="{{ route('front.search.by','fukushima') }}">福島</a>）</li>
              <li><span>関東</span>（<a href="{{ route('front.search.by','tokyo') }}">東京</a>/<a href="{{ route('front.search.by','kanagawa') }}">神奈川</a>/<a href="{{ route('front.search.by','chiba') }}">千葉</a>/<a href="{{ route('front.search.by','saitama') }}">埼玉</a>/<a href="{{ route('front.search.by','ibaraki') }}">茨城</a>/<a href="{{ route('front.search.by','tochigi') }}">栃木</a>/<a href="{{ route('front.search.by','gunma') }}">群馬</a>）</li>
              <li><span>甲信越・北陸</span>（<a href="{{ route('front.search.by','yamanashi') }}">山梨</a>/<a href="{{ route('front.search.by','nagano') }}">長野</a>/<a href="{{ route('front.search.by','niigata') }}">新潟</a>/<a href="{{ route('front.search.by','toyama') }}">富山</a>/<a href="{{ route('front.search.by','ishikawa') }}">石川</a>/<a href="{{ route('front.search.by','fukui') }}">福井</a>）</li>
              <li><span>東海</span>（<a href="{{ route('front.search.by','aichi') }}">愛知</a>/<a href="{{ route('front.search.by','shizuoka') }}">静岡</a>/<a href="{{ route('front.search.by','gifu') }}">岐阜</a>/<a href="{{ route('front.search.by','mie') }}">三重</a>）</li>
              <li><span>関西</span>（<a href="{{ route('front.search.by','osaka') }}">大阪</a>/<a href="{{ route('front.search.by','hyogo') }}">兵庫</a>/<a href="{{ route('front.search.by','kyoto') }}">京都</a>/<a href="{{ route('front.search.by','shiga') }}">滋賀</a>/<a href="{{ route('front.search.by','nara') }}">奈良</a>/<a href="{{ route('front.search.by','wakayama') }}">和歌山</a>）</li>
              <li><span>中国</span>（<a href="{{ route('front.search.by','okayama') }}">岡山</a>/<a href="{{ route('front.search.by','hiroshima') }}">広島</a>/<a href="{{ route('front.search.by','tottori') }}">鳥取</a>/<a href="{{ route('front.search.by','shimane') }}">島根</a>/<a href="{{ route('front.search.by','yamaguchi') }}">山口</a>）</li>
              <li><span>四国</span>（<a href="{{ route('front.search.by','ehime') }}">愛媛</a>/<a href="{{ route('front.search.by','kagawa') }}">香川</a>/<a href="{{ route('front.search.by','kochi') }}">高知</a>/<a href="{{ route('front.search.by','tokushima') }}">徳島</a>）</li>
              <li><span>九州・沖縄</span>（<a href="{{ route('front.search.by','fukuoka') }}">福岡</a>/<a href="{{ route('front.search.by','saga') }}">佐賀</a>/<a href="{{ route('front.search.by','nagasaki') }}">長崎</a>/<a href="{{ route('front.search.by','kumamoto') }}">熊本</a>/<a href="{{ route('front.search.by','oita') }}">大分</a>/<a href="{{ route('front.search.by','miyazaki') }}">宮崎</a>/<a href="{{ route('front.search.by','kagoshima') }}">鹿児島</a>/<a href="{{ route('front.search.by','okinawa') }}">沖縄</a>）</li>
            </ul>
          </div>
          <div class="blocksitemap__h"><span>ジャンルから探す</span></div>
          <div class="blocksitemap__links">
            <ul>
              <li><a href="{{ route('front.search.by','ikkodate') }}">ハウスメーカー</a></li>
              <li><a href="{{ route('front.search.by','tochi') }}">不動産会社（土地）</a></li>
              <li><a href="{{ route('front.search.by','remodel') }}">リフォーム会社</a></li>
              <li><a href="{{ route('front.search.by','toushi') }}">不動産投資会社</a></li>
            </ul>
          </div>
          <div class="titpage3">
            <h3>一括資料請求する</h3>
          </div>
          <div class="blocksitemap__links">
            <ul>
              <li><a href="#">建売住宅</a></li>
              <li><a href="#">注文住宅</a></li>
              <li><a href="#">分譲マンション</a></li>
              <li><a href="#">リフォーム</a></li>
              <li><a href="#">住宅ローン</a></li>
              <li><a href="#">住宅保険</a></li>
            </ul>
          </div>
          <div class="titpage3">
            <h3>コラムを見る</h3>
          </div>
          <div class="blocksitemap__links">
            <ul>
              <li><a href="#">コラムカテゴリ</a></li>
              <li><a href="#">コラムカテゴリ</a></li>
              <li><a href="#">コラムカテゴリ</a></li>
              <li><a href="#">コラムカテゴリ</a></li>
              <li><a href="#">コラムカテゴリ</a></li>
              <li><a href="#">コラムカテゴリ</a></li>
            </ul>
          </div>
          <div class="titpage3">
            <h3>その他</h3>
          </div>
          <div class="blocksitemap__links">
            <ul>
              <li><a href="{{route('front.regulation')}}">利用規約</a></li>
              <li><a href="{{route('front.privacy-policy')}}">プライバシーポリシー</a></li>
              <li><a href="{{route('front.contact')}}">お問い合わせ</a></li>
              <li><a href="{{route('front.about')}}">運営会社</a></li>
            </ul>
          </div>
        </div>
        <!-- /blocksitemap -->
      </section>
      <!-- sidebar-->
      <aside class="sidebar dispc">
        @include('front.components.images-sidebar')
      </aside>
      <!-- /sidebar-->
    </div>
  </section>
  <!-- /Mainlayout -->
  <section class="sidebar dissp">
    <div class="container">
      @include('front.components.images-sidebar-sp')
    </div>
  </section>
</main>
<script>
  sessionStorage.removeItem("side_bar");
  sessionStorage.removeItem("save_all_city_name");
  sessionStorage.removeItem("save_all_city_id");
  sessionStorage.removeItem("area_history");
  sessionStorage.removeItem("dataSearch");
  sessionStorage.removeItem("cities_id");
  sessionStorage.removeItem("click_type");
  sessionStorage.removeItem("params_history");
</script>
@endsection