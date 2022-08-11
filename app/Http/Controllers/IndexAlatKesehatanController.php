<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlatKesehatan;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexAlatKesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alatkesehatan = \App\Models\AlatKesehatan::All();
        return view('datakesehatan.alatkesehatan.indexalatkesehatan',['alatkesehatan'=>$alatkesehatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alatkesehatan = \App\Models\AlatKesehatan::All();
        return view('datakesehatan.alatkesehatan.inputalatkesehatan',['alatkesehatan'=>$alatkesehatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_alkes=new \App\Models\AlatKesehatan;
        $tambah_alkes->judul = $request->judul;
        $tambah_alkes->keterangan = $request->keterangan;
        $tambah_alkes->catatan = $request->catatan;
        $tambah_alkes->sumber = $request->sumber;
        $tambah_alkes->save();
        return redirect()->route('indexalatkesehatan.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\AlatKesehatan::findOrFail($id);
        return view( 'datakesehatan.alatkesehatan.detail',['alatkesehatan'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alkes_edit=\App\Models\AlatKesehatan::findOrFail($id);
        return view('datakesehatan.alatkesehatan.editalatkesehatan',['alatkesehatan' => $alkes_edit]);
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
        $update_alkes= \App\Models\AlatKesehatan::findOrFail($id);
        $update_alkes->judul = $request->judul;
        $update_alkes->keterangan = $request->keterangan;
        $update_alkes->catatan = $request->catatan;
        $update_alkes->sumber = $request->sumber;
        $update_alkes->save();
        return redirect()->route('indexalatkesehatan.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_alkes = \App\Models\AlatKesehatan::findOrFail($id);
        $hapus_alkes->delete();
        return redirect()->route( 'indexalatkesehatan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
