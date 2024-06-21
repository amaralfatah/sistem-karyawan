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
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam</th>
                                <th scope="col">bulan dan tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($absensis as $absensi)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $absensi->karyawan->name }}</td>
                                    <td>{{ $absensi->status_absen }}</td>
                                    <td>{{ $absensi->tanggal_absensi }}</td>
                                    <td>{{ $absensi->time }}</td>
                                    <td>{{ \Carbon\Carbon::parse($absensi->tanggal_absensi)->isoFormat('MMMM, YYYY') }}</td>
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
</body>

</html>
