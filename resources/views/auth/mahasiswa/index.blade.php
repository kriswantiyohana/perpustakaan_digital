@extends('layouts.app')

@section('content')
    <div class="container">
    <a href="route('mahasiswa.create')" class="btn btn-primary">Tambah Mahasiswa</a>
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td> { { $mahasiswa->id } } </td>
                    <td> { { $mahasiswa->nama } } </td>
                    <td> { { $mahasiswa->alamat } } </td>
                    <td> { { $mahasiswa->tanggal_lahir } } </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@if (session('success'))
    <div class="alert alert-success">session('success')</div>
@endif

@extends('layouts.app')
@section('content')
<div class="container">
    <h5>Daftar Mahasiswa</h5>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th> 
        </tr>
        </thead>
        <tbody>
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td> { { $mahasiswa->id } } </td>
            <td> { { $mahasiswa->nama } } </td>
            <td> { { $mahasiswa->alamat } } </td>
            <td> { { $mahasiswa->tanggal_lahir } } </td>
            <td>
            <a href="route('mahasiswa.edit', $mahasiswa->id)" class="btn btn-primary">Edit</a>
            </td>
            <form action="route('mahasiswa.destroy', $mahasiswa->id)" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection