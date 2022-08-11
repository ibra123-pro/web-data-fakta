<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeritaTerupdate;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexBeritaTerupdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritaterupdate = \App\Models\BeritaTerupdate::All();
        return view('datalainnya.beritaterupdate.indexberitaterupdate',['beritaterupdate'=>$beritaterupdate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beritaterupdate = \App\Models\BeritaTerupdate::All();
        return view('datalainnya.beritaterupdate.inputberitaterupdate',['beritaterupdate'=>$beritaterupdate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_bt=new \App\Models\BeritaTerupdate;
        $tambah_bt->judul = $request->judul;
        $tambah_bt->tanggal = $request->tanggal;
        $tambah_bt->keterangan = $request->keterangan;
        $tambah_bt->catatan = $request->catatan;
        $tambah_bt->sumber = $request->sumber;
        $tambah_bt->save();
        return redirect()->route('indexberitaterupdate.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\BeritaTerupdate::findOrFail($id);
        return view( 'datalainnya.beritaterupdate.detail',['beritaterupdate'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bt_edit=\App\Models\BeritaTerupdate::findOrFail($id);
        return view('datalainnya.beritaterupdate.editberitaterupdate',['beritaterupdate' => $bt_edit]);
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
        $update_bt= \App\Models\BeritaTerupdate::findOrFail($id);
        $update_bt->judul = $request->judul;
        $update_bt->tanggal = $request->tanggal;
        $update_bt->keterangan = $request->keterangan;
        $update_bt->catatan = $request->catatan;
        $update_bt->sumber = $request->sumber;
        $update_bt->save();
        return redirect()->route('indexberitaterupdate.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_bt = \App\Models\BeritaTerupdate::findOrFail($id);
        $hapus_bt->delete();
        return redirect()->route( 'indexberitaterupdate.index')->with('success', 'Data Berhasil Dihapus');
    }
}
