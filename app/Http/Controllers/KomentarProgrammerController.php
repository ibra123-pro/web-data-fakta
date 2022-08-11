<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;
use Alert;
use App\Models\KomentarProgrammer;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class KomentarProgrammerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komentarprogrammer = \App\Models\KomentarProgrammer::All();
        return view('dataprivasi.datakomentar.komentarprogrammer',['komentarprogrammer'=>$komentarprogrammer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $komentarprogrammer = \App\Models\KomentarProgrammer::All();
        return view('datateknologi.programmer.inputkomentarprogrammer',['komentarprogrammer'=>$komentarprogrammer]);
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
			'nama' => 'required',
            'email' => 'required',
            'komentar' => 'required',
		]); 
        
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $nama = $request->get('nama');
        $email = $request->get('email');
        $komentar = $request->get('komentar');

        $komentarprogrammer = KomentarProgrammer::create([
            'nama' => $nama,
            'tgl' => $tanggal,
            'email' => $email,
            'komentar' => $komentar,
        ]);
        return redirect()->route('komentarprogrammer.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
