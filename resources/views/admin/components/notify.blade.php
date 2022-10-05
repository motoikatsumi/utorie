@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('alert-class') }} fade show w90 m0a center mb20" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
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
