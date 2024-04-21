@extends('layouts.main')
@push('styles')
    <style>
        th {
            background-color: red;
            /* warna default */
        }
    </style>
@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Kelas: </h5>
            <h5 class="card-text">Wali Kelas: {{ $tahunIni }}</h5>
            <h5 class="card-text">Bulan: {{ $bulanIni }} </h5>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Profil</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">L/P</th>
                        <th colspan="{{ $totalDaysInMonth }}">tanggaL</th>
                        <th colspan="4">jumlah</th>

                    </tr>
                    <tr id="tableheader">
                        @for ($day = 1; $day <= $totalDaysInMonth; $day++)
                            @php
                                $date = Carbon\Carbon::create($tahunIni, $now->month, $day);
                            @endphp
                            <th @if ($date->dayOfWeek == Carbon\Carbon::SUNDAY) style="background-color: red;" @endif>
                                {{-- masih dalam tahap pengembangan --}}
                                <a href="{{ route('add_absensi', ['kelas_id' => $kelas->id]) }}">
                                    {{ $day }}
                                </a>
                            </th>
                        @endfor
                        <th>H</th>
                        <th>T</th>
                        <th>S</th>
                        <th>A</th>
                    </tr>
                </thead>

                <tbody class="table-border-bottom-0">
                    @foreach ($siswas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" style="width: 50px"
                                    class="rounded-circle">
                            </td>
                            <td>{{ $item->nama_siswa }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            @for ($day = 1; $day <= $totalDaysInMonth; $day++)
                                <td>
                                    @php
                                        // Ambil absensi siswa pada tanggal dan kelas tertentu
                                        $absensi = $item
                                            ->absensi()
                                            ->where('tanggal', Carbon\Carbon::create($tahunIni, $now->month, $day))
                                            ->first();
                                        $keteranganSymbols = [
                                            'Sakit' => 'S',
                                            'Alpha' => 'A',
                                            'Izin' => 'I',
                                            'Hadir' => 'H',
                                            'Telat' => 'T',
                                        ];
                                    @endphp
                                    @if ($absensi)
                                        {{ $keteranganSymbols[$absensi->keterangan] ?? '' }}
                                    @else
                                        -
                                    @endif
                                </td>
                            @endfor
                            <td>{{ $item->absensi()->where('keterangan', 'Hadir')->count() }}</td>
                            <td>{{ $item->absensi()->where('keterangan', 'Telat')->count() }}</td>
                            <td>{{ $item->absensi()->where('keterangan', 'Sakit')->count() }}</td>
                            <td>{{ $item->absensi()->where('keterangan', 'Izin')->count() }}</td>
                            <td>{{ $item->absensi()->where('keterangan', 'Alpa')->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <hr>
@endsection
