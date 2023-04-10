@extends('layouts.auth')

@section('content')

<div class="auth-fluid-form-box">

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="align-items-center d-flex h-100">
        <div class="card-body">


            @include('auth.fragments.logo')

            <h4 class="mt-0">Reset Password</h4>
            <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">

                    <label for="emailaddress" class="form-label">Email address</label>
                    <input id="emailaddress" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ $email ?? old('email') }}"
                           placeholder="Enter your email"
                           required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-0 text-center d-grid">
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-lock-reset"></i> {{ __('Send Password Reset Link') }}</button>
                </div>
            </form>

            <footer class="footer footer-alt">
                <p class="text-muted">Back to <a href="{{ route("login") }}" class="text-muted ms-1"><b>Log In</b></a></p>
            </footer>

        </div>
    </div>

</div>


    @include('auth.fragments.right_content')


@endsection
