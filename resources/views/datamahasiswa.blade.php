@extends('layouts.backend')


@section('content')

    <div class="container text-center mt-4 mb-4">
        <h3>Data Mahasiswa</h3>
    </div>
    <button type="button" class="btn-solid theme-success">Tambah +</button>
    <div class="border rounded overflow-hidden mt-4">
    <table class="table table-striped mb-0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nim</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No. HP</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->prodi }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->nohp }}</td>
                <td>{{ $data->foto }}</td>
                <td>
                    <button type="button" class="btn-solid theme-primary">Edit</button>
                    <button type="button" class="btn-solid theme-danger">Hapus</button>
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach
        </tbody>
    </table>
    </div>
    
@endsection