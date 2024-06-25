<!-- resources/views/home.blade.php -->
@extends('layouts.main')

@section('title', 'Home')
@section('links')

<style>
    #table-cuti,
    #table-cuti .opsi a,
    #table-cuti .opsi button {
        font-size: 0.8rem;
    }


</style>

@endsection

@section('navCuti')
active
@endsection

@section('content')

    <section id="read" class="m-5 mt-4 ">
        <div class="container bg-secondary rounded p-3" style="margin-bottom: 15rem">
            <a href="{{ route('cuti.create') }}" class="btn btn-primary mt-2">Buat Cuti Baru</a>
            <div class="row justify-content-center mt-4">
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
                @foreach ($data as $items )

                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td> Coming Soon </td>
                {{-- <td>{{ $items->karyawans->name }}</td> --}}
                <td>{{ $items->tanggal_mulai }}</td>
                <td>{{ $items->tanggal_berakhir }}</td>
                <td>{{ $items->keterangan }}</td>
                <td>{{ $items->jenis_cuti }}</td>
                <td><a href="{{ route('cuti.edit', ['id' => $items->id]) }}" class="btn btn-warning"> Edit </a> | <form action="{{ route('cuti.delete', ['id' => $items->id]) }}" method="POST">
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

            <div class="d-flex justify-content-between px-5">
            <div class="d-flex gap-2">
                <p>Showing</p>
                {{ $data->firstItem() }}
                <p>to</p>
                {{ $data->lastItem() }}
            </div>
            <div>
                {{ $data->links() }}
            </div>
            </div>

        </div>

    </section>


@endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
