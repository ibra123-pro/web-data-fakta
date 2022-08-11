<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Agama;
use Alert;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class IndexAgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agama = \App\Models\Agama::All();
        return view('dataagama.agama.indexagama',['agama'=>$agama]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agama = \App\Models\Agama::All();
        return view('dataagama.agama.inputagama',['agama'=>$agama]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'file' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10000'
		]);

        
        $agama= new \App\Models\Agama;
        $agama->judul = $request->input('judul');
        $agama->keterangan = $request->input('keterangan');
        $agama->file = $request->file('file')->store('foto-agama');
        $agama->catatan = $request->input('catatan');
        $agama->sumber = $request->input('sumber');
        $agama->save();
        return redirect()->route('indexagama.index')->with('success', 'Data Berhasil Disimpan');
        /*
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
			'file' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'catatan' => 'required',
            'sumber' => 'required',
		]);

        $judul = $request->get('judul');
        $keterangan = $request->get('keterangan');
        $file = $request->file('file')->store('foto-agama');
        $catatan = $request->get('catatan');
        $sumber = $request->get('sumber');

        $agama = Agama::create([
            'judul' => $judul,
            'keterangan' => $keterangan,                
            'file' => $file,
            'catatan' => $catatan,
            'sumber' => $sumber,
        ])->first();
            return redirect()->route('indexagama.index')->with('success', 'Data Berhasil Disimpan');
            */
    }
    /*
        $tambah_agama=new \App\Models\Agama;
        $tambah_agama->judul = $request->judul;
        $tambah_agama->keterangan = $request->keterangan;
        $tambah_agama->catatan = $request->catatan;
        $tambah_agama->sumber = $request->sumber;
        $tambah_agama->save();
        return redirect()->route('indexagama.index')->with('success', 'Data Berhasil Disimpan');
        
    }
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = \App\Models\Agama::findOrFail($id);
        return view( 'dataagama.agama.detail',['agama'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agama_edit=\App\Models\Agama::findOrFail($id);
        return view('dataagama.agama.editagama',['agama' => $agama_edit]);
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
        $this->validate($request, [
			'file' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10000'
		]);

        
        $agama= \App\Models\Agama::findOrFail($id);
        $agama->judul = $request->input('judul');
        $agama->keterangan = $request->input('keterangan');
        if($request->file('file')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $agama->file = $request->file('file')->store('foto-agama');
        }
        $agama->catatan = $request->input('catatan');
        $agama->sumber = $request->input('sumber');
        $agama->save();
        return redirect()->route('indexagama.index')->with('success', 'Data Berhasil Diupdate');

        /*
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
			'file' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'catatan' => 'required',
            'sumber' => 'required',
		]);

        $id = $request->get('id');
        $judul = $request->get('judul');
        $keterangan = $request->get('keterangan');
        $file = $request->file('file')->store('foto-agama');
        $catatan = $request->get('catatan');
        $sumber = $request->get('sumber');

         $agama = Agama::update([
            'judul' => $judul,
            'keterangan' => $keterangan,                
            'file' => $file,
            'catatan' => $catatan,
            'sumber' => $sumber,
        ])->first();
            return redirect()->route('indexagama.index')->with('success', 'Data Berhasil Disimpan');
        */
        
        /*
        $update_agama= \App\Models\Agama::findOrFail($id);
        $update_agama->judul = $request->judul;
        $update_agama->keterangan = $request->keterangan;
        $update_agama->catatan = $request->catatan;
        $update_agama->sumber = $request->sumber;
        $update_agama->save();
        return redirect()->route('indexagama.index')->with('success', 'Data Berhasil Diupdate');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_agama = \App\Models\Agama::findOrFail($id);
        if($hapus_agama->file){
            Storage::delete($hapus_agama->file);
        }
        $hapus_agama->delete();
        return redirect()->route( 'indexagama.index')->with('success', 'Data Berhasil Dihapus');
    }
}
