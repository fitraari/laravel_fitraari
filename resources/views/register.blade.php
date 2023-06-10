@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center pt-4">
            <div class="col-md-4">
                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
                    <form action="/register" method="post">
                        @csrf

                        <div class="form-floating">
                            <input type="text"
                                class="form-control border border-0 border-bottom rounded-top @error('username') is-invalid @enderror"
                                id="username" name="username" placeholder="Username" value="{{ old('username') }}"
                                autofocus required>
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password"
                                class="form-control border border-0 border-bottom rounded-bottom @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
                    </form>
                    <small class="d-block mt-3 text-center">Sudah punya akun? <a href="/login">Login</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection
