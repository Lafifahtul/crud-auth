<!-- resources/views/karyawan/index.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Daftar Karyawan</h2>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $karyawan)
                    <tr>
                        <td>{{ $karyawan->id }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->posisi }}</td>
                        <td>{{ $karyawan->tanggal_masuk }}</td>
                        <td>
                            <a href="{{ route('karyawan.show', $karyawan->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
