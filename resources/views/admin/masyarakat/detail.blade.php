@extends('layouts.card')

@section('card_title')
    Detail Masyarakat
@endsection

@section('card_content')
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="nik">Nik</label>
            <input class="form-control" type="text" name="nik" id="nik" placeholder="" disabled>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" placeholder="" disabled>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="telp">No. Telp.</label>
            <input class="form-control" type="text" name="telp" id="telp" placeholder="" disabled>
        </div>
    </div>
</div>
@endsection

@section('foot_content')
    <a href="masyarakat" class="btn btn-dark my-4"><i class="fas fa-arrow-left"></i> Kembali</a>
@endsection