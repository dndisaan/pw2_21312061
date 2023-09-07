@extends('layout.master')

@section('judul')
	Edit Film
@endsection

@section('content')
<form method="post" action="/film/{{ $film->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" value="" class="form-control">
    </div>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Ringkasan</label>
        <input name="ringkasan" value="" class="form-control">
    </div>
    @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" value="" class="form-control">
    </div>
    @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Poster</label>
        <input type="text" name="poster" value="" class="form-control">
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Genre</label>
        <input type="number" name="genre" value="" class="form-control">
    </div>
    @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class=" btn btn-primary">Ubah</button>
</form>

@endsection