<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanTerbaik;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexCatatanTerbaikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatanterbaik = \App\Models\CatatanTerbaik::All();
        return view('datalainnya.catatanterbaik.indexcatatanterbaik',['catatanterbaik'=>$catatanterbaik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catatanterbaik = \App\Models\CatatanTerbaik::All();
        return view('datalainnya.catatanterbaik.inputcatatanterbaik',['catatanterbaik'=>$catatanterbaik]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_ct=new \App\Models\CatatanTerbaik;
        $tambah_ct->judul = $request->judul;
        $tambah_ct->keterangan = $request->keterangan;
        $tambah_ct->catatan = $request->catatan;
        $tambah_ct->sumber = $request->sumber;
        $tambah_ct->save();
        return redirect()->route('indexcatatanterbaik.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\CatatanTerbaik::findOrFail($id);
        return view( 'datalainnya.catatanterbaik.detail',['catatanterbaik'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ct_edit=\App\Models\CatatanTerbaik::findOrFail($id);
        return view('datalainnya.catatanterbaik.editcatatanterbaik',['catatanterbaik' => $ct_edit]);
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
        $update_ct= \App\Models\CatatanTerbaik::findOrFail($id);
        $update_ct->judul = $request->judul;
        $update_ct->keterangan = $request->keterangan;
        $update_ct->catatan = $request->catatan;
        $update_ct->sumber = $request->sumber;
        $update_ct->save();
        return redirect()->route('indexcatatanterbaik.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_ct = \App\Models\CatatanTerbaik::findOrFail($id);
        $hapus_ct->delete();
        return redirect()->route( 'indexcatatanterbaik.index')->with('success', 'Data Berhasil Dihapus');
    }
}
