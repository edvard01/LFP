@extends('layouts.app')

@section('content')
<div class="card w-25 mx-auto bg-white">
    <form method="POST" action="{{ route('login') }}" class="d-flex align-items-center flex-column my-5">
        @csrf
        <img src="{{ asset('images/wow-icon.png') }}" alt="Icon" class="mb-4" width="72" height="72">
        <h2>Please sign in</h2>
        
        <div class="d-flex align-items-start flex-column mt-2">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>

        <div class="d-flex align-items-start flex-column mt-2">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <button class="btn btn-lg btn-primary btn-block mt-4 px-5" type="submit">Sign in</button>
    </form>
    <p class="relative-bottom m-auto mb-3">Don't have an account? <a href="/register">Click here to sign up!</a></p>
</div>
@endsection
