<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anonymous;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexAnonymousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anonymous = \App\Models\Anonymous::All();
        return view('datateknologi.anonymous.indexanonymous',['anonymous'=>$anonymous]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anonymous = \App\Models\Anonymous::All();
        return view('datateknologi.anonymous.inputanonymous',['anonymous'=>$anonymous]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah_anonymous=new \App\Models\Anonymous;
        $tambah_anonymous->judul = $request->judul;
        $tambah_anonymous->keterangan = $request->keterangan;
        $tambah_anonymous->catatan = $request->catatan;
        $tambah_anonymous->sumber = $request->sumber;
        $tambah_anonymous->save();
        return redirect()->route('indexanonymous.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Anonymous::findOrFail($id);
        return view( 'datateknologi.anonymous.detail',['anonymous'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anonymous_edit=\App\Models\Anonymous::findOrFail($id);
        return view('datateknologi.anonymous.editanonymous',['anonymous' => $anonymous_edit]);
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
        $update_anonymous= \App\Models\Anonymous::findOrFail($id);
        $update_anonymous->judul = $request->judul;
        $update_anonymous->keterangan = $request->keterangan;
        $update_anonymous->catatan = $request->catatan;
        $update_anonymous->sumber = $request->sumber;
        $update_anonymous->save();
        return redirect()->route('indexanonymous.index')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_anonymous = \App\Models\Anonymous::findOrFail($id);
        $hapus_anonymous->delete();
        return redirect()->route( 'indexanonymous.index')->with('success', 'Data Berhasil Dihapus');
    }
}
