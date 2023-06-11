@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center pt-4">
            <div class="col-md-3">
                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill"></i> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf

                        <div class="form-floating">
                            <input type="text" class="form-control border border-0 border-bottom rounded-top"
                                id="username" name="username" placeholder="Username" value="{{ old('username') }}"
                                autofocus required>
                            <label for="username">Username</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control border border-0 border-bottom rounded-bottom"
                                id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>

                        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    </form>
                    <small class="d-block mt-3 text-center">Belum punya akun? <a href="/register">Daftar</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection
