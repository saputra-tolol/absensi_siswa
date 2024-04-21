@extends('layouts.main')

@section('content')
<a href="{{route('kelas')}}" class="btn btn-secondary mb-2">kembali</a>
         <!-- Hoverable Table rows -->
         <div class="card mb-2">
             <div class="card-body">
                 <h5 class="card-title">Detail Kelas: {{$kelas->nama_kelas}} </h5>
                 <p class="card-text">Jurusan: {{$kelas->jurusan}}</p>
                 <p class="card-text">Wali Kelas: </p>
             </div>
         </div>
    <div class="card">
        <h5 class="card-header">Daftar Siswa</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telfon</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $data->profile) }}" alt="Avatar" style="width: 50px"
                                class="rounded-circle">
                        </td>
                        <td>{{ $data->nama_siswa}}</td>
                        <td>{{ $data->jenis_kelamin}}</td>
                        <td>{{ $data->alamat}}</td>
                        <td>{{ $data->no_telfone}}</td>
                        <td></td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
@endsection
