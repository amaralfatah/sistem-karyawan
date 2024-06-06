<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <section id="read">
        <div class="container ">
          <a href="{{ route('jabatan.create') }}" class="btn btn-primary mt-5">Buat Jabatan Baru</a>
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