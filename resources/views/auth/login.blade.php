@extends('layouts.auth')

@section('title', "Login")

@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Login') }}</div>--}}

    {{--                    <div class="card-body">--}}
    {{--                        <form method="POST" action="{{ route('login') }}">--}}
    {{--                            @csrf--}}

    {{--                            <div class="row mb-3">--}}
    {{--                                <label for="email"--}}
    {{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                        <input id="email" type="email"--}}
    {{--                                               class="form-control @error('email') is-invalid @enderror" name="email"--}}
    {{--                                               value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

    {{--                                        @error('email')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                                        @enderror--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row mb-3">--}}
    {{--                                <label for="password"--}}
    {{--                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

    {{--                                <div class="col-md-6">--}}
    {{--                                        <input id="password" type="password"--}}
    {{--                                               class="form-control @error('password') is-invalid @enderror" name="password"--}}
    {{--                                               required autocomplete="current-password">--}}

    {{--                                        @error('password')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                                        @enderror--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row mb-3">--}}
    {{--                                <div class="col-md-6 offset-md-4">--}}
    {{--                                    <div class="form-check">--}}
    {{--                                            <input class="form-check-input" type="checkbox" name="remember"--}}
    {{--                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

    {{--                                        <label class="form-check-label" for="remember">--}}
    {{--                                            {{ __('Remember Me') }}--}}
    {{--                                        </label>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="row mb-0">--}}
    {{--                                <div class="col-md-8 offset-md-4">--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        {{ __('Login') }}--}}
    {{--                                    </button>--}}

    {{--                                    @if (Route::has('password.request'))--}}
    {{--                                        <a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--                                            {{ __('Forgot Your Password?') }}--}}
    {{--                                        </a>--}}
    {{--                                    @endif--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                @include('auth.fragments.logo')

                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="Enter your email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <a href="{{ route('password.request') }}" class="text-muted float-end"><small>Forgot your
                                password?</small></a>

                        <label for="password" class="form-label">Password</label>

                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="current-password"
                               placeholder="Enter your password"
                        >

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"
                                   id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>
                    <div class="d-grid mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> {{ __('Login') }}
                        </button>
                    </div>
                </form>

                <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account?
                        <a href="{{ route('register') }}" class="text-muted ms-1">
                            <b>Sign Up</b>
                        </a>
                    </p>
                </footer>

            </div>
        </div>
    </div>


    @include('auth.fragments.right_content')

@endsection
