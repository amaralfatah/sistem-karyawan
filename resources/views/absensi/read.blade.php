<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absensi | BackEnd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">Testing BackEnd</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('jabatan.read') }}">Jabatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cuti.read') }}">Cuti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('karyawans.index') }}">Karyawan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="read">
        <div class="container">
            <div id="menu-sorting-karyawan" class="">
                <a href="{{ route('karyawans.create') }}" class="btn btn-primary mt-5 m-3">Buat Karyawan Baru</a>
            </div>

            <div class="row justify-content-center mt-2">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                {{-- <th scope="col">Email</th>
                                <th scope="col">Jabatan</th> --}}
                                {{-- <th scope="col">Telephone</th> --}}
                                {{-- <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Status</th>
                                <th scope="col">KTP</th>
                                <th scope="col">NPWP</th> --}}
                                {{-- <th scope="col">Total Kontak</th> --}}
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawanBelumAbsen as $karyawanBelumAbsens)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $karyawanBelumAbsens->name }}</td>
                                {{-- <td>{{ $karyawan->email }}</td>
                                <td>{{ $karyawan->jabatan->nama_jabatan }}</td> --}}
                                {{-- <td>{{ $karyawan->telephone }}</td> --}}
                                {{-- <td>{{ $karyawan->jenis_kelamin }}</td>
                                <td>{{ $karyawan->status }}</td>
                                <td>{{ $karyawan->ktp }}</td>
                                <td>{{ $karyawan->NPWP }}</td> --}}
                                {{-- <td>{{ $karyawan->total_kontak }}</td> --}}
                                <form action="{{ route('absensi.createProses') }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" name="karyawan_id" value="{{ $karyawanBelumAbsens->id }}">
                                    <td>
                                        <input type="text" name="keterangan" class="form-control">
                                    </td>
                                    <td>
                                        <button type="submit" name="status_absen" value="hadir"
                                            class="btn btn-success">Hadir</button>
                                        <button type="submit" name="status_absen" value="alpha"
                                            class="btn btn-danger">Alpha</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
        @if (session('success'))
        <script>
            alert("{{ session('success') }}")
        </script>
    @endif
</body>

</html>
