@extends('layouts.main')
@push('styles')
    <style>
        .tanggal input {
            margin-right: 80%;
        }

        .tanggal {
            display: flex;
            align-items: center;
        }

        .tanggal>* {
            margin-right: 30px;
            /* Memberikan jarak antara setiap elemen */
        }
    </style>
@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <!-- Formulir untuk menyimpan data absensi -->
    <form action="{{ route('absensi_store') }}" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Kelas: {{ $kelas->nama_kelas }}</h5>
                <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                <h5 class="card-text">Wali Kelas: </h5>
                <h5 class="tanggal d-flex align-items-center">
                    <span class="flex-grow-1 mx-1">Tanggal</span>
                    <span class="mx-1">:</span>
                    <input type="date" class="form-control" name="tanggal" style="width: 168px">
                </h5>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                @if ($siswa->isNotEmpty())
                    <table class="table table-hover table-bordered mt-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profile</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($siswa as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar"
                                            style="width: 50px" class="rounded-circle">
                                    </td>
                                    <td>
                                        <input type="hidden" name="siswa_id[]" value="{{ $item->id }}">
                                        {{ $item->nama_siswa }}
                                    </td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>
                                        <div class="mb-3">
                                            {{-- <input type="hidden" name="siswa_id[]" value="{{ $item->id }}"> --}}
                                            <!-- Ubah menjadi array siswa_id[] -->
                                            <select class="form-select" name="keterangan[]">
                                                <!-- Ubah nama input menjadi array keterangan[] -->
                                                <option value="">pilih keterangan</option>
                                                <option value="Sakit">sakit</option>
                                                <option value="Izin">izin</option>
                                                <option value="Alpha">alpha</option>
                                                <option value="Telat">telat</option>
                                                <option value="Hadir">hadir</option>
                                            </select>
                                        </div>
                                        @error('keterangan')
                                            <small style="color: red">{{ $message }}</small>
                                        @enderror
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Tidak ada siswa dalam kelas ini.</p>
                @endif
            </div>
        </div>
        <hr>
        <!-- Tombol submit -->
        <button type="submit" class="btn btn-success mt-2 mb-2" style="margin-left: 10px">Simpan</button>
    </form>


    {{-- <form action="{{ route('add_absensi') }}" method="POST">
        @csrf <!-- Menambahkan token CSRF untuk keamanan -->
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select name="kelas_id" id="kelas" class="form-control">
                <option value="">Pilih Kelas</option>
                <!-- Looping untuk menampilkan pilihan kelas dari variabel $kelass -->
                @foreach ($kelass as $kelas)
                    <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            <!-- Input untuk memasukkan tanggal absensi -->
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <!-- Looping untuk menampilkan daftar siswa dari variabel $siswas -->
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->nama }}</td> <!-- Menampilkan nama siswa -->
                        <td>
                            <select name="keterangan[]" class="form-control" required>
                                <option value="">Pilih Keterangan</option>
                                <!-- Menampilkan pilihan keterangan absensi -->
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                                <option value="Alpha">Alpha</option>
                            </select>
                            <input type="hidden" name="siswa_ids[]" value="{{ $siswa->id }}">
                            <!-- Menyimpan ID siswa sebagai nilai tersembunyi -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <!-- Tombol untuk menyimpan data absensi -->
    </form> --}}
@endsection
@push('script')
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        // Pastikan SweetAlert telah dimuat sebelum memanggilnya
        $(document).ready(function() {
            // Cek jika ada pesan flash dalam session
            @if (session('success'))
                Swal.fire(
                    'Sukses!',
                    '{{ session('success') }}',
                    'success'
                );
            @endif

            @if (session('error'))
                Swal.fire(
                    'Error!',
                    '{{ session('error') }}',
                    'error'
                );
            @endif
        });
    </script>
@endpush
