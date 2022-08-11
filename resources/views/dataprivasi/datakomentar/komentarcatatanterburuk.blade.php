@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Komentar Catatan Terburuk</h1>
</div><hr>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
            <tr align="center">
                <th width="10%">Nama Komentar</th>
                <th width="10%">Tanggal Komentar</th>
                <th width="10%">E-Mail Komentar</th>        
                <th width="10%">Komentar</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach ($komentarcatatanterburuk as $komen)
            <tr>
                <td>{{ $komen->nama }}</td>
                <td>{{ $komen->tgl }}</td>
                <td>{{ $komen->email }}</td>
                <td>{{ $komen->komentar }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </div>
</div>
@endsection