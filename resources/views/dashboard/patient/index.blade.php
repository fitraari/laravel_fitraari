@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="border-bottom pb-3">Data {{ $title }}</h3>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                    <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="d-flex gap-3 mt-4 mb-3">
                <a href="/dashboard/patient/create" class="btn btn-primary"><i class="bi bi-plus"></i>Tambah
                    Data</a>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Filter
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard/patient">All</a></li>
                        @foreach ($hospitals as $hospital)
                            <li><a class="dropdown-item"
                                    href="/dashboard/hospital/{{ $hospital->id }}">{{ $hospital->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <form action="/dashboard/patient">
                <div class="input-group mb-3 w-50">
                    <input type="text" class="form-control" name="search" placeholder="Cari Pasien.." autocomplete="off"
                        autofocus>
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
                            <th scope="col">Telepon</th>
                            <th scope="col">Rumah Sakit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($patients->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">Data tidak ditemukan</td>
                            </tr>
                        @else
                            @foreach ($patients as $patient)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $patient->nama }}</td>
                                    <td>{{ $patient->alamat }}</td>
                                    <td>{{ $patient->telepon }}</td>
                                    <td>{{ $patient->hospital->nama ?? '-' }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="/dashboard/patient/{{ $patient->id }}/edit"
                                            class="btn btn-outline-primary btn-sm p-1"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="/dashboard/patient/{{ $patient->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm p-1"
                                                onclick="return confirm('Yakin ingin menghapus pasien {{ $patient->nama }}')"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $patients->links() }}
        </div>
    </main>
@endsection
