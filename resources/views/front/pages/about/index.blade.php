@extends('front.layout',['body_class' => 'secondpage navstate_show page-about'])
@section('content')
<main class="main_body p-about">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li>運営会社</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <div class="content site-content site-content--fullw" id="content">
        <div class="titpage noline tal">
          <h2 class="black">運営会社</h2>
        </div>
        <p class="desc">utorie（ウトリエ）を運営している株式会社フィンドの会社概要です。</p>
        <div class="table table--style">
          <table>
            <tr>
              <th>会社名</th>
              <td>株式会社フィンド</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>〒103-0026 東京都中央区日本橋兜町17-2 兜町第6葉山ビル4F</td>
            </tr>
            <tr>
              <th>代表者</th>
              <td>中西 郁成</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>メディア事業</td>
            </tr>
            <tr>
              <th>主要取引銀行</th>
              <td>みずほ銀行</td>
            </tr>
            <tr>
              <th>お問い合わせ</th>
              <td> <a href="../contact/">お問い合わせフォーム</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- /Mainlayout -->
</main>
@endsection