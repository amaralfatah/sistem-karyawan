<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuti | BackEnd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <div class="container ">
            <a href="{{ route('cuti.create') }}" class="btn btn-primary mt-5">Buat Cuti Baru</a>
            <div class="row justify-content-center mt-2">
                <div class="col">


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kariyawan</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Berakhir</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jenis Cuti</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $items)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td> Coming Soon </td>
                                    {{-- <td>{{ $items->karyawans->name }}</td> --}}
                                    <td>{{ $items->tanggal_mulai }}</td>
                                    <td>{{ $items->tanggal_berakhir }}</td>
                                    <td>{{ $items->keterangan }}</td>
                                    <td>{{ $items->jenis_cuti }}</td>
                                    <td><a href="{{ route('cuti.edit', ['id' => $items->id]) }}"
                                            class="btn btn-warning"> Edit </a> | <form
                                            action="{{ route('cuti.delete', ['id' => $items->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
</body>

</html>
