<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section id="create">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-8">
            <form action="{{ route('jabatan.createProses') }}" method="POST">
              @csrf
                @method('POST')
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Nama Jabatan</label>
                <input type="text" name="nama_jabatan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Jam Kerja</label>
                <input type="text" name="jam_kerja"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text fst-italic">contoh : 8</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Note Pekerjaan</label>
                <input type="text" name="note_pekerjaan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Gaji Pokok</label>
                <input type="text" name="gaji_pokok"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text fst-italic">contoh : 1000000</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Tunjangan</label>
                <input type="text" name="tunjangan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text fst-italic">contoh : 1000000</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Potongan</label>
                <input type="text" name="potongan"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text fst-italic">contoh : 1000000</div>
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