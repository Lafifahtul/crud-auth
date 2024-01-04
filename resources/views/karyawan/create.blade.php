<!-- resources/views/karyawan/create.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Tambah Karyawan Baru</h2>
        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi:</label>
                <input type="text" class="form-control" id="posisi" name="posisi" required>
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
