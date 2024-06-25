<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <div class="container-fluid pt-4 px-4">

        {{-- <a href="{{ route('kehadirans.create') }}" class="btn btn-primary">Tambah Karyawan</a> --}}

        <div class="card bg-secondary rounded mt-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Gaji</th>
                                <th scope="col">Gaji Perbulan</th>
                                <th scope="col">Total Alpha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>nama</td>
                                <td>60_000_000</td>
                                <td>2_000_000</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
