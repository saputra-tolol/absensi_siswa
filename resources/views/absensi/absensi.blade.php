@extends('layouts.main')
@push('styles')
@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Kelola absensi</h5>
        <div class="table-responsive text-nowrap">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Wali Kelas</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($kelas as $data)
                    <tr>
                       <td>{{$loop->iteration}}</td>
                        <td>{{$data->nama_kelas}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td>{{$data->wali_kelas}}</td>
                        <td>
                            <a href="{{route('view_absensi', ['kelas_id' => $data->id])}}" class="btn btn-success">kelola</a>
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
