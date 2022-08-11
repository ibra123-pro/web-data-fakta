<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Covid;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexCovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covid = \App\Models\Covid::All();
        return view('datakesehatan.covid19.indexcovid19',['covid'=>$covid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $covid = \App\Models\Covid::All();
        return view('datakesehatan.covid19.inputcovid19',['covid'=>$covid]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_covid=new \App\Models\Covid;
        $tambah_covid->judul = $request->judul;
        $tambah_covid->keterangan = $request->keterangan;
        $tambah_covid->catatan = $request->catatan;
        $tambah_covid->sumber = $request->sumber;
        $tambah_covid->save();
        return redirect()->route('indexcovid.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Covid::findOrFail($id);
        return view( 'datakesehatan.covid19.detail',['covid'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $covid_edit=\App\Models\Covid::findOrFail($id);
        return view('datakesehatan.covid19.editcovid19',['covid' => $covid_edit]);
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
        $update_covid= \App\Models\Covid::findOrFail($id);
        $update_covid->judul = $request->judul;
        $update_covid->keterangan = $request->keterangan;
        $update_covid->sumber = $request->sumber;
        $update_covid->save();
        return redirect()->route('indexcovid.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_covid = \App\Models\Covid::findOrFail($id);
        $hapus_covid->delete();
        return redirect()->route( 'indexcovid.index')->with('success', 'Data Berhasil Dihapus');
    }
}
