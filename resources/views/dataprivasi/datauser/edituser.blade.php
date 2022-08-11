@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('user.update', [$user->id])}}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Ubah Akses User</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="user">Nama User</label>
                <input id="name" type="text" name="uname" class="form-control" value="{{$user->name}}" required>
            </div>
            <div class="col-md-5">
                <label for="email">Email</label>
                <input id="email" type="text" name="email" class="form-control" value="{{$user->email}}" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
			    <label>Foto Gambar</label>
			    <input type="file" name="foto" class="form-control">
		    </div>
            <div class="col-md-5">
                @foreach ($user ->roles as $role)
                <label for="akses">Akses</label>
                <input id="akses" type="text" name="akses" class="form-control" value="{{$role->id}}"readonly>
                @endforeach
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="akses">Ubah Akses</label>
                <select id="roles" name="role" class="form-control" required> 
                    <option value="">--Pilih Akses--</option>
                    <option value="ADMIN">1.Admin</option>
                    <option value="STAFF">2.Staff</option>
                </select>
            </div>
        </div>
    </fieldset>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Ubah Akses">
        <a href="{{ route('user.index') }}"><input type="Button" class="btn btn-primary btn-send" value="Kembali"></a>
    </div>
    <hr>
</form>
@endsection
