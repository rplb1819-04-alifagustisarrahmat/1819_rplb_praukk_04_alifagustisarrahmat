@extends('layouts.card')

@section('card_title')
    Detail Petugas
@endsection

@section('card_content')
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="" disabled>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="pass">Password</label>
            <input class="form-control" type="text" name="pass" id="pass" placeholder="" disabled>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="" disabled>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="telp">No. Telpon</label>
            <input class="form-control" type="text" name="telp" id="telp" placeholder="" disabled>
        </div>
    </div>
</div>
@endsection

@section('foot_content')
    <a href="petugas" class="btn btn-dark my-4"><i class="fas fa-arrow-left"></i> Kembali</a>
@endsection