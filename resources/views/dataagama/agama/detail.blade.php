@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="" method="POST">
{{ csrf_field() }}
<fieldset>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Judul</label>
			<input type="text" name="judul" class="form-control" value="{{$agama->judul}}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Foto Keterangan</label>
			<div><img width="10%" src="{{asset('storage/' . $agama->file)}}" ></div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Keterangan</label>
			<textarea name="keterangan" class="form-control" disabled>{{$agama->keterangan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Catatan</label>
			<textarea name="catatan" class="form-control" disabled>{{$agama->catatan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Sumber</label>
			<textarea href="{{$agama->sumber}}" name="sumber" class="form-control" disabled>{{$agama->sumber}}</textarea>
        </div>
    </div>
    <div class="col-md-10">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
