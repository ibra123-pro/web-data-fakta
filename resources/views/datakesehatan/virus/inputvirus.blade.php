@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\IndexVirusController@store') }}" method="post">
{{ csrf_field() }}
<fieldset>
    <legend>Input Virus</legend>
    <div class="form-group row">
        <div class="col-md-5">
            <label>Judul</label>
			<input type="text" name="judul" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label>Keterangan</label>
			<textarea name="keterangan" class="form-control" required></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-5">
            <label>Catatan</label>
			<textarea name="catatan" class="form-control" required></textarea>
        </div>
        <div class="col-md-5">
            <label>Sumber</label>
			<textarea name="sumber" class="form-control" required></textarea>
        </div>
    </div>
    <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Simpan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
