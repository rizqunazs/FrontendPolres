@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'SPMB')

@section('content')
<!-- begin login -->
<div class="login login-with-news-feed">
    <!-- begin news-feed -->
    <div class="news-feed">
        <div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-11.jpg)"></div>
        <div class="news-caption">
            <h4 class="caption-title"><b>S</b>PMB</h4>
            <p>
                Sistem Pendaftaran Mahasiswa Baru
            </p>
        </div>
    </div>
    <!-- end news-feed -->
    <!-- begin right-content -->
    <div class="right-content">
        <!-- begin login-header -->
        <div class="login-header mx-auto">
            <a href="#"><img src="{{asset('assets/img/login-bg/logo.png')}}" width="100"></a>
        </div>
        <!-- end login-header -->
        <!-- begin login-content -->
        <div class="login-content">
            <form action="{{ request()->routeIs('admin*') ? route('admin.register') : route('register') }}" method="POST" class="margin-bottom-0">
                @csrf

                <div class="form-group m-b-15">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group m-b-15">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group m-b-15">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group m-b-15">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                </div>

                <div class="register-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Register') }}</button>
                </div>
                <p>
                    <br />
                    Sudah punya akun? <a href="{{route('login')}}">Masuk</a>
                </p>
                <hr />
                <p class="text-center text-grey-darker">
                    &copy; <?= date('Y') ?> Mandiri Solusindo </p>
            </form>
        </div>
        <!-- end login-content -->
    </div>
    <!-- end right-container -->
</div>
<!-- end login -->
@endsection