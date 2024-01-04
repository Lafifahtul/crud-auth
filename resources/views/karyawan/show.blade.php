<!-- resources/views/karyawan/show.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Detail Karyawan</h2>
        <p><strong>Nama:</strong> {{ $karyawan->nama }}</p>
        <p><strong>Posisi:</strong> {{ $karyawan->posisi }}</p>
        <p><strong>Tanggal Masuk:</strong> {{ $karyawan->tanggal_masuk }}</p>
        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
