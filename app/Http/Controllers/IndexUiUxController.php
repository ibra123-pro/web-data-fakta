<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UiUx;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexUiUxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uiux = \App\Models\UiUx::All();
        return view('datateknologi.uiux.indexuiux',['uiux'=>$uiux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uiux = \App\Models\UiUx::All();
        return view('datateknologi.uiux.inputuiux',['uiux'=>$uiux]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_uiux=new \App\Models\UiUx;
        $tambah_uiux->judul = $request->judul;
        $tambah_uiux->keterangan = $request->keterangan;
        $tambah_uiux->catatan = $request->catatan;
        $tambah_uiux->sumber = $request->sumber;
        $tambah_uiux->save();
        return redirect()->route('indexuiux.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\UiUx::findOrFail($id);
        return view( 'datateknologi.uiux.detailuiux',['uiux'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uiux_edit=\App\Models\UiUx::findOrFail($id);
        return view('datateknologi.uiux.edituiux',['uiux' => $uiux_edit]);
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
        $update_uiux= \App\Models\UiUx::findOrFail($id);
        $update_uiux->judul = $request->judul;
        $update_uiux->keterangan = $request->keterangan;
        $update_uiux->catatan = $request->catatan;
        $update_uiux->sumber = $request->sumber;
        $update_uiux->save();
        return redirect()->route('indexuiux.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_uiux = \App\Models\UiUx::findOrFail($id);
        $hapus_uiux->delete();
        return redirect()->route( 'indexuiux.index')->with('success', 'Data Berhasil Dihapus');
    }
}
