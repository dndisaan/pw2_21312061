@extends('layout.master')

@section('judul')
	Daftar Peran
@endsection

@section('content')
<form method="peran" action="/peran">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="" class="form-control">
    </div>
    @error('film')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <input name="cast" value="" class="form-control">
    </div>
    @error('cast')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="" class="form-control">
    </div>
    @error('peran')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <button type="submit" class=" btn btn-primary">Simpan</button>
</form>

@endsection