@extends('dashboard.index')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <h3 class="border-bottom pb-3">Data Rumah Sakit</h3>

            <button type="button" class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                    class="bi bi-plus"></i>Tambah Data</button>

            <form action="/dashboard/hospital">
                <div class="input-group mb-3 w-50">
                    <input type="text" class="form-control" name="search" placeholder="Cari Rumah Sakit.."
                        autocomplete="off" autofocus>
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
            {{ $hospitals->links() }}
        </div>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data Rumah Sakit</h1>
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
