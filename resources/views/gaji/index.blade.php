@extends('layouts.main')

@section('title', 'Daftar Gaji')

@section('navGaji', 'active')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Gaji</h1>
        {{-- Uncomment to add a button for creating new salary records --}}
        {{-- <a class="btn btn-primary" href="{{ route('gaji.create') }}">Tambah Gaji</a> --}}
    </div>
    <div class="card bg-secondary rounded mt-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Karyawan</th>
                            <th>Gaji Bulanan</th>
                            <th>Total Potongan</th>
                            <th>Total Tunjangan</th>
                            <th>Total Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gajis as $gaji)
                        <tr>
                            <td>{{ $gaji->id }}</td>
                            <td>{{ $gaji->karyawan->name }}</td>
                            <td>{{ $gaji->karyawan->jabatan->gaji_pokok }}</td>
                            <td>{{ $gaji->total_potongan }}</td>
                            <td>{{ $gaji->total_tunjangan }}</td>
                            <td>{{ $gaji->total_gaji }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
