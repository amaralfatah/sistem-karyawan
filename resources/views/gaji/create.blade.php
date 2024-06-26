@extends('layouts.main')

@section('title', 'Home')

@section('navGaji')
    active
@endsection

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h1>Tambah Gaji</h1>
            <form action="{{ route('gaji.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="karyawan_id">Karyawan:</label>
                    <select class="form-control" name="karyawan_id" id="karyawan_id">
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}">{{ $karyawan->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="total">Total:</label>
                    <input class="form-control" type="text" name="total" id="total">
                </div>
                <div class="mb-3">
                    <label for="potongan">Potongan:</label>
                    <input class="form-control" type="text" name="potongan" id="potongan">
                </div>
                <div class="mb-3">
                    <label for="tunjangan">Tunjangan:</label>
                    <input class="form-control" type="text" name="tunjangan" id="tunjangan">
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>

        </div>
    </div>

@endsection
