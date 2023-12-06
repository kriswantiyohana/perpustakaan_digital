@extends('layouts.app')
@section('content')
<div class="container">
    <h5>Edit Mahasiswa</h5>
        <form action="route('mahasiswa.update', $mahasiswa->id)" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="$mahasiswa->nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="$mahasiswa->alamat">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="$mahasiswa->tanggal_lahir">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection