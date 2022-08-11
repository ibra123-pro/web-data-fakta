<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AndroidDeveloper;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexAndroidDeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $androiddeveloper = \App\Models\AndroidDeveloper::All();
        return view('datateknologi.androiddeveloper.indexandroiddeveloper',['androiddeveloper'=>$androiddeveloper]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $androiddeveloper = \App\Models\AndroidDeveloper::All();
        return view('datateknologi.androiddeveloper.inputandroiddeveloper',['androiddeveloper'=>$androiddeveloper]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_androiddeveloper=new \App\Models\AndroidDeveloper;
        $tambah_androiddeveloper->judul = $request->judul;
        $tambah_androiddeveloper->keterangan = $request->keterangan;
        $tambah_androiddeveloper->catatan = $request->catatan;
        $tambah_androiddeveloper->sumber = $request->sumber;
        $tambah_androiddeveloper->save();
        return redirect()->route('indexandroiddeveloper.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\AndroidDeveloper::findOrFail($id);
        return view( 'datateknologi.androiddeveloper.detailandroiddeveloper',['androiddeveloper'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $androiddeveloper_edit=\App\Models\AndroidDeveloper::findOrFail($id);
        return view('datateknologi.androiddeveloper.editandroiddeveloper',['androiddeveloper' => $androiddeveloper_edit]);
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
        $update_androiddeveloper= \App\Models\AndroidDeveloper::findOrFail($id);
        $update_androiddeveloper->judul = $request->judul;
        $update_androiddeveloper->keterangan = $request->keterangan;
        $update_androiddeveloper->catatan = $request->catatan;
        $update_androiddeveloper->sumber = $request->sumber;
        $update_androiddeveloper->save();
        return redirect()->route('indexandroiddeveloper.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_androiddeveloper = \App\Models\AndroidDeveloper::findOrFail($id);
        $hapus_androiddeveloper->delete();
        return redirect()->route( 'indexandroiddeveloper.index')->with('success', 'Data Berhasil Dihapus');
    }
}
