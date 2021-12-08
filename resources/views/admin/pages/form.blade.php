@extends('admin.pages.master')
@section('content')

<div class="container" id="container">
    <div class="form-container sign-up-container">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif
       
        <form action="/data" method="post">
            @csrf
            <h1>Create Account</h1>
            <span>or use your email for registration</span>
            <input type="text" placeholder="name" name="name">
            <input type="email" placeholder="email" name="email">
            <input type="password" placeholder="password" name="password">
            <button>Sign Up</button>
        

        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="/log" method="post">
            @csrf
            <h1>Sign in</h1>
            @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
        </div>
        @endif
            <span>or use your account</span>
            <input type="email" placeholder="email" name="email">
            <input type="password" placeholder="password" name="password">
            <button type="submit">Sign In</button>
            <a href = "forget-password">Forgotten password</a>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
@endsection