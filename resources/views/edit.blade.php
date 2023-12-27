<!-- resources/views/peminjaman/edit.blade.php -->

@extends('master')

@section('content')
    <div class="container">
        <h2>Edit Peminjaman</h2>
        <form method="POST" action="{{ url('/update/', $peminjaman->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_peminjaman">No Peminjaman:</label>
                <input type="text" name="no_peminjaman" class="form-control" value="{{ $peminjaman->no_peminjaman }}" required>
            </div>
            <div class="form-group">
                <label for="books_id">Book ID:</label>
                <input type="number" name="books_id" class="form-control" value="{{ $peminjaman->books_id }}" required>
            </div>
            <div class="form-group">
                <label for="pengunjung_id">Pengunjung ID:</label>
                <input type="number" name="pengunjung_id" class="form-control" value="{{ $peminjaman->pengunjung_id }}" required>
            </div>
            <div class="form-group">
                <label for="pegawai_id">Pegawai ID:</label>
                <input type="number" name="pegawai_id" class="form-control" value="{{ $peminjaman->pegawai_id }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="number" name="status" class="form-control" value="{{ $peminjaman->status }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
