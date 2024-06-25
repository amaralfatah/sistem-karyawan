<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <div class="container-fluid pt-4 px-4">

        <a href="{{ route('karyawans.create') }}" class="btn btn-primary">Tambah Karyawan</a>

        <div class="card bg-secondary rounded mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">KTP</th>
                                <th scope="col">NPWP</th>
                                <th scope="col">Total Kontak</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawans as $karyawan)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $karyawan->name }}</td>
                                    <td>{{ $karyawan->email }}</td>
                                    <td>{{ $karyawan->jenis_kelamin }}</td>
                                    <td>{{ $karyawan->telephone }}</td>
                                    <td>{{ $karyawan->status }}</td>
                                    <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
                                    <td>{{ $karyawan->ktp }}</td>
                                    <td>{{ $karyawan->NPWP }}</td>
                                    <td>{{ $karyawan->total_kontak }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('karyawans.edit', ['id' => $karyawan->id]) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('karyawans.delete', ['id' => $karyawan->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
