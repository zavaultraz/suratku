@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
                <!-- Background Image -->
                <div class="img" style="background-image: url(auth/assets/images/bg-1.jpg);"></div>

                <!-- Login Form -->
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                    </div>

                    <form action="{{ route('login') }}" method="POST" class="signin-form">
                        @csrf
                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <label class="label" for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <!-- Menampilkan error jika ada masalah dengan email -->
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                            <!-- Menampilkan error jika ada masalah dengan password -->
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                    <input type="checkbox" name="remember" value="true" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                        </div>

                    </form>

                    <!-- Pendaftaran Link -->
                    <p class="text-center">Not a member? <a href="{{ route('register') }}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
