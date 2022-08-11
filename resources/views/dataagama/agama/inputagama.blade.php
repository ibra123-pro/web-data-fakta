@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\IndexAgamaController@store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<fieldset>
    <legend>Input Agama</legend>
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
			<label for="file">File Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-2">
			<input type="file" name="file" class="form-control" id="file" required onchange="previewImage()">
		</div>
        <script type="text/javascript">
        function previewImage(){
            const image = document.querySelector('#file');
            const imgPreview = document.querySelector('.img-preview');
            
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        </script>
        <div class="col-md-5">
            <label>Catatan</label>
			<textarea name="catatan" class="form-control" required></textarea>
        </div>
    </div>
    <div class="form-group row">
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
