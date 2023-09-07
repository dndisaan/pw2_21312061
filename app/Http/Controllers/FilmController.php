<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\film;
use App\Models\Genre;
use RealRashid\SweetAlert\Facades\Alert;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = film::all();
        return view('film.index',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view ('film.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Film;

        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required',
            'genre' => 'required',
        ]);

        $film->judul = $request -> judul;
        $film->ringkasan = $request -> ringkasan ;
        $film->tahun = $request -> tahun;
        $film->poster = $request -> poster;
        $film->genre_id = $request -> genre;

        $simpan = $film->save ();

        if($simpan){
            Alert::success('Succes', 'Data Berhasil ditambah');
            return redirect('/film');
        }else{
            Alert::error('Failed','Gagal Menyimpan Data');
        }

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::where('id',$id)->first();

        return view('film.edit', compact('film'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required',
            'genre' => 'required',
        ]);

        $film = Film::find($id);
        $film->nama = $request -> nama;
        $film->umur = $request -> umur ;
        $film->bio = $request -> bio;

        $ubah = $film->save ();

        if($ubah){
            Alert::success('Succes', 'Data Berhasil di ubah');
            return redirect('/film');
        }else{
            Alert::error('Failed','Gagal Mengubah Data');
        }

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);
        $hapus = $film ->delete();

        if($hapus){
            Alert::success('Succes', 'Data Berhasil dihapus');
            return redirect('/film');
        }else{
            Alert::error('Failed','Gagal Menghapus Data');
        }
        return redirect('/film');
    }
}
