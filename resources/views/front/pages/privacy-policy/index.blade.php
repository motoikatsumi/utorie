@extends('front.layout',['body_class' => 'secondpage navstate_show page-regulation'])
@section('content')
<main class="main_body p-regulation">
  <!-- BREADCRUMB -->
  <section class="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="{{route('front.home.index')}}">TOP</a></li>
        <li>プライバシーポリシー</li>
      </ul>
    </div>
  </section>
  <!-- /END BREADCRUMB-->
  <!-- Mainlayout -->
  <section class="mainlayout">
    <div class="container flexwrap">
      <div class="content site-content" id="content">
        <div class="titpage noline tal">
          <h2 class="black">プライバシーポリシー</h2>
        </div>
        <div>
          <p class="firstpp">株式会社フィンド（以下「当社」といいます）は、個人情報の重要性とその保護に対する社会的責務を認識し、以下のプライバシーポリシーに基づいて、個人情報の適切な取り扱いに努めます。</p>
          <div class="blockregu">
            <div class="titpage3">
              <h3>1. 法令その他の規範の遵守</h3>
            </div>
            <p>当社は個人情報の保護に関する法令及びその他の規範を遵守します。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>2. 個人情報の取得 </h3>
            </div>
            <p>
                utorie（以下、本サイトといいます）のご利用、ご登録が必要なサービスのご利用に際して、お名前や電子メールアドレス、電話番号、居住地域などの個人情報を送信していただく場合があります。 また本サイトへの投稿やお問い合わせの際には、IPアドレスが自動的に検出され、ログとして保存されます。これは単独で個人を特定できるものではなく、厳密な意味での個人情報には当たりませんが、個人情報に準じた取り扱いを行います。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>3. 利用の範囲  </h3>
            </div>
            <p>ご提供いただいた個人情報は当社からの連絡先、あるいは当社が提供するサービスをご利用頂く場合、あるいはサービスご利用の際に提携店舗が利用者を特定する為に提供される場合のみ利用され、それ以外の用途で利用されることはありません。 またより良いサービスを提供するために、利用者の閲覧履歴や投稿履歴情報、サービスのご利用状況等に統計・分析処理を施し、個人を特定できない情報に加工した上で、マーケティングデータとして活用させていただく場合があります。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>4. cookie（クッキー）の使用について  </h3>
            </div>
            <p>当社は、お客様によりよいサービスを提供するため、cookie （クッキー）を使用することがありますが、これにより個人を特定できる情報の収集を行えるものではなく、お客様のプライバシーを侵害することはございません。 また、cookieの受け入れを希望されない場合は、ブラウザの設定で変更することができます。<br>※cookieは、サーバーコンピュータからお客様のブラウザに送信され、お客様が使用しているコンピュータのハードディスクに蓄積される情報です。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>5. 第三者による広告配信サービスでの情報利用について </h3>
            </div>
            <p>本サイトでは、第三者配信の広告サービス（Googleアドセンス）を利用しています。 このような広告配信事業者は、ユーザーの興味に応じた商品やサービスの広告を表示するため、本サイトや他サイトへのアクセスに関する情報 『Cookie』(氏名、住所、メール アドレス、電話番号は含まれません) を使用することがあります。<br>またGoogleアドセンスに関して、このプロセスの詳細やこのような情報が広告配信事業者に使用されないようにする方法については、こちら をクリックしてください。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>6. アクセス解析ツールでの情報利用について </h3>
            </div>
            <p>本サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。 このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。 このトラフィックデータは匿名で収集されており、個人を特定するものではありません。 この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。 この規約に関して、詳しくは こちら をクリックしてください。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>7. 個人情報の保護・管理 </h3>
            </div>
            <p>当社は個人情報の取り扱いに関して適切な管理を実施します。個人情報を販売したり貸し出したりすることはありません。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>8. 提供の制限  </h3>
            </div>
            <p>当社は、サービス提供の上で必要な医院及び業務委託先に対して、必要最小限な情報に限り情報を提供します。</p>
          </div>
          <div class="blockregu">
            <div class="titpage3">
              <h3>9. プライバシーポリシーの変更</h3>
            </div>
            <p>本サイトでは、収集する個人情報の変更、利用目的の変更、またはその他プライバシーポリシーの変更を行う際は、本ページへの公開をもって変更とさせて頂きます。</p>
            <p class="lastpp"><strong>株式会社フィンド 2021年9月1日 制定</strong></p>
          </div>
        </div>
      </div>
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
@endsection