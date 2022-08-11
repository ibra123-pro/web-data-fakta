<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = \App\Models\Obat::All();
        return view('datakesehatan.obat.indexobat',['obat'=>$obat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = \App\Models\Obat::All();
        return view('datakesehatan.obat.inputobat',['obat'=>$obat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_obat=new \App\Models\Obat;
        $tambah_obat->judul = $request->judul;
        $tambah_obat->keterangan = $request->keterangan;
        $tambah_obat->catatan = $request->catatan;
        $tambah_obat->sumber = $request->sumber;
        $tambah_obat->save();
        return redirect()->route('indexobat.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Obat::findOrFail($id);
        return view( 'datakesehatan.obat.detail',['obat'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat_edit=\App\Models\Obat::findOrFail($id);
        return view('datakesehatan.obat.editobat',['obat' => $obat_edit]);
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
        $update_obat= \App\Models\Obat::findOrFail($id);
        $update_obat->judul = $request->judul;
        $update_obat->keterangan = $request->keterangan;
        $update_obat->catatan = $request->catatan;
        $update_obat->sumber = $request->sumber;
        $update_obat->save();
        return redirect()->route('indexobat.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_obat = \App\Models\Obat::findOrFail($id);
        $hapus_obat->delete();
        return redirect()->route( 'indexobat.index')->with('success', 'Data Berhasil Dihapus');
    }
}
