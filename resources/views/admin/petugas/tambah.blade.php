@extends('layouts.card')

@section('card_title')
 Tambah Petugas
@endsection

@section('card_content')
<form action="" method="POST">
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="pass">Password</label>
            <input class="form-control" type="text" name="pass" id="pass" placeholder="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" id="username" placeholder="">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="telp">No. Telpon</label>
            <input class="form-control" type="text" name="telp" id="telp" placeholder="">
        </div>
    </div>
</div>
<div class="row text-center">
    <div class="col-lg-12"><button class="btn btn-primary" type="submit">Simpan</button></div>
</div>
</form>
@endsection

@section('foot_content')
    <a href="petugas" class="btn btn-dark my-4"><i class="fas fa-arrow-left"></i> Kembali</a>
@endsection