<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CyberSecurity;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexCyberSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cybersecurity = \App\Models\CyberSecurity::All();
        return view('datateknologi.cybersecurity.indexcybersecurity',['cybersecurity'=>$cybersecurity]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cybersecurity = \App\Models\CyberSecurity::All();
        return view('datateknologi.cybersecurity.inputcybersecurity',['cybersecurity'=>$cybersecurity]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_cs=new \App\Models\CyberSecurity;
        $tambah_cs->judul = $request->judul;
        $tambah_cs->keterangan = $request->keterangan;
        $tambah_cs->catatan = $request->catatan;
        $tambah_cs->sumber = $request->sumber;
        $tambah_cs->save();
        return redirect()->route('indexcybersecurity.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\CyberSecurity::findOrFail($id);
        return view( 'datateknologi.cybersecurity.detail',['cybersecurity'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cs_edit=\App\Models\CyberSecurity::findOrFail($id);
        return view('datateknologi.cybersecurity.editcybersecurity',['cybersecurity' => $cs_edit]);
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
        $update_cs= \App\Models\CyberSecurity::findOrFail($id);
        $update_cs->judul = $request->judul;
        $update_cs->keterangan = $request->keterangan;
        $update_cs->catatan = $request->catatan;
        $update_cs->sumber = $request->sumber;
        $update_cs->save();
        return redirect()->route('indexcybersecurity.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_cs = \App\Models\CyberSecurity::findOrFail($id);
        $hapus_cs->delete();
        return redirect()->route( 'indexcybersecurity.index')->with('success', 'Data Berhasil Dihapus');
    }
}
