<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Karyawan</h2>
        <form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $karyawan->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $karyawan->email }}" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $karyawan->telephone }}" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $karyawan->status }}" required>
            </div>
            <div class="mb-3">
                <label for="jabatan_id" class="form-label">Jabatan</label>
                <select class="form-select" id="jabatan_id" name="jabatan_id" required>
                    @foreach($jabatans as $jabatan)
                        <option value="{{ $jabatan->id }}" {{ $karyawan->jabatan_id == $jabatan->id ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">KTP</label>
                <input type="text" class="form-control" id="ktp" name="ktp" value="{{ $karyawan->ktp }}" required>
            </div>
            <div class="mb-3">
                <label for="NPWP" class="form-label">NPWP</label>
                <input type="text" class="form-control" id="NPWP" name="NPWP" value="{{ $karyawan->NPWP }}" required>
            </div>
            <div class="mb-3">
                <label for="total_kontak" class="form-label">Total Kontak</label>
                <input type="number" class="form-control" id="total_kontak" name="total_kontak" value="{{ $karyawan->total_kontak }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
