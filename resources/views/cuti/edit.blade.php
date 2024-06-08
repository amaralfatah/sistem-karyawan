<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <section id="edit">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{ route('cuti.update', ['id' => $data->id]) }}" method="POST">
              @csrf
                @method('PUT')
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Nama Karyawan</label>
                {{-- <input type="text" name="karyawan_id" value="{{ $data->karyawan_id }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" name="tanggal_mulai" value="{{ $data->tanggal_mulai }}" id="date" >
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Tanggal Berakhir</label>
                <input type="date" class="form-control" id="date" name="tanggal_berakhir" value="{{ $data->tanggal_berakhir }}">
            </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Keterangan</label>
                <input type="text" name="keterangan" value="{{ $data->keterangan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Jenis Cuti</label>
                <input type="text" name="jenis_cuti" value="{{ $data->jenis_cuti }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>