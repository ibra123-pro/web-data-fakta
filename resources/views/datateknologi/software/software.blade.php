@extends('layouts.beranda')
@section('content')
@include('sweetalert::alert')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Software</h1>
</div>
<hr>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead class="thead-dark">
        <tr align="center">
            <th width="5%">Judul</th>
            <th width="55%">Keterangan</th>
            <th width="10%">Sumber</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($software as $sw)
        <tr>
            <td>{{$sw->judul}}</td>
            <td>{{$sw->keterangan}}</td>
            <td>{{$sw->sumber}}</td>
            <td align="center">
                <a href="{{route('software.show',[$sw->id])}}"class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Detail</a>
                <a href="{{route('komentarsoftware.create')}}"class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i>Komentar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
</div>
@endsection