@extends('front.layout',['body_class' => 'secondpage navstate_show page-contact-thanks'])
@php
  $contactdata = session('contactdata')
@endphp
@section('content')
<main class="main_body p-contact-thanks">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li><a href="{{route('front.contact')}}">不動産会社検索</a></li>
        <li>{{$seoArr['breadcrumb']}}</li>
        <li>口コミ完了</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <div class="content site-content site-content--fullw" id="content">        
        @if(Session::has('contactdata'))
          <div class="titpage noline">
            <h2 class="black">口コミを送信しました</h2>
          </div>
          <p>内容を確認のうえ、問題がない場合は反映いたします。</p>
          <div class="table thanks--table">
            <h3>お申し込み内容</h3>
            <table>
              <tbody>
                <tr>
                  <th>お名前・ニックネーム</th>
                  <td></td>
                </tr>
                <tr>
                  <th>年代</th>
                  <td></td>
                </tr>
                <tr>
                  <th>性別</th>
                  <td></td>
                </tr>
                <tr>
                  <th>総合満足度</th>
                  <td></td>
                </tr>
                <tr>
                  <th>価格</th>
                  <td></td>
                </tr>
                <tr>
                  <th>商品力・性能</th>
                  <td></td>
                </tr>    
                <tr>
                  <th>設計・提案力</th>
                  <td></td>
                </tr>  
                <tr>
                  <th>選択自由度</th>
                  <td></td>
                </tr>  
                <tr>
                  <th>アフターケア・メンテナンスサポート</th>
                  <td></td>
                </tr>
                <tr>
                  <th>口コミ件名</th>
                  <td></td>
                </tr>
                <tr>
                  <th>口コミ内容</th>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>
  </section>
</main>
@endsection