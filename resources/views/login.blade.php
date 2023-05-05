@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Login Page')

@section('content')
	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(/assets/img/login-bg/login-bg-18.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- end login-cover -->
	<div class="panel">
		<div class="panel-heading bg-blue-700 text-white">

		</div>
		
	  </div>
	<!-- begin login -->
	<div class="login login-v2" data-pageload-addclass="animated fadeIn">
		<!-- begin brand -->
		<div class="login-header">
			<div class="brand">
				<b>Si</b>PMB
				<small>Halaman Login</small>
			</div>
			<div class="icon mx-auto">
				<a href="#"><img src="{{asset('assets/img/logo/logo-unsa.png')}}" width="100"></a>
			</div>
		</div>
		<!-- end brand -->
		<br>
		<!-- begin login-content -->
		<div class="login-content">
			<form action="index.html" method="GET" class="margin-bottom-0">
				<div class="form-group m-b-20">
					<input type="text" class="form-control form-control-lg" placeholder="Alamat Email" required />
				</div>
				<div class="form-group m-b-20">
					<input type="password" class="form-control form-control-lg" placeholder="Kata Sandi" required />
				</div>
				<div class="checkbox checkbox-css m-b-20">
					<input type="checkbox" id="remember_checkbox" /> 
					<label for="remember_checkbox">
						Ingat Saya
					</label>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
				</div>
				<div class="m-t-20">
					Belum Mempunyai Akun? <a href=register>Registrasi</a>
				</div>
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
