@extends('layouts.main')

@section('title', 'Home')

@section('navKaryawan')
    active
@endsection

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h2>Edit Karyawan</h2>
            <form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $karyawan->name }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $karyawan->email }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">Telephone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone"
                        value="{{ $karyawan->telephone }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{ $karyawan->status }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="jabatan_id" class="form-label">Jabatan</label>
                    <select class="form-select" id="jabatan_id" name="jabatan_id" required>
                        @foreach ($jabatans as $jabatan)
                            <option value="{{ $jabatan->id }}"
                                {{ $karyawan->jabatan_id == $jabatan->id ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ktp" class="form-label">KTP</label>
                    <input type="text" class="form-control" id="ktp" name="ktp" value="{{ $karyawan->ktp }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="NPWP" class="form-label">NPWP</label>
                    <input type="text" class="form-control" id="NPWP" name="NPWP" value="{{ $karyawan->NPWP }}"
                        required>
                </div>
                <div class="mb-3">
                    <label for="total_kontak" class="form-label">Total Kontak</label>
                    <input type="number" class="form-control" id="total_kontak" name="total_kontak"
                        value="{{ $karyawan->total_kontak }}" required>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

@endsection
