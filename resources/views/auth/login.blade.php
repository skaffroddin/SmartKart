@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <h2>Login</h2>

    <!-- Display Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <!-- Social Login Buttons -->
    <div class="mt-4">
        <a href="{{ url('login/google') }}" class="btn btn-danger">Login with Google</a>
        <a href="{{ url('login/facebook') }}" class="btn btn-primary">Login with Facebook</a>
        <a href="{{ url('login/github') }}" class="btn btn-dark">Login with GitHub</a>
    </div>

    <div class="mt-3">
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>

@endsection
