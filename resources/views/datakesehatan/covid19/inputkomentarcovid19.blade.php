@extends('layouts.beranda')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\KomentarCovidController@store') }}" method="post">
{{ csrf_field() }}
<fieldset>
    <legend>Melakukan Komentar</legend>
    <div class="form-group row">
        <div class="col-md-5">
            <label for="nama">Nama Komentar</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label for="email">E-Mail Komentar</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
    </div>
    <div class="form-group row" >
        <div class="col-md-5">
			<label>Komentar</label>
			<textarea name="komentar" class="form-control" required></textarea>
		</div>
    </div>
    <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Komentar" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
