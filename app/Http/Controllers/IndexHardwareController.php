<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexHardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardware = \App\Models\Hardware::All();
        return view('datateknologi.hardware.indexhardware',['hardware'=>$hardware]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hardware = \App\Models\Hardware::All();
        return view('datateknologi.hardware.inputhardware',['hardware'=>$hardware]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_hw=new \App\Models\Hardware;
        $tambah_hw->judul = $request->judul;
        $tambah_hw->keterangan = $request->keterangan;
        $tambah_hw->catatan = $request->catatan;
        $tambah_hw->sumber = $request->sumber;
        $tambah_hw->save();
        return redirect()->route('indexhardware.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Hardware::findOrFail($id);
        return view( 'datateknologi.hardware.detail',['hardware'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hw_edit=\App\Models\Hardware::findOrFail($id);
        return view('datateknologi.hardware.edithardware',['hardware' => $hw_edit]);
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
        $update_hw= \App\Models\Hardware::findOrFail($id);
        $update_hw->judul = $request->judul;
        $update_hw->keterangan = $request->keterangan;
        $update_hw->catatan = $request->catatan;
        $update_hw->sumber = $request->sumber;
        $update_hw->save();
        return redirect()->route('indexhardware.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_hw = \App\Models\Hardware::findOrFail($id);
        $hapus_hw->delete();
        return redirect()->route( 'indexhardware.index')->with('success', 'Data Berhasil Dihapus');
    }
}
