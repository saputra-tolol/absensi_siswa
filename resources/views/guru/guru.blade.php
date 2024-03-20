@extends('layouts.main')
@push('styles')

@endpush
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
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Password</th>
            <th>Akses Kelas</th>
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
            <td>085345262</td>
            <td><span class="badge bg-label-primary me-1">hadir</span></td>
            <td>XII</td>
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
            {{-- <tr>
             <td>
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px" class="rounded-circle">
            </td>
            <td>adi bagus</td>
            <td>Laki-laki</td>
            <td>085345262</td>
            <td><span class="badge bg-label-danger me-1">alpha</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr> --}}
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->

  <hr>
 @endsection



