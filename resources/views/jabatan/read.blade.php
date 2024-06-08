<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jabatan | BackEnd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <section id="nav">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Testing BackEnd</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('jabatan.read') }}">Jabatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('cuti.read') }}">Cuti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </section>

    <section id="read">
        <div class="container ">
          <div id="menu-sorting-jabatan" class="">
            <a href="{{ route('jabatan.create') }}" class="btn btn-primary mt-5 m-3">Buat Jabatan Baru</a>
            <div id="search-jabatan" class="ms-3 me-3 d-flex">
                <form action="{{ route('jabatan.search') }}" class="d-flex w-50">
                    <div class="input-group">
                        <span class="input-group-text bg-white" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" name="jabatan" 
                        @if (session()->has('jabatan'))
                          value=" {{ session('jabatan') }} " 
                        @else
                        value=""
                        @endif
                        placeholder="Cari Jabatan"  aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-secondary fw-medium ms-2">Cari</button>
                    <select class="form-select w-50 ms-3" name="urutan" aria-label="Default select example">
                      <option selected value="asc">Urutkan</option>
                      <option value="asc">Teratas</option>
                      <option value="desc">Terbawah</option>
                    </select>
                </form>
          </div>
            </div>
            
            <div class="row justify-content-center mt-2">
                <div class="col">

                
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Jam Kerja</th>
                <th scope="col">Note Pekerjaan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Tunjangan</th>
                <th scope="col">Potongan</th>
                <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $items )
                    
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $items->nama_jabatan }}</td>
                <td>{{ $items->jam_kerja }}</td>
                <td>{{ $items->note_pekerjaan }}</td>
                <td>{{ $items->gaji_pokok }}</td>
                <td>{{ $items->tunjangan }}</td>
                <td>{{ $items->potongan }}</td>
                <td><a href="{{ route('jabatan.edit', ['id' => $items->id]) }}" class="btn btn-warning"> Edit </a> | <form action="{{ route('jabatan.delete', ['id' => $items->id]) }}" method="POST">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>