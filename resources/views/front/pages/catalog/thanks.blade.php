@extends('front.layout',['body_class' => 'secondpage navstate_show page-contact-thanks'])
@php
  $catalogdata = session('catalogdata')
@endphp
@section('content')
<main class="main_body p-contact-thanks">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li><a href="{{route('front.catalog.index')}}">一括資料請求</a></li>
        <li>申し込み完了</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <div class="content site-content site-content--fullw" id="content">
        @if(Session::has('catalogdata'))
          {{-- {{dd($catalogdata)}} --}}
          <div class="titpage noline">
            <h2 class="black">一括資料請求を申し込みました</h2>
          </div>
          <p>ご入力いただいた情報をもとに、不動産・住宅会社よりご提案のご連絡をさせていただきます。今しばらくお待ち下さい。<br><br>また、申込内容のご確認・今後のご案内を、ご入力いただいたメールアドレス宛に送信いたしました。メールが届いていない場合は、迷惑メールに振り分けられているか、ご入力いただいたメールアドレスが間違っている可能性があります。</p>
          <div class="table thanks--table">
            <h3>お申し込み内容</h3>
            <table>
              <tbody>
                <tr>
                  <th>ご希望の住宅タイプは？</th>
                  {{-- <td>{{$catalogdata['housetype']??''}}</td> --}}
                  <td>
                    @foreach ($catalogdata['housetype'] as $item)                        
                      @if($loop->last) 
                        {{$item}}
                      @else
                        {{$item}},
                      @endif                        
                    @endforeach
                  </td>
                </tr>
                <tr>
                  <th>ご希望のエリアは？</th>
                  <td>{{$catalogdata['building_area']??''}}</td>
                </tr>
                <tr>
                  <th>土地の有無は？</th>
                  <td>{{$catalogdata['isthereland'] == '1' ? 'あり' : 'なし'}}</td>
                </tr>                
                @if($catalogdata['isthereland'] !== '2') 
                  <tr>
                    <th>土地の広さは？</th>
                    <td>{{
                      ($catalogdata['isthereland'] == '1') ?
                      is_numeric($catalogdata['howbigland']) ? $catalogdata['howbigland_value'] : $catalogdata['howbigland']
                      : ''
                      }}</td>
                  </tr>
                @endif                
                <tr>
                  <th>ご希望の建築予算は？</th>
                  <td>{{$catalogdata['budget']??''}}</td>
                </tr>
                <tr>
                  <th>お名前は？</th>
                  <td>{{$catalogdata['name']??''}}</td>
                </tr>
                <tr>
                  <th>ご年齢は？</th>
                  <td>{{$catalogdata['age']??''}}</td>
                </tr>
                <tr>
                  <th>メールアドレスは？</th>
                  <td>{{$catalogdata['email']??''}}</td>
                </tr>
                <tr>
                  <th>電話番号は？</th>
                  <td>{{$catalogdata['tel']??''}}</td>
                </tr>
                @if(!empty($catalogdata['addnew'])) 
                  <tr>
                    <th>補足説明？</th>
                    <td>{{$catalogdata['addnew']??''}}</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>
  </section>
</main>
@endsection