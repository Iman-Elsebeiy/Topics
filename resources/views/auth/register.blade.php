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
            <form method="POST" action="{{ route('register') }}" class="text-center w-100 px-3 d-flex flex-column justify-content-center">
                @csrf

                <h3 class="fw-semibold mb-5">REGISTRATION FORM</h3>

                <!-- First Name and Last Name -->
                <div class="form-group d-flex mb-3">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control me-2 @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" required>
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" required>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Username -->
                <div class="input-group mb-3">
                    <input type="text" name="user_name" placeholder="Username" class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name') }}" required>
                    <img src="{{ asset('admin/assets/images/user-svgrepo-com.svg') }}" alt="" class="input-group-text">
                    
                    @error('user_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="input-group mb-3">
                    <input type="email" name="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    <img src="{{ asset('admin/assets/images/email-svgrepo-com.svg') }}" alt="" class="input-group-text">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>
                    <img src="{{ asset('admin/assets/images/password-svgrepo-com.svg') }}" alt="" class="input-group-text">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="input-group mb-5">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control" required>
                    <img src="{{ asset('admin/assets/images/password-svgrepo-com.svg') }}" alt="" class="input-group-text">
                </div>

                <!-- Register Button -->
                <button type="submit" class="btn btn-dark px-5 mb-2">
                    REGISTER
                    <img src="{{ asset('admin/assets/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
                </button>

                <!-- Login Link -->
                <a href="{{ route('login') }}" class="fw-bold fs-6 text-decoration-none text-dark mt-3">
                    Already have an account?
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
