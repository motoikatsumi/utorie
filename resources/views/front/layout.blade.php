<!doctype html>
<html lang="{{config('define.pagelang')}}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <!-- if IEmeta(http-equiv='X-UA-Compatible', content='IE=edge,chrome=1')-->
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>    
@isset($seo['page_status'])
  @if($seo['page_status'])
  <title>@isset($seo['title']){{ $seo['title'] }}@endisset</title>
  <meta name="description" content="{{ $seo['description'] }}"/>
  <meta name="keywords" content="{{ $seo['keywords'] }}"/>
  @else
  <title>{{ $seoArr['meta_title']??'' }}</title>
  <meta name="description" content="{{ $seoArr['description']??'' }}"/>
  <meta name="keywords" content="{{ $seo['keywords'] }}"/>
  @endif
@else
  <title>{{ $seoArr['meta_title']??'' }}</title>
  <meta name="description" content="{{ $seoArr['description']??'' }}"/>
  <meta name="keywords" content="$SEO_KEYWORD"/>
@endisset  
  @if (\Request::route()->getName() == 'front.company')            
    <meta name="robots" content="@isset($company['index']){{ $company['index'] == 0 ? 'index,follow' : 'noindex, nofollow' }} @else index,follow @endisset"/>
  @else    
    <meta name="robots" content="@isset($seo['is_index']){{ $seo['is_index'] ? 'index,follow' : 'noindex, nofollow' }} @else index,follow @endisset"/>
  @endif
  
  <meta name="format-detection" content="telephone=no"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
  <link rel="icon" type="image/x-icon" href="{{ asset('common_img/favicon.png') }}" sizes="32x32"/>
  <script src="//code.jquery.com/jquery-1.8.3.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  {!! $gaTag !!}
  <script>
    var homeurl = "{{route('front.home.index')}}";
  </script>
@yield('append_head')
</head>
<body @unless(empty($body_class))class="{{$body_class}}"@endunless>  
@yield('header')
@if (!Auth::guest())
  @if(Auth::user()->hasRole(\App\Enums\EUserType::ADMIN))
    {{-- <a style="position:absolute;right:0;top:0; text-decoration: underline" target="_blank" href="{{route('admin.dashboard')}}">Admin Management</a> --}}
  @endif
@endif
@include('front.components.header')
@yield('content')
@yield('footer')
@include('front.components.footer')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/function.js') }}" defer></script>
@yield('append_foot')  
</body>
</html>
