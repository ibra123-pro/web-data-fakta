@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Web Developer</h1>
</div>
<hr>
<div class="card-header py-3" align="right">
<a href="{{route('indexwebdeveloper.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
    @foreach ($webdeveloper as $web)
        <tr>
            <td>{{$web->judul}}</td>
            <td>{{$web->keterangan}}</td>
            <td>{{$web->sumber}}</td>
            <td align="center">
                <a href="{{route('indexwebdeveloper.edit',[$web->id])}}"class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Edit</a>
                <a href="/indexwebdeveloper/hapus/{{$web->id}}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
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