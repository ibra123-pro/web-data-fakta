@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Obat</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('indexagama.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
</a>
</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
            <th width="5%">Judul</th>
            <th width="55%">Keterangan</th>
            <th width="10%">Sumber</th>
            <th width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($obat as $obt)
        <tr>
            <td>{{$obt->judul}}</td>
            <td>{{$obt->keterangan}}</td>
            <td>{{$obt->sumber}}</td>
            <td align="center">
                <a href="{{route('indexobat.show',[$obt->id])}}"class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Detail</a>
                <a href="{{route('indexobat.edit',[$obt->id])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
                <a href="/indexobat/hapus/{{$obt->id}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                <i class="fas fa-trash-alt fa-sm text-white-50"></i>Hapus</a>
            </td>
    @endforeach
        </tr>
    </tbody>
    </table>
</div>
</div>
</div>
@endsection