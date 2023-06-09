@extends('layouts.main')

@section('container')
    <main class="form-signin w-100 m-auto text-center">
        <form action="" method="post" class="mt-4">
            <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="Username" autofocus required>
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <p><a href="/register">Belum punya akun? Daftar</a></p>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
    </main>
@endsection
