@extends('layouts.main')
@push('styles')

@endpush
@section('content')

  <!-- Hoverable Table rows -->
  <div class="card">
    <h5 class="card-header">Hoverable rows</h5>
    <div class="table-responsive text-nowrap">
        <button class="btn btn-success" style="margin-left:20px;margin-bottom:10px">Simpan</button>
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Profil</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Keterangan</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <tr>
             <td>
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px" class="rounded-circle">
            </td>
            <td>adi bagus saputra</td>
            <td>Laki-laki</td>
            <td><select class="form-select" aria-label="Default select example">
                <option selected>Pilih keterangan kehadiran</option>
                <option value="1">Hadir</option>
                <option value="2">Alpha</option>
                <option value="3">Sakit</option>
                <option value="3">Izin</option>
              </select></td>
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
            <tr>
             <td>
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px" class="rounded-circle">
            </td>
            <td>adi bagus</td>
            <td>Laki-laki</td>
            <td><select class="form-select" aria-label="Default select example">
                <option selected>Pilih keterangan kehadiran</option>
                <option value="1">Hadir</option>
                <option value="2">Alpha</option>
                <option value="3">Sakit</option>
                <option value="3">Izin</option>
              </select></td>
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
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->

  <hr>
 @endsection



