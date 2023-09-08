<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;
use App\Models\Genre;
use App\Models\Peran;
use RealRashid\SweetAlert\Facades\Alert;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.index',compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = Genre::all();
        return view ('peran.create', compact('film'));
        $cast = Genre::all();
        return view ('peran.create', compact('film'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new Peran;

        $request->validate([
            'film' => 'required',
            'cast' => 'required',
            'Nama' => 'required',
        ]);

        $Peran->film = $request -> film;
        $Peran->cast = $request -> cast ;
        $Peran->nama = $request -> nama;

        $simpan = $Peran->save ();

        if($simpan){
            Alert::success('Succes', 'Data Berhasil ditambah');
            return redirect('/peran');
        }else{
            Alert::error('Failed','Gagal Menyimpan Data');
        }

        return redirect('/peran');
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
        $peran = Peran::where('id',$id)->first();

        return view('peran.edit', compact('peran'));

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
            'film' => 'required',
            'cast' => 'required',
            'nama' => 'required',
        ]);

        $peran = Peran::find($id);
        $peran->film = $request -> nama;
        $peran->cast = $request -> umur ;
        $peran->nama = $request -> bio;

        $ubah = $peran->save ();

        if($ubah){
            Alert::success('Succes', 'Data Berhasil di ubah');
            return redirect('/peran');
        }else{
            Alert::error('Failed','Gagal Mengubah Data');
        }

        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Peran::find($id);
        $hapus = $peran ->delete();

        if($hapus){
            Alert::success('Succes', 'Data Berhasil dihapus');
            return redirect('/peran');
        }else{
            Alert::error('Failed','Gagal Menghapus Data');
        }
        return redirect('/peran');
    }
}
