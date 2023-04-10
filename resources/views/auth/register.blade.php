@extends('layouts.auth')

@section('title', __('Register'))

@section('content')

    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                @include('auth.fragments.logo')

                <h4 class="mt-0">Free Sign Up</h4>
                <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="surename" class="form-label">Surename</label>
                        <input value="{{ old('surename') }}"
                               class="form-control @error('surename') is-invalid @enderror" type="text" name="surename"
                               id="surename" placeholder="Enter your surename" required>

                        @error('surename')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" value="{{ old('name') }}"
                               class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                               placeholder="Enter your name" required>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input name="email" value="{{ old('email') }}"
                               class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress"
                               required placeholder="Enter your email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input name="phone" value="{{ old('phone') }}"
                               class="form-control @error('phone') is-invalid @enderror" type="text" id="phone"
                               placeholder="Enter your phone" required>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" class="form-control @error('password') is-invalid @enderror"
                               type="password" required id="password" placeholder="Enter your password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Enter confirm password" name="password_confirmation" required
                               autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>


                    {{--                    <div class="mb-3">--}}
                    {{--                        <div class="form-check">--}}
                    {{--                            <input type="checkbox" class="form-check-input" id="checkbox-signup">--}}
                    {{--                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}


                    <div class="mb-0 d-grid text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Sign Up
                        </button>
                    </div>


                </form>

                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="{{ route("login") }}"
                                                                   class="text-muted ms-1"><b>Log In</b></a></p>
                </footer>

            </div>
        </div>
    </div>

    @include('auth.fragments.right_content')

@endsection
