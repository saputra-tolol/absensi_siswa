@extends('layouts.main')
@push('styles')
@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">absensi bulan</h5>
        {{-- <input type="text" class="form-control" value="Maret" disabled> --}}
        <div class="table-responsive text-nowrap">


            <!-- Button trigger modal -->
            <button type="button" style="margin-left: 20px;margin-bottom: 20px" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah kelas
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('kelas_store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal tambah</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">nama kelas</label>
                                    <input type="text" name="nama_kelas" class="form-control"
                                        id="exampleFormControlInput1" placeholder="nama kelas">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="exampleFormControlInput1"
                                        placeholder="jurusan">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">wali kelas</label>
                                    <input type="text" name="wali_kelas" class="form-control"
                                        id="exampleFormControlInput1" placeholder="wali kelas">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>nama kelas</th>
                        <th>jurusan</th>
                        <th>wali kelas</th>
                        <th>action</th>

                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    @foreach ($kelas as $gito)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $gito->nama_kelas }}</td>
                            <td>{{ $gito->jurusan }}</td>
                            <td>{{ $gito->wali_kelas }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" type="submit" href="{{route('detail_kelas' , $gito->id)}}"><i
                                                class="ti ti-list me-1"></i>
                                            detail</a>
                                        <button class="dropdown-item" type="submit" data-bs-toggle="modal"
                                            data-bs-target="#edit_kelas{{ $gito->id }}"><i
                                                class="ti ti-pencil me-1"></i>
                                            Edit</button>
                                        <button class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#hapus_kelas{{ $gito->id }}"><i
                                                class="ti ti-trash me-1"></i>
                                            Delete</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- modal buat edit --}}
                        <div class="modal fade" id="edit_kelas{{ $gito->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('kelas_update', $gito->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">modal edit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">nama kelas</label>
                                                <input type="text" name="nama_kelas" class="form-control"
                                                    id="exampleFormControlInput1" value="{{ $gito->nama_kelas }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">jurusan</label>
                                                <input type="text" name="jurusan" class="form-control"
                                                    id="exampleFormControlInput1" value="{{ $gito->jurusan }}"">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">wali
                                                    kelas</label>
                                                <input type="text" name="wali_kelas" class="form-control"
                                                    id="exampleFormControlInput1" placeholder="wali kelas">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>



                        {{-- modal buat hapus --}}
                        <div class="modal fade" id="hapus_kelas{{ $gito->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('hapus_kelas', $gito->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">modal hapus</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <p>Anda yakin ingin menghapus data ini?</p>
                                            <p>Nama Kelas: {{ $gito->nama_kelas }}</p>
                                            <p>Jurusan: {{ $gito->jurusan }}</p>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    @if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    @if (session('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            Swal.fire({
                title: 'Oops...',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

@endsection
