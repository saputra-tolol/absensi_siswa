@extends('layouts.main')
@section('content')

  <!-- Hoverable Table rows -->
  <div class="card">
    <h5 class="card-header">Hoverable rows</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Profil</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telefone</th>
            <th>Keterangan</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($siswa as $item)
            <tr>
             <td>
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px" class="rounded-circle">
            </td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->no_hp}}</td>
            <td><span class="badge bg-label-primary me-1">Active</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Delete</a>
                </div>
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

