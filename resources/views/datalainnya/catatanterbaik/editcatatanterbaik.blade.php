@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{route('indexcatatanterbaik.update', [$catatanterbaik->id]) }}" method="POST">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<fieldset>
    <legend>Edit Catatan Terbaik</legend>
    <div class="form-group row">
        <div class="col-md-5">
            <label>Judul</label>
			<input type="text" name="judul" class="form-control" value="{{$catatanterbaik->judul}}" required>
        </div>
        <div class="col-md-5">
            <label>Keterangan</label>
			<textarea name="keterangan" class="form-control" required>{{$catatanterbaik->keterangan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-5">
            <label>Catatan</label>
			<textarea name="catatan" class="form-control" required>{{$catatanterbaik->catatan}}</textarea>
        </div>
        <div class="col-md-5">
            <label>Sumber</label>
			<textarea name="sumber" class="form-control" required>{{$catatanterbaik->sumber}}</textarea>
        </div>
    </div>
    <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
