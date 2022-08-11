<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpatsLimas;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexEmpatsLimasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empatslimas = \App\Models\EmpatsLimas::All();
        return view('datakesehatan.empatslimas.indexempatslimas',['empatslimas'=>$empatslimas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empatslimas = \App\Models\EmpatsLimas::All();
        return view('datakesehatan.empatslimas.inputempatslimas',['empatslimas'=>$empatlimas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_esls=new \App\Models\Empatslimas;
        $tambah_esls->judul = $request->judul;
        $tambah_esls->keterangan = $request->keterangan;
        $tambah_esls->catatan = $request->catatan;
        $tambah_esls->sumber = $request->sumber;
        $tambah_esls->save();
        return redirect()->route('indexempatslimas.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\EmpatsLimas::findOrFail($id);
        return view( 'datakesehatan.empatslimas.detail',['empatslimas'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $esls_edit=\App\Models\EmpatsLimas::findOrFail($id);
        return view('datakesehatan.empatslimas.editempatslimas',['empatslimas' => $esls_edit]);
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
        $update_esls= \App\Models\EmpatsLimas::findOrFail($id);
        $update_esls->judul = $request->judul;
        $update_esls->keterangan = $request->keterangan;
        $update_esls->catatan = $request->catatan;
        $update_esls->sumber = $request->sumber;
        $update_esls->save();
        return redirect()->route('indexempatslimas.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_esls = \App\Models\EmpatsLimas::findOrFail($id);
        $hapus_esls->delete();
        return redirect()->route( 'indexempatslimas.index')->with('success', 'Data Berhasil Dihapus');
    }
}
