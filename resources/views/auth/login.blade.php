@extends('layouts.app')

@section('content')
<div class="container">
    <div class="welcome-panel">
        <img src="{{ asset('images/Logo2.png') }}" alt="Welcome" class="welcome-img">
        <h1>Welcome Back!</h1>
        <p>Login to your Skillzy account</p>
        <p style="margin-top: 10px; font-size: 14px;">Don't have an account?</p>
        <a href="{{ route('register') }}" class="ghost">Register</a>
    </div>

    <div class="form-container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1>

            @if(session('error'))
                <div class="error-message">
                    Login Failed: {{ session('error') }}
                </div>
            @endif

            <input type="email" name="email" required placeholder="Email" value="{{ old('email') }}">

            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="toggle-password" onclick="togglePassword()">👀</span>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById("password");
        passwordField.type = passwordField.type === "password" ? "text" : "password";
    }
</script>
@endsection
