@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="container mt-5">
    <h2>Register</h2>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Registration Form -->
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <!-- Name Field -->
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <!-- Email Field -->
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <!-- Password Field -->
        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <!-- Password Confirmation Field -->
        <div class="form-group mb-3">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-secondary mt-3">Register</button>
    </form>

    <!-- Login Link -->
    <div class="mt-3">
        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
    </div>
</div>

@endsection
