@extends('layouts.main')

@section('title', 'Home')

@section('navKaryawan')
    active
@endsection

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Buat Karyawan Baru</h6>
            <form action="{{ route('karyawans.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-xl-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Telephone</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status" name="status" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="mb-3">
                            <label for="jabatan_id" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan_id" name="jabatan_id" required>
                                @foreach ($jabatans as $jabatan)
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ktp" class="form-label">KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" required>
                        </div>
                        <div class="mb-3">
                            <label for="NPWP" class="form-label">NPWP</label>
                            <input type="text" class="form-control" id="NPWP" name="NPWP" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_kontak" class="form-label">Total Kontak</label>
                            <input type="number" class="form-control" id="total_kontak" name="total_kontak" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>

        </div>
    </div>

@endsection
