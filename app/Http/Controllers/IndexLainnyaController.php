<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lainnya;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexLainnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lainnya = \App\Models\Lainnya::All();
        return view('datalainnya.lainnya.indexlainnya',['lainnya'=>$lainnya]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lainnya = \App\Models\Lainnya::All();
        return view('datalainnya.lainnya.inputlainnya',['lainnya'=>$lainnya]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_lainnya=new \App\Models\Lainnya;
        $tambah_lainnya->judul = $request->judul;
        $tambah_lainnya->keterangan = $request->keterangan;
        $tambah_lainnya->catatan = $request->catatan;
        $tambah_lainnya->sumber = $request->sumber;
        $tambah_lainnya->save();
        return redirect()->route('indexlainnya.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Lainnya::findOrFail($id);
        return view( 'datalainnya.lainnya.detail',['lainnya'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lainnya_edit=\App\Models\Lainnya::findOrFail($id);
        return view('datalainnya.lainnya.editlainnya',['lainnya' => $lainnya_edit]);
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
        $update_lainnya= \App\Models\Lainnya::findOrFail($id);
        $update_lainnya->judul = $request->judul;
        $update_lainnya->keterangan = $request->keterangan;
        $update_lainnya->catatan = $request->catatan;
        $update_lainnya->sumber = $request->sumber;
        $update_lainnya->save();
        return redirect()->route('indexlainnya.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_lainnya = \App\Models\Lainnya::findOrFail($id);
        $hapus_lainnya->delete();
        return redirect()->route( 'indexlainnya.index')->with('success', 'Data Berhasil Dihapus');
    }
}
