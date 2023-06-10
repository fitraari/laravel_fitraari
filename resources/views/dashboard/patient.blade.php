@extends('dashboard.index')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="border-bottom pb-3">Data Pasien</h3>

            <div class="d-flex gap-3 mt-4 mb-3">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                        class="bi bi-plus"></i>Tambah Data</button>
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
                                    <td>{{ $patient->hospital->nama }}</td>
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
            {{-- {{ $patients->links() }} --}}
        </div>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Pasien</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
