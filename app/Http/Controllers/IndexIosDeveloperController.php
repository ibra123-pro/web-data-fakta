<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IosDeveloper;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexIosDeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iosdeveloper = \App\Models\IosDeveloper::All();
        return view('datateknologi.iosdeveloper.indexiosdeveloper',['iosdeveloper'=>$iosdeveloper]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iosdeveloper = \App\Models\IosDeveloper::All();
        return view('datateknologi.iosdeveloper.inputiosdeveloper',['iosdeveloper'=>$iosdeveloper]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_iosdeveloper=new \App\Models\IosDeveloper;
        $tambah_iosdeveloper->judul = $request->judul;
        $tambah_iosdeveloper->keterangan = $request->keterangan;
        $tambah_iosdeveloper->catatan = $request->catatan;
        $tambah_iosdeveloper->sumber = $request->sumber;
        $tambah_iosdeveloper->save();
        return redirect()->route('indexiosdeveloper.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\IosDeveloper::findOrFail($id);
        return view( 'datateknologi.iosdeveloper.detailiosdeveloper',['iosdeveloper'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iosdeveloper_edit=\App\Models\IosDeveloper::findOrFail($id);
        return view('datateknologi.iosdeveloper.editiosdeveloper',['iosdeveloper' => $iosdeveloper_edit]);
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
        $update_iosdeveloper= \App\Models\IosDeveloper::findOrFail($id);
        $update_iosdeveloper->judul = $request->judul;
        $update_iosdeveloper->keterangan = $request->keterangan;
        $update_iosdeveloper->catatan = $request->catatan;
        $update_iosdeveloper->sumber = $request->sumber;
        $update_iosdeveloper->save();
        return redirect()->route('indexiosdeveloper.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_iosdeveloper = \App\Models\IosDeveloper::findOrFail($id);
        $hapus_iosdeveloper->delete();
        return redirect()->route( 'indexiosdeveloper.index')->with('success', 'Data Berhasil Dihapus');
    }
}
