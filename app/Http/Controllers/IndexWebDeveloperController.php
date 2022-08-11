<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebDeveloper;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexWebDeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webdeveloper = \App\Models\WebDeveloper::All();
        return view('datateknologi.webdeveloper.indexwebdeveloper',['webdeveloper'=>$webdeveloper]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $webdeveloper = \App\Models\WebDeveloper::All();
        return view('datateknologi.webdeveloper.inputwebdeveloper',['webdeveloper'=>$webdeveloper]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_webdeveloper=new \App\Models\WebDeveloper;
        $tambah_webdeveloper->judul = $request->judul;
        $tambah_webdeveloper->keterangan = $request->keterangan;
        $tambah_webdeveloper->catatan = $request->catatan;
        $tambah_webdeveloper->sumber = $request->sumber;
        $tambah_webdeveloper->save();
        return redirect()->route('indexwebdeveloper.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\WebDeveloper::findOrFail($id);
        return view( 'datateknologi.webdeveloper.detailwebdeveloper',['webdeveloper'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $webdeveloper_edit=\App\Models\WebDeveloper::findOrFail($id);
        return view('datateknologi.webdeveloper.editwebdeveloper',['webdeveloper' => $webdeveloper_edit]);
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
        $update_webdeveloper= \App\Models\WebDeveloper::findOrFail($id);
        $update_webdeveloper->judul = $request->judul;
        $update_webdeveloper->keterangan = $request->keterangan;
        $update_webdeveloper->catatan = $request->catatan;
        $update_webdeveloper->sumber = $request->sumber;
        $update_webdeveloper->save();
        return redirect()->route('indexwebdeveloper.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_webdeveloper = \App\Models\WebDeveloper::findOrFail($id);
        $hapus_webdeveloper->delete();
        return redirect()->route( 'indexwebdeveloper.index')->with('success', 'Data Berhasil Dihapus');
    }
}
