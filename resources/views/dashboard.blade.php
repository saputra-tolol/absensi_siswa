@extends('layouts.main')
@push('styles')

@endpush
@section('content')
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">rows</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Profil</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">L/P</th>
                        <th colspan="31" id="tanggalHeader">tanggal</th>
                        <th colspan="4">jumlah</th>

                    </tr>
                    <tr id="tableheader">
                    </tr>
                </thead>
                <script>
                    // Dapatkan tanggal sekarang
                    const now = new Date();

                    // Dapatkan jumlah hari dalam bulan ini
                    const totalDaysInMonth = new Date(now.getFullYear(), now.getMonth() + 1, 0).getDate();

                      // Ubah nilai atribut colspan pada elemen tanggal
                      const tanggalHeader = document.getElementById('tanggalHeader');
                    tanggalHeader.colSpan = totalDaysInMonth;

                    // Ambil elemen tabel header
                    const tableHeader = document.getElementById('tableheader');

                    // Tambahkan elemen-elemen th ke tabel header berdasarkan jumlah hari dalam bulan
                    for (let i = 1; i <= totalDaysInMonth; i++) {
                        const th = document.createElement('th');
                        th.textContent = i;
                        tableHeader.appendChild(th);
                    }

                     // Tambahkan elemen untuk H, T, S, A setelah elemen tanggal
                    const thH = document.createElement('th');
                    thH.textContent = 'H';
                    tableHeader.appendChild(thH);

                    const thT = document.createElement('th');
                    thT.textContent = 'T';
                    tableHeader.appendChild(thT);

                    const thS = document.createElement('th');
                    thS.textContent = 'S';
                    tableHeader.appendChild(thS);

                    const thA = document.createElement('th');
                    thA.textContent = 'A';
                    tableHeader.appendChild(thA);
                </script>

                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px"
                                class="rounded-circle">
                        </td>
                        <td>adi bagus saputra</td>
                        <td>L</td>
                        <td><span class="badge bg-label-primary me-1">H</span></td>
                        <td><span class="badge bg-label-primary me-1">H</span></td>
                        <td><span class="badge bg-label-primary me-1">H</span></td>
                        <td><span class="badge bg-label-primary me-1">H</span></td>
                        <td><span class="badge bg-label-primary me-1">H</span></td>
                        <td><span class="badge bg-label-primary me-1">H</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" style="width: 50px"
                                class="rounded-circle">
                        </td>
                        <td>adi bagus</td>
                        <td>L</td>
                        <td><span class="badge bg-label-danger me-1">A</span></td>
                        <td><span class="badge bg-label-danger me-1">A</span></td>
                        <td><span class="badge bg-label-danger me-1">A</span></td>
                        <td><span class="badge bg-label-danger me-1">A</span></td>
                        <td><span class="badge bg-label-danger me-1">A</span></td>
                        <td><span class="badge bg-label-danger me-1">A</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td>6</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< Updated upstream
  </div>
  <!--/ Hoverable Table rows -->

  <hr>
 @endsection


=======
    <!--/ Hoverable Table rows -->
    <hr>
@endsection
>>>>>>> Stashed changes
