@extends('layouts.main')
@push('styles')
@endpush
@section('content')
    {{-- modal tambah data  guru --}}
    <!-- Button trigger modal -->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('guru_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            @error('nama')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                <option value=""></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="profil" class="form-label">Profil</label>
                            <input type="file" class="form-control" id="profil" name="profil">
                            @error('profil')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                            @error('password')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                            <select class="form-select" name="kelas_id" aria-label="Default select example">
                                <option value="" disabled selected>Pilih kelas</option>
                                @foreach ($kelas as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Data Guru</h5>
        <div class="table-responsive text-nowrap">
            <button type="button" class="btn btn-primary mb-3 mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Guru
            </button>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Profil</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Akses Kelas</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($guru as $gurus)
<<<<<<< Updated upstream
                    <tr>
                        <td>
                            <img src="{{ asset('storage/images/' . $gurus->profil) }}" alt="Avatar" style="width: 50px"
                                class="rounded-circle">
                        </td>
                        <td>{{ $gurus->nama}}</td>
                        <td>{{ $gurus->jenis_kelamin}}</td>
                        <td>{{ $gurus->email}}</td>
                        <td>{{ $gurus->password}}</td>
                        <td></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                        Delete</a>
=======
                        <tr>
                            <td>
                                <img src="{{ asset('storage/images/' . $gurus->profil) }}" alt="Avatar"
                                    style="width: 50px" class="rounded-circle">
                            </td>
                            <td>{{ $gurus->nama }}</td>
                            <td>{{ $gurus->jenis_kelamin }}</td>
                            <td>{{ $gurus->email }}</td>
                            <td>{{ $gurus->password }}</td>
                            <td>{{ $gurus->kelas->nama_kelas}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="ti ti-pencil me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>
                                            Delete</a>
                                    </div>
>>>>>>> Stashed changes
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->

    <hr>
@endsection
