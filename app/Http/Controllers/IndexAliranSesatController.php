<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AliranSesat;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexAliranSesatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aliransesat = \App\Models\AliranSesat::All();
        return view('dataagama.aliransesat.indexaliransesat',['aliransesat'=>$aliransesat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aliransesat = \App\Models\AliranSesat::All();
        return view('dataagama.aliransesat.inputaliransesat',['aliransesat'=>$aliransesat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_alses=new \App\Models\AliranSesat;
        $tambah_alses->judul = $request->judul;
        $tambah_alses->keterangan = $request->keterangan;
        $tambah_alses->catatan = $request->catatan;
        $tambah_alses->sumber = $request->sumber;
        $tambah_alses->save();
        return redirect()->route('indexaliransesat.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\AliranSesat::findOrFail($id);
        return view( 'dataagama.aliransesat.detail',['aliransesat'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alses_edit=\App\Models\AliranSesat::findOrFail($id);
        return view('dataagama.aliransesat.editaliransesat',['aliransesat' => $alses_edit]);
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
        $update_alses= \App\Models\AliranSesat::findOrFail($id);
        $update_alses->judul = $request->judul;
        $update_alses->keterangan = $request->keterangan;
        $update_alses->catatan = $request->catatan;
        $update_alses->sumber = $request->sumber;
        $update_alses->save();
        return redirect()->route('indexaliransesat.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_alses = \App\Models\AliranSesat::findOrFail($id);
        $hapus_alses->delete();
        return redirect()->route( 'indexaliransesat.index')->with('success', 'Data Berhasil Dihapus');
    }
}
