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


                    <table class="table table-dark table-striped" id="table-cuti">
                        <thead>
                            <tr class="text-center">
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
                                <tr class="text-center">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ optional($items->karyawan)->name }}</td>
                                    <td>{{ $items->tanggal_mulai }}</td>
                                    <td>{{ $items->tanggal_berakhir }}</td>
                                    <td>{{ $items->keterangan }}</td>
                                    <td>{{ $items->jenis_cuti }}</td>
                                    <td class="opsi"><a href="{{ route('cuti.edit', ['id' => $items->id]) }}"
                                            class="btn btn-warning"> Edit </a> | <form
                                            action="{{ route('cuti.delete', ['id' => $items->id]) }}" method="POST" class="d-inline">
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

   
@endsection
