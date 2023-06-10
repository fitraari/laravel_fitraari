@extends('dashboard.index')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="border-bottom pb-3">Data Pasien di {{ $title }}</h3>

            <div class="d-flex gap-3 mt-4 mb-3">
                <a href="/dashboard/patient/create" class="btn btn-success"><i class="bi bi-plus"></i>Tambah
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

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
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
                                    <td>
                                        <a href="#"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#"><i class="bi bi-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
