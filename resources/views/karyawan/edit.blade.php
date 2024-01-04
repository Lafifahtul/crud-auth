<!-- resources/views/karyawan/edit.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Karyawan</h2>
        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
            </div>
            <div class="form-group">
                <label for="posisi">Posisi:</label>
                <input type="text" class="form-control" id="posisi" name="posisi" value="{{ $karyawan->posisi }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ $karyawan->tanggal_masuk }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
