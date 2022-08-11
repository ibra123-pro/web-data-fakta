@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{route('indexagama.update', [$agama->id]) }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<fieldset>
    <legend>Edit Agama</legend>
    <div class="form-group row">
        <div class="col-md-5">
            <label>Judul</label>
			<input type="text" name="judul" class="form-control" value="{{$agama->judul}}" required>
        </div>
        <div class="col-md-5">
            <label>Keterangan</label>
			<textarea name="keterangan" class="form-control" required>{{$agama->keterangan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-5">
            <label for="file">File Gambar</label>
            <input type="hidden" name="oldImage" value="{{$agama->file}}">
            @if($agama->file)
            <img src="{{asset('storage/' . $agama->file)}}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-2">
            @endif
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
			<textarea name="catatan" class="form-control" required>{{$agama->catatan}}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-5">
            <label>Sumber</label>
			<textarea name="sumber" class="form-control" required>{{$agama->sumber}}</textarea>
        </div>
    </div>
    <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Edit" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
