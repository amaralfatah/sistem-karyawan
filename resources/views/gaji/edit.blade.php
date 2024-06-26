@extends('layouts.main')

@section('title', 'Home')

@section('navGaji')
    active
@endsection

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h1>Edit Gaji</h1>
            <form action="{{ route('gaji.update', $gaji->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="karyawan_id">Karyawan:</label>
                    <select name="karyawan_id" id="karyawan_id" class="form-control">
                        @foreach ($karyawans as $karyawan)
                            <option value="{{ $karyawan->id }}" {{ $gaji->karyawan_id == $karyawan->id ? 'selected' : '' }}>
                                {{ $karyawan->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="total">Total:</label>
                    <input class="form-control" type="text" name="total" id="total" value="{{ $gaji->total }}">
                </div>
                <div class="mb-3">
                    <label for="potongan">Potongan:</label>
                    <input class="form-control" type="text" name="potongan" id="potongan" value="{{ $gaji->potongan }}">
                </div>
                <div class="mb-3">
                    <label for="tunjangan">Tunjangan:</label>
                    <input class="form-control" type="text" name="tunjangan" id="tunjangan"
                        value="{{ $gaji->tunjangan }}">
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>

@endsection
