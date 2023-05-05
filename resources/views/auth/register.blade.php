@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Register Page')

@section('content')
	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(/assets/img/login-bg/login-bg-18.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- end login-cover -->
	<!-- begin login -->
	<div class="login login-v2" data-pageload-addclass="animated fadeIn">
		<!-- begin brand -->
		<div class="login-header">
			<div class="brand">
				</span> <b>Si</b>PMB
				<small>Halaman Registrasi</small>
			</div>
			<div class="icon mx-auto">
				<a href="#"><img src="{{asset('assets/img/logo/logo-unsa.png')}}" width="100"></a>
			</div>
		</div>
		<!-- end brand -->
		<br>
		<!-- begin login-content -->
		<div class="login-content">
			<form action="{{ request()->routeIs('admin*') ? route('admin.register') : route('register') }}" method="POST" class="margin-bottom-0">
                @csrf
				<div class="form-group m-b-20">
					<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
				</div>
				<div class="register-buttons">
					<button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
				</div>
				<!--<div class="checkbox checkbox-css m-b-30">
					<div class="checkbox checkbox-css m-b-30">
						<input type="checkbox" id="agreement_checkbox" value="">
						<label for="agreement_checkbox">
						By clicking Sign Up, you agree to our <a href="javascript:;">Terms</a> and that you have read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie Use</a>.
						</label>
					</div>
				</div>-->
				@if(!request()->routeIs('admin*'))
				<div class="m-t-20">
					Telah Mempunyai Akun?  <a href="{{route('login')}}">Login</a>
				</div>
				@endif
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
	
	<!-- begin login-bg -->
	<ul class="login-bg-list clearfix">
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-17.jpg" style="background-image: url(/assets/img/login-bg/login-bg-17.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-unsa-1.jpg" style="background-image: url(/assets/img/login-bg/login-bg-unsa-1.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-unsa-3.jpg" style="background-image: url(/assets/img/login-bg/login-bg-unsa-3.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-unsa-4.jpg" style="background-image: url(/assets/img/login-bg/login-bg-unsa-4.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-unsa-5.jpg" style="background-image: url(/assets/img/login-bg/login-bg-unsa-5.jpg)"></a></li>
		<li class="active"><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-18.jpg" style="background-image: url(/assets/img/login-bg/login-bg-18.jpg)"></a></li>
	</ul>
	<!-- end login-bg -->
@endsection

@push('scripts')
	<script src="/assets/js/demo/login-v2.demo.js"></script>
@endpush
