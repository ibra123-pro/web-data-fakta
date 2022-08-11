<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Database;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $database = \App\Models\Database::All();
        return view('datateknologi.database.indexdatabase',['database'=>$database]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $database = \App\Models\Database::All();
        return view('datateknologi.database.inputdatabase',['database'=>$database]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_db=new \App\Models\Database;
        $tambah_db->judul = $request->judul;
        $tambah_db->keterangan = $request->keterangan;
        $tambah_db->catatan = $request->catatan;
        $tambah_db->sumber = $request->sumber;
        $tambah_db->save();
        return redirect()->route('indexdatabase.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Database::findOrFail($id);
        return view( 'datateknologi.database.detail',['database'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db_edit=\App\Models\Database::findOrFail($id);
        return view('datateknologi.database.editdatabase',['database' => $db_edit]);
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
        $update_db= \App\Models\Database::findOrFail($id);
        $update_db->judul = $request->judul;
        $update_db->keterangan = $request->keterangan;
        $update_db->catatan = $request->catatan;
        $update_db->sumber = $request->sumber;
        $update_db->save();
        return redirect()->route('indexdatabase.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_db = \App\Models\Database::findOrFail($id);
        $hapus_db->delete();
        return redirect()->route( 'indexdatabase.index')->with('success', 'Data Berhasil Dihapus');
    }
}
