@extends('front.layout',['body_class' => 'secondpage navstate_show page-contact'])
@section('content')
<style>
  .center {text-align: center;}
</style>
<main class="main_body p-contact">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li>お問い合わせ</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container">
      <div class="contactform form">
        <div class="titpage noline">
          <h2 class="black">お問い合わせ</h2>
        </div>
        <div class="contactform_main">
          @if (session('status'))
              <div class="alert alert-success w90 m0a center mb20">
                  {{ session('status') }}
              </div>
          @endif
          @if(session('error'))
              <div class="alert alert-danger w90 m0a center mb20">
                  {{session('error')}}
              </div>
          @endif
          <p>各種お問い合わせはこちらから </p>
          <form class="needs-validation" id="contacform" 
                autocomplete="off" 
                enctype="multipart/form-data" 
                method="POST"
              >
              {{ csrf_field() }}
            <div class="formrow">
              <h3 class="cth3">お問い合わせ種別</h3>
              <div class="formrow_e formrow_fss">
                <label class="checkcontainer">
                  <input type="radio" name="issue" value="口コミに関して"><span class="radio_label">口コミ<br>に関して</span>
                </label>
                <label class="checkcontainer">
                  <input type="radio" name="issue" value="掲載依頼に関して"><span class="radio_label">掲載依頼<br>に関して</span>
                </label>
                <label class="checkcontainer">
                  <input type="radio" name="issue" value="その他"><span class="radio_label">その他</span>
                </label>
              </div>
            </div>
            <div class="formrow">
              <h3 class="cth3">会社名<span class="required"></span></h3>
              <div class="formrow_e">
                <input type="text" name="building_area2" maxlength="150" placeholder="会社名をご入力ください">
              </div>
            </div>
            <div class="formrow">
              <h3 class="cth3">氏名<span class="required"></span></h3>
              <div class="formrow_e">
                <input type="text" name="name" maxlength="30" placeholder="氏名をご入力ください">
              </div>
            </div>
            <div class="formrow">
              <h3 class="cth3">メールアドレス<span class="required"></span></h3>
              <div class="formrow_e">
                <input type="email" inputmode="email" name="email" maxlength="30" placeholder="メールアドレスをご入力ください">
              </div>
            </div>
            <div class="formrow">
              <h3 class="cth3">電話番号<span class="nonerequired"></span></h3>
              <div class="formrow_e">
                <input type="number" inputmode="numeric" maxlength="14" name="phone" placeholder="電話番号をご入力ください">
              </div>
            </div>
            <div class="formrow">
              <h3 class="cth3">お問い合わせ内容<span class="required"></span></h3>
              <div class="formrow_e">
                <textarea name="message" cols="30" rows="10" maxlength="1500"  placeholder="お問い合わせ内容をご入力ください"></textarea>
              </div>
            </div>
            <div class="buttonsubmit">
              <button type="submit" id="submit" disabled=""><span>お問い合わせをする</span></button>              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection