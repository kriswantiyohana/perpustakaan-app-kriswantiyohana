<!-- resources/views/peminjaman/index.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <h2>Daftar Peminjaman</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No Peminjaman</th>
                    <th>Book ID</th>
                    <th>Pengunjung ID</th>
                    <th>Pegawai ID</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($peminjamans as $peminjaman)
                    <tr>
                        <td>{{ $peminjaman->no_peminjaman }}</td>
                        <td>{{ $peminjaman->books_id }}</td>
                        <td>{{ $peminjaman->pengunjung_id }}</td>
                        <td>{{ $peminjaman->pegawai_id }}</td>
                        <td>{{ $peminjaman->status }}</td>
                        <td>
                            <a href="{{ url('/edit/'.$peminjaman->id) }}"><button class="btn btn-warning">Edit</button></a>
                             |
                            <a href="{{ url('/destroy/'.$peminjaman->id) }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
