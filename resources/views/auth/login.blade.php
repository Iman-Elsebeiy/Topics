@extends('layouts.app')

@section('content')
<div class="container my-5 bg-white rounded-3">
    <div class="row">
        <!-- Left side with image (50% width) -->
        <div class="col-md-5 d-none d-md-block img-wrapper">
            <img src="{{ asset('admin/assets/images/rear-view-young-college-student.jpg') }}" alt="Registration Image" class="img-fluid h-100 w-100" style="object-fit: cover;">
        </div>

        <!-- Right side with form (50% width) -->
        <div class="col-md-7 d-flex align-items-center">
            <form method="POST" action="{{ route('login') }}" class="text-center w-100 px-3">
                @csrf

                <h3 class="fw-semibold mb-5">LOGIN FORM</h3>

                <!-- Email -->
                <div class="input-group mb-3">
                    <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                    <img src="{{ asset('admin/assets/images/user-svgrepo-com.svg') }}" alt="" class="input-group-text">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="input-group mb-3">
                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    <img src="{{ asset('admin/assets/images/password-svgrepo-com.svg') }}" alt="" class="input-group-text">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="mb-3 text-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-dark px-5 mb-2">
                    LOGIN
                    <img src="{{ asset('admin/assets/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
                </button>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                <!-- New User Link -->
                <a href="{{ route('register') }}" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
            </form>
        </div>
    </div>
</div>
@endsection
