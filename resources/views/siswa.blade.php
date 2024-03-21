@extends('layouts.main')
@section('content')
    <h1>Data Siswa</h1>

    <!-- Form Tambah Siswa -->
    <h2>Tambah Siswa</h2>
    <form action="{{ route('siswa_store') }}" method="POST">
        @csrf
        <label for="profile">Profile:</label>
        <input type="text" name="profile" id="profile"><br>

        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" id="nama_siswa"><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin"><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat"><br>

        <label for="no_telfone">No. Telfon:</label>
        <input type="text" name="no_telfone" id="no_telfone"><br>

        <label for="kelas_id">Kelas ID:</label>
        <select class="form-select" name="kelas_id" aria-label="Default select example">
            <option selected></option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

        <button type="submit">Tambah Siswa</button>
    </form>

    <!-- Daftar Siswa -->
    <h2>Daftar Siswa</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Profile</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. Telfon</th>
                <th>Kelas ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $key => $data)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $data->profile }}</td>
                    <td>{{ $data->nama_siswa }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_telfone }}</td>
                    <td>{{ $data->kelas_id }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $data->id) }}">Edit</a>
                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
