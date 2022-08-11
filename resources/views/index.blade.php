@extends('layouts.beranda')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    {{ __('Selamat Datang Di Situs Data Fakta, Situs Ini Merupakan Data Fakta 100% Jika Dari Kalian Menemukan Data Kami Tidak Akurat, Hoax, Atau Yang Tidak Sesuai, Dan Lain - Lain Boleh Kalian Komentar.' ) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
