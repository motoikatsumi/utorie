<div class="navbar-nav sidebar sidebar-dark bg-gradient-primary sidebar-blue">
  <div class="sticky">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://utorie.jp/">
      <div class="sidebar-brand-text mx-3 sidebar-brand-text-logoblack">
        <img src="{{ asset('backend/images/logo.png') }}">
      </div>
    </a>
    {{-- <li class="nav-item {{ (request()->is('admin/users*')) ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.user') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>{{ __('Users') }}</span></a>
    </li> --}}
    <div class="sidebar-heading">会社管理<i class="fa fa-chevron-down"></i></div>
    <ul class="nav-itemlist">
      <li class="nav-item {{ (request()->is('admin/company')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('company.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>会社一覧</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/company/create')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('company.create') }}">
          <i class="fa fa-caret-right"></i>
          <span>会社登録</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/company/')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('company.csv') }}">
          <i class="fa fa-caret-right"></i>
          <span>CSVインポート</span></a>
      </li>
    </ul>
    <div class="sidebar-heading">営業所管理<i class="fa fa-chevron-down"></i></div>
    <ul class="nav-itemlist">
      <li class="nav-item {{ (request()->is('admin/office')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('office.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>営業所一覧</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/office/create')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('office.create') }}">
          <i class="fa fa-caret-right"></i>
          <span>営業所登録</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/office/')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('office.csv') }}">
          <i class="fa fa-caret-right"></i>
          <span>CSVインポート</span></a>
      </li>
    </ul>
    <div class="sidebar-heading">口コミ管理<i class="fa fa-chevron-down"></i></div>
    <ul class="nav-itemlist">
      <li class="nav-item {{ (request()->is('admin/review')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('review.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>口コミ一覧</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/review/create')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('review.create') }}">
          <i class="fa fa-caret-right"></i>
          <span>口コミ登録</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/review/')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('review.csv') }}">
          <i class="fa fa-caret-right"></i>
          <span>CSVインポート</span></a>
      </li>
    </ul>
    <div class="sidebar-heading">項目管理 <i class="fa fa-chevron-down"></i></div>
    <ul class="nav-itemlist">
      <li class="nav-item {{ (request()->is('admin/pref*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.prefdata.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>都道府県一覧</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/area*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.area.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>市区町村一覧</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/genre*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.genre.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>ジャンル一覧</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/sticking*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.sticking.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>その他こだわり条件一覧</span></a>
      </li>
    </ul>
    <div class="sidebar-heading">設定<i class="fa fa-chevron-down"></i></div>
    <ul class="nav-itemlist">
      <li class="nav-item {{ (request()->is('admin/setting*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.setting.index') }}">
          <i class="fa fa-caret-right"></i>
          <span>General</span></a>
      </li>
      <li class="nav-item {{ (request()->is('admin/image-aside*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.setting.aside') }}">
          <i class="fa fa-caret-right"></i>
          <span>Pickup</span></a>
      </li>
    </ul>
    <div class="sidebar-heading seofunction">Settings <i class="fa fa-chevron-down"></i></div>
    <ul class="nav-itemlist seofunction">
      <li class="nav-item {{ (request()->is('admin/seo*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.seo.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>{{ __('Seo') }}</span></a>
      </li>
    </ul>
  </div>
</div>