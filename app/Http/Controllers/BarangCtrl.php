<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelBarang;

class BarangCtrl extends Controller
{
    //
    public function tampil(){
        $data_tabel=TabelBarang::all();
        return view('adminlte/databrg')->with('barang_arr',$data_tabel);
    }

    public function add(Request $request){
        TabelBarang::create($request->all());
        return redirect('/barang')->with('sukses','Data telah ditambahkan !');
    }

    public function update(Request $request){
        $data_tabelnya=TabelBarang::findOrFail($request->id);
        $data_tabelnya->update($request->all());
        return redirect('/barang')->with('sukses','Data telah diupdate !');
    }

    public function delete(Request $request){
        $data_tabelnya=TabelBarang::findOrFail($request->id);
        $data_tabelnya->delete();
        return redirect('/barang')->with('sukses','Data telah dihapus !');
    }
}
