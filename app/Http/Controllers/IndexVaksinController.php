<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaksin = \App\Models\Vaksin::All();
        return view('datakesehatan.vaksin.indexvaksin',['vaksin'=>$vaksin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaksin = \App\Models\Vaksin::All();
        return view('datakesehatan.vaksin.inputvaksin',['vaksin'=>$vaksin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_vks=new \App\Models\Vaksin;
        $tambah_vks->judul = $request->judul;
        $tambah_vks->keterangan = $request->keterangan;
        $tambah_vks->catatan = $request->catatan;
        $tambah_vks->sumber = $request->sumber;
        $tambah_vks->save();
        return redirect()->route('indexvaksin.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Vaksin::findOrFail($id);
        return view( 'datakesehatan.vaksin.detail',['vaksin'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vks_edit=\App\Models\Vaksin::findOrFail($id);
        return view('datakesehatan.vaksin.editvaksin',['vaksin' => $vks_edit]);
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
        $update_vks= \App\Models\Vaksin::findOrFail($id);
        $update_vks->judul = $request->judul;
        $update_vks->keterangan = $request->keterangan;
        $update_vks->catatan = $request->catatan;
        $update_vks->sumber = $request->sumber;
        $update_vks->save();
        return redirect()->route('indexvaksin.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_vaksin = \App\Models\Vaksin::findOrFail($id);
        $hapus_vaksin->delete();
        return redirect()->route( 'indexvaksin.index')->with('success', 'Data Berhasil Dihapus');
    }
}
