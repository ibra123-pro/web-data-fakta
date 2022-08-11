<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Virus;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexVirusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $virus = \App\Models\Virus::All();
        return view('datakesehatan.virus.indexvirus',['virus'=>$virus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $virus = \App\Models\Virus::All();
        return view('datakesehatan.virus.inputvirus',['virus'=>$virus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_vrs=new \App\Models\Virus;
        $tambah_vrs->judul = $request->judul;
        $tambah_vrs->keterangan = $request->keterangan;
        $tambah_vrs->catatan = $request->catatan;
        $tambah_vrs->sumber = $request->sumber;
        $tambah_vrs->save();
        return redirect()->route('indexvirus.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Virus::findOrFail($id);
        return view( 'datakesehatan.virus.detail',['virus'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vrs_edit=\App\Models\Virus::findOrFail($id);
        return view('datakesehatan.virus.editvirus',['virus' => $vrs_edit]);
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
        $update_vrs= \App\Models\Virus::findOrFail($id);
        $update_vrs->judul = $request->judul;
        $update_vrs->keterangan = $request->keterangan;
        $update_vrs->catatan = $request->catatan;
        $update_vrs->sumber = $request->sumber;
        $update_vrs->save();
        return redirect()->route('indexvirus.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_virus = \App\Models\Virus::findOrFail($id);
        $hapus_virus->delete();
        return redirect()->route( 'indexvirus.index')->with('success', 'Data Berhasil Dihapus');
    }
}
