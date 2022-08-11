@extends('layouts.beranda')
@section('content') 
@include('sweetalert::alert')
<form action="" method="POST">
{{ csrf_field() }}
<fieldset>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Judul</label>
			<input type="text" name="judul" class="form-control" value="{{$beritaterupdate->judul}}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Tanggal Update</label>
			<input type="date" name="tanggal" class="form-control" value="{{$beritaterupdate->tanggal}}" disabled>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Keterangan</label>
			<textarea name="keterangan" class="form-control" disabled>{{$beritaterupdate->keterangan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Catatan</label>
			<textarea name="catatan" class="form-control" disabled>{{$beritaterupdate->catatan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10">
            <label>Sumber</label>
			<textarea name="sumber" class="form-control" disabled>{{$beritaterupdate->sumber}}</textarea>
        </div>
    </div>
    <div class="col-md-10">
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
