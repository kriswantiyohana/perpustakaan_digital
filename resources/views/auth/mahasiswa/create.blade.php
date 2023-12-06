@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tambah Mahasiswa</h1> 
        <form action="route('mahasiswa.store')" method="POST">
        @csrf 

        <div class="form-group">
            <label for="nama">Nama:</label> 
            <input type="text" name="nama" id="nama" class="form-control"> 
        </div> 
        
        <div class="form-group">
            <label for="alamat">Alamat:</label> 
            <input type="text" name="alamat" id="alamat" class="form-control"> 
        </div>
        
        <div class="form-group"> 
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button> 
        </form>
    </div>
@endsection