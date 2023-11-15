<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = kategori::all();
        return view('backend/kategori/index', compact('kategoris'));
    }

    public function create(){
        return view('backend/kategori/create');
        
    }

    public function store(Request $request){
        //dd($request->except(['_token', 'submit']));
        kategori::create($request->except(['_token', 'submit']));
        $gambar = $request->file('gambar');
        $filename = date('Y-m-d').$gambar;
        $path = 'storage/'.$filename;
        return redirect('/backend/kategori/index')->with('Succes','Data Kategori Berhasil Ditambah');
    }

    public function edit($id){
        $kategoris=kategori::find($id);
       //dd($id_kategori);
        return view('/backend/kategori/edit', compact('kategoris'));
    }

    public function update($id, Request $request)  {

        $kategoris = kategori::find($id);
        $kategoris-> update($request->except(['_token', 'submit']));
        return redirect('/backend/kategori/index')->with('Succes','Data Kategori Berhasil Diubah');
    }



    public function destroy($id){
        //dd($id_kategori);
       $kategoris = kategori::find($id);
        $kategoris->delete();
        return redirect('/backend/kategori/index')->with('Succes','Data Kategori Berhasil Dihapus');

    }

}
