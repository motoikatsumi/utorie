<!doctype html>
<html @unless(empty($page_lang))lang="{{$page_lang}}" @endunless>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @unless(empty($meta_title))
    <title>{{$meta_title}}</title>
    @endunless
    <!-- Scripts -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('backend/css/base.css') }}" rel="stylesheet" type="text/css">
</head>
<body id="page-top">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand">
					Login
				</a>
			</div>
		</nav>
		<main class="py-4">
				
			<div class="container">
				
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="card">
											<div class="card-header">{{ __('Login') }}</div>

											<div class="card-body">
													
														@if ($errors->any())
																@foreach ($errors->all() as $error)
																	<div class="alert alert-danger center mt20">
																			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
																			{{$error}}
																	</div>
																@endforeach
														@endif
													
													<form method="POST" action="{{ route('admin.login') }}">
															@csrf
			
															<div class="form-group row">
																	<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
			
																	<div class="col-md-6">
																		<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

																		@error('username')
																				<span class="invalid-feedback" role="alert">
																						<strong>{{ $message }}</strong>
																				</span>
																		@enderror
																	</div>
															</div>
			
															<div class="form-group row">
																	<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
			
																	<div class="col-md-6">
																			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
			
																			@error('password')
																					<span class="invalid-feedback" role="alert">
																							<strong>{{ $message }}</strong>
																					</span>
																			@enderror
																	</div>
															</div>
			
															<div class="form-group row">
																	<div class="col-md-6 offset-md-4">
																			<div class="form-check">
																					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
			
																					<label class="form-check-label" for="remember">
																							{{ __('Remember Me') }}
																					</label>
																			</div>
																	</div>
															</div>
			
															<div class="form-group row mb-0">
																	<div class="col-md-8 offset-md-4">
																			<button type="submit" class="btn btn-primary">
																					{{ __('Login') }}
																			</button>
			
																			{{-- @if (Route::has('password.request'))
																					<a class="btn btn-link" href="{{ route('password.request') }}">
																							{{ __('Forgot Your Password?') }}
																					</a>
																			@endif --}}
																	</div>
															</div>
													</form>
											</div>
									</div>
							</div>
					</div>
			</div>
		</main>
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('backend/js/common.js') }}" defer></script>
</body>
</html>
