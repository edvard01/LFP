@extends('layouts.app')

@section('content')
<div class="card w-25 mx-auto bg-white">
    <form method="POST" action="{{ route('register') }}" class="d-flex align-items-center flex-column my-5">
        @csrf
        <img src="{{ asset('images/wow-icon.png') }}" alt="Icon" class="mb-4" width="72" height="72">
        <h2>Register</h2>

        <div class="d-flex align-items-start flex-column mt-2">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex align-items-start flex-column mt-2">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror   
        </div>

        <div class="d-flex align-items-start flex-column mt-2">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex align-items-start flex-column mt-2">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
        </div>
        
        <button class="btn btn-lg btn-primary btn-block mt-4 px-5" type="submit">Register</button>
    </form>
    <p class="relative-bottom m-auto mb-3">Already have an account? <a href="/login">Click here to login!</a></p>
</div>
@endsection
