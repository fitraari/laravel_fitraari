@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="row justify-content-center pt-4">
            <div class="col-md-3">
                <main class="form-signin">
                    <form action="" method="post">
                        <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" id="username" placeholder="Username"
                                autofocus required>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password"
                                required>
                            <label for="password">Password</label>
                        </div>

                        <small class="d-block mb-3">Belum punya akun? <a href="/register">Daftar</a></small>

                        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
@endsection
