@extends('admin.layout',[
                'page_lang' => 'jp'
            ]
        )
@section('content')
    @if ($errors->any())
    <div class="alert  alert-warning w90 m0a center mb20">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container-fluid">
        <div class="panel" id="exampleReport">
        <div class="panel-body">
            <div class="panel-heading">
                <h4 class="panel-title">Welcome Admin</h4>
                <p>Please consider carefully before taking any action.</p>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('append_foot')
    <script src="{{ asset('js/common.js') }}" defer></script>
@endsection
