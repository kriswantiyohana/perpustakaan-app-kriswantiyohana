<!-- resources/views/peminjaman/create.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <h2>Create Peminjaman</h2>
        <form method="POST" action="{{ url('/store') }}">
            @csrf
            <div class="form-group">
                <label for="no_peminjaman">No Peminjaman:</label>
                <input type="text" name="no_peminjaman" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="books_id">Book ID:</label>
                <input type="number" name="books_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pengunjung_id">Pengunjung ID:</label>
                <input type="number" name="pengunjung_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pegawai_id">Pegawai ID:</label>
                <input type="number" name="pegawai_id" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
