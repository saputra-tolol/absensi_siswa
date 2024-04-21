@extends('layouts.main')
@push('styles')
    <style>
        .card-header input {
            margin-right: 70%;
        }
        .card-header {
    display: flex;
    align-items: center;
}

.card-header > * {
    margin-right: 30px; /* Memberikan jarak antara setiap elemen */
}

.card-header select {
     /* Membuat dropdown memenuhi sisa ruang yang tersedia */
}
    </style>
@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header d-flex align-items-center">
            <span class="flex-grow-1 mx-1">Bulan</span>
            <span class="mx-1">:</span>
            <input type="text" class="form-control" style="width: 168px" value="{{ $bulanIni }}" disabled>
            <!-- Dropdown untuk memilih kelas -->
            <select id="kelasFilter" class="form-select mb-3">
                <option value="">Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $selectedKelasId == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </h5>

        <div class="table-responsive text-nowrap">

            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Profil</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">L/P</th>
                        <th colspan="{{ $totalDaysInMonth }}">tanggal</th>
                        <th colspan="5">jumlah</th>

                    </tr>
                    <tr>
                        @for ($day = 1; $day <= $totalDaysInMonth; $day++)
                            @php
                                $date = Carbon\Carbon::create($tahunIni, $now->month, $day);
                            @endphp
                            <th @if ($date->dayOfWeek == Carbon\Carbon::SUNDAY) style="background-color: red;" @endif>
                                {{ $day }}
                            </th>
                        @endfor
                        <th>H</th>
                        <th>T</th>
                        <th>S</th>
                        <th>I</th>
                        <th>A</th>
                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px"
                                    class="rounded-circle">
                            </td>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            @for ($day = 1; $day <= $totalDaysInMonth; $day++)
                                <td>
                                    @php
                                        // Ambil tanggal dalam format YYYY-MM-DD
                                        $tanggal = $tahunIni . '-' . $now->month . '-' . $day;
                                        // Ambil absensi siswa pada tanggal yang sesuai
                                        $absensi = $siswa->absensi()->where('tanggal', $tanggal)->first();
                                    @endphp
                                    @if ($absensi)
                                        {{ $absensi->keterangan }}
                                    @else
                                        {{-- Jika tidak ada absensi pada tanggal tersebut --}}
                                        ?
                                    @endif
                                </td>
                            @endfor

                            <td>{{ $siswa->absensi()->where('keterangan', 'Hadir')->count() }}</td>
                            <td>{{ $siswa->absensi()->where('keterangan', 'Telat')->count() }}</td>
                            <td>{{ $siswa->absensi()->where('keterangan', 'Sakit')->count() }}</td>
                            <td>{{ $siswa->absensi()->where('keterangan', 'Izin')->count() }}</td>
                            <td>{{ $siswa->absensi()->where('keterangan', 'Alpa')->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
@endsection
@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // Menggunakan jQuery untuk menangani perubahan pada dropdown kelas
        $(document).ready(function() {
            $('#kelasFilter').change(function() {
                var kelasId = $(this).val(); // Ambil nilai ID kelas yang dipilih

                // Redirect ke halaman yang sama dengan parameter kelas_id
                window.location.href = "{{ route('dashboard') }}" + "?kelas_id=" + kelasId;
            });
        });
    </script>
@endpush
