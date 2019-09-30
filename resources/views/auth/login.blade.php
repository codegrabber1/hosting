@extends('hosting.admin.layouts.app')

@section('content')
    <form class="card auth_form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="header">
            <img class="logo" src="{{ env('THEME') }}/admin/assets/images/logo.svg" alt="logo">
            <h5>Log in</h5>
        </div>
        <div class="body">
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password" placeholder="Password">
                    <div class="input-group-append">
                        @if (Route::has('password.request'))
                        <span class="input-group-text"><a href="{{ route('password.request') }}" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                        @endif
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="checkbox">
                    <input id="remember_me" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember_me">{{ __('Remember Me') }}</label>
                </div>
                <button type="submit" name='signIn' class="btn btn-primary btn-block waves-effect waves-light">
                    {{ __('Login') }}
                </button>
                <div class="signin_with mt-3">
                    <p class="mb-0">or Sign Up using</p>
                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round facebook"><i class="zmdi zmdi-facebook"></i></button>
                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round twitter"><i class="zmdi zmdi-twitter"></i></button>
                    <button class="btn btn-primary btn-icon btn-icon-mini btn-round google"><i class="zmdi zmdi-google-plus"></i></button>
            </div>
        </div>
    </form>
@endsection
