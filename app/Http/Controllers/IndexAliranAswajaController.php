<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AliranAswaja;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexAliranAswajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliranaswaja = \App\Models\AliranAswaja::All();
        return view('dataagama.aliranaswaja.indexaliranaswaja',['aliranaswaja'=>$aliranaswaja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aliranaswaja = \App\Models\AliranAswaja::All();
        return view('dataagama.aliranaswaja.inputaliranaswaja',['aliranaswaja'=>$aliranaswaja]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_alas=new \App\Models\AliranAswaja;
        $tambah_alas->judul = $request->judul;
        $tambah_alas->keterangan = $request->keterangan;
        $tambah_alas->catatan = $request->catatan;
        $tambah_alas->sumber = $request->sumber;
        $tambah_alas->save();
        return redirect()->route('indexaliranaswaja.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\AliranAswaja::findOrFail($id);
        return view( 'dataagama.aliranaswaja.detail',['aliranaswaja'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alas_edit=\App\Models\AliranAswaja::findOrFail($id);
        return view('dataagama.aliranaswaja.editaliranaswaja',['aliranaswaja' => $alas_edit]);
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
        $update_alas= \App\Models\AliranAswaja::findOrFail($id);
        $update_alas->judul = $request->judul;
        $update_alas->keterangan = $request->keterangan;
        $update_alas->catatan = $request->catatan;
        $update_alas->sumber = $request->sumber;
        $update_alas->save();
        return redirect()->route('indexaliranaswaja.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_alas = \App\Models\AliranAswaja::findOrFail($id);
        $hapus_alas->delete();
        return redirect()->route( 'indexaliranaswaja.index')->with('success', 'Data Berhasil Dihapus');
    }
}
