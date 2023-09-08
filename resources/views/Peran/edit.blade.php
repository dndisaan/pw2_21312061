@extends('layout.master')

@section('judul')
	Edit Peran
@endsection

@section('content')
<form method="post" action="/peran/{{ $peran->id }}">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="number" name="film" value="" class="form-control">
    </div>
    @error('film')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="cast" value="" class="form-control">
    </div>
    @error('cast')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="number" name="nama" value="" class="form-control">
    </div>
    @error('cast')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class=" btn btn-primary">Ubah</button>
</form>

@endsection