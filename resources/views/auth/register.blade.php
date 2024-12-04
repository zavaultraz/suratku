@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <!-- Background Image -->
                <div class="img" style="background-image: url(auth/assets/images/bg-1.jpg);"></div>

                <!-- Register Form -->
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Create an Account</h3>
                            <p class="text-left small">Enter your personal details to create an account.</p>
                        </div>
                    </div>

                    <form action="{{ route('register') }}" method="POST" class="signin-form">
                        @csrf

                        <!-- Username -->
                        <div class="form-group mb-3">
                            <label class="label" for="name">Username</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label class="label" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mb-3">
                            <label class="label" for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
                            @error('password_confirmation')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="form-group mb-3">
                            <label class="checkbox-wrap checkbox-primary mb-0">
                                <input type="checkbox" name="terms" value="true" id="acceptTerms" {{ old('terms') ? 'checked' : '' }} required>
                                I agree and accept the <a href="#">terms and conditions</a>
                                <span class="checkmark"></span>
                            </label>
                            @error('terms')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Create Account</button>
                        </div>

                        <!-- Login Link -->
                        <p class="text-center">Already have an account? <a href="{{ route('login') }}">Log in</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
