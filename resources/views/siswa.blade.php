@extends('layouts.main')
@push('styles')
@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Hoverable rows</h5>
        <div class="table-responsive text-nowrap">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('siswa_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Profile</label>
                                    <input type="file" name="profile" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control"
                                        id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                           lanang
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            wedok
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">No. telfon</label>
                                    <input type="number" name="no_telfone" class="form-control"
                                        id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                    <select class="form-select" name="kelas_id" aria-label="Default select example">
                                        <option value="" disabled selected>Pilih kelas</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telfon</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>
                            <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px"
                                class="rounded-circle">
                        </td>
                        <td>Romy pratama</td>
                        <td>Laki-laki</td>
                        <td>085345262</td>
                        <td><span class="badge bg-label-primary me-1">hadir</span></td>
                        <td>XII</td>
                        <td>RPL</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->

    <hr>
@endsection
