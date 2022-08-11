<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexSoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $software = \App\Models\Software::All();
        return view('datateknologi.software.indexsoftware',['software'=>$software]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $software = \App\Models\Software::All();
        return view('datateknologi.software.inputsoftware',['software'=>$software]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_sw=new \App\Models\Software;
        $tambah_sw->judul = $request->judul;
        $tambah_sw->keterangan = $request->keterangan;
        $tambah_sw->catatan = $request->catatan;
        $tambah_sw->sumber = $request->sumber;
        $tambah_sw->save();
        return redirect()->route('indexsoftware.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Software::findOrFail($id);
        return view( 'datateknologi.software.detailsoftware',['software'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sw_edit=\App\Models\Software::findOrFail($id);
        return view('datateknologi.software.editsoftware',['software' => $software_edit]);
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
        $update_sw= \App\Models\Software::findOrFail($id);
        $update_sw->judul = $request->judul;
        $update_sw->keterangan = $request->keterangan;
        $update_sw->catatan = $request->catatan;
        $update_sw->sumber = $request->sumber;
        $update_sw->save();
        return redirect()->route('indexsoftware.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_sw = \App\Models\Software::findOrFail($id);
        $hapus_sw->delete();
        return redirect()->route( 'indexsoftware.index')->with('success', 'Data Berhasil Dihapus');
    }
}
