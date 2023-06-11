@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="border-bottom pb-3">Data {{ $title }}</h3>

            @if (session()->has('deleteSuccess'))
                <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                    <i class="bi bi-check-circle-fill"></i> {{ session('deleteSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <a href="/dashboard/hospital/create" class="btn btn-primary mt-3 mb-3"><i class="bi bi-plus"></i>Tambah Data</a>

            <form action="/dashboard/hospital">
                <div class="input-group mb-3 w-50">
                    <input type="text" class="form-control" name="search" placeholder="Cari Rumah Sakit.."
                        autocomplete="off" autofocus>
                    <button class="btn btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <div class="table-responsive col-lg-8 mb-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($hospitals->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @else
                            @foreach ($hospitals as $hospital)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $hospital->nama }}</td>
                                    <td>{{ $hospital->alamat }}</td>
                                    <td>{{ $hospital->email }}</td>
                                    <td>{{ $hospital->telepon }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="/dashboard/hospital/{{ $hospital->id }}/edit"
                                            class="btn btn-outline-primary btn-sm p-1"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="/dashboard/hospital/{{ $hospital->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm p-1"
                                                onclick="return confirm('Yakin ingin menghapus rumah sakit {{ $hospital->nama }}')"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $hospitals->links() }}
        </div>
    </main>
@endsection
