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
        <li><a href="{{route('front.contact')}}">お問い合わせ</a></li>
        <li>申し込み完了</li>
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
            <h2 class="black">お問い合わせを承りました</h2>
          </div>
          <p>担当者より折り返しご連絡を差し上げますので、しばらくお待ちください。内容によってはご返信にお時間をいただく場合や、ご返信ができかねる場合ががございますので、予めご了承ください。</p>
          <div class="table thanks--table">
            <h3>お申し込み内容</h3>
            <table>
              <tbody>
                <tr>
                  <th>お問い合わせ種別</th>
                  <td>{{$contactdata['issue']??''}}</td>
                </tr>
                <tr>
                  <th>会社名</th>
                  <td>{{$contactdata['building_area2']??''}}</td>
                </tr>
                <tr>
                  <th>氏名</th>
                  <td>{{$contactdata['name']??''}}</td>
                </tr>
                <tr>
                  <th>メールアドレス</th>
                  <td>{{$contactdata['email']??''}}</td>
                </tr>
                <tr>
                  <th>電話番号</th>
                  <td>{{$contactdata['phone']??''}}</td>
                </tr>
                <tr>
                  <th>お問い合わせ内容</th>
                  <td>{{$contactdata['message']??''}}</td>
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