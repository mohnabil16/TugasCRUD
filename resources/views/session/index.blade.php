@extends('layout.tamplate')

@section('content')
{{-- <form action="/session/login" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" value="{{Session::get('email')}}" class="form-control" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <p>
        Belum punya akun?
        <a href="session/register">silakan mendaftar.</a>
    </p>
    <button type="submit" class="btn btn-primary">Login</button>
</form> --}}

<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <form action="/session/login" method="POST">
        @csrf
        <!-- Email input -->
        <div class="form-outline mb-2">
            <input type="email" id="form3Example3" class="form-control @error('email') is-invalid @enderror"
                placeholder="Enter a valid email address" name="email" />
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password input -->
        <div class="form-outline mb-2">
            <input type="password" id="form3Example4"
                class="form-control @error('password') is-invalid @enderror" placeholder="Enter password"
                name="password" />
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="text-center text-lg-start pt-2 btn-sm">
            <button type="submit" class="btn btn-primary "
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="session/register"
                    class="link-danger">Register</a></p>
        </div>

    </form>
</div>
@endsection
