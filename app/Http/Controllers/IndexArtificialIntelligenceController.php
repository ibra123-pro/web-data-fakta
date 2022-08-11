<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtificialIntelligence;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexArtificialIntelligenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artificialintelligence = \App\Models\ArtificialIntelligence::All();
        return view('datateknologi.artificialintelligence.indexartificialintelligence',['artificialintelligence'=>$artificialintelligence]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artificialintelligence = \App\Models\ArtificialIntelligence::All();
        return view('datateknologi.artificialintelligence.inputartificialintelligence',['artificialintelligence'=>$artificialintelligence]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_ai=new \App\Models\ArtificialIntelligence;
        $tambah_ai->judul = $request->judul;
        $tambah_ai->keterangan = $request->keterangan;
        $tambah_ai->catatan = $request->catatan;
        $tambah_ai->sumber = $request->sumber;
        $tambah_ai->save();
        return redirect()->route('indexartificialintelligence.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\ArtificialIntellegence::findOrFail($id);
        return view( 'datateknologi.artificialintellegence.detail',['artificialintelligence'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ai_edit=\App\Models\ArtificialIntelligence::findOrFail($id);
        return view('datateknologi.artificialintelligence.editartificialintelligence',['artificialintelligence' => $ai_edit]);
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
        $update_ai= \App\Models\ArtificialIntelligence::findOrFail($id);
        $update_ai->judul = $request->judul;
        $update_ai->keterangan = $request->keterangan;
        $update_ai->catatan = $request->catatan;
        $update_ai->sumber = $request->sumber;
        $update_ai->save();
        return redirect()->route('indexartificialintelligence.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_ai = \App\Models\ArtificialIntelligence::findOrFail($id);
        $hapus_ai->delete();
        return redirect()->route( 'indexartificialintelligence.index')->with('success', 'Data Berhasil Dihapus');
    }
}
