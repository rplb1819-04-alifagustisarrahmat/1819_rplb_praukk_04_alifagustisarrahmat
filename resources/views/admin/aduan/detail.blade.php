@extends('layouts.card')

@section('card_title')
    Detail Aduan
@endsection

@section('card_content')
        <div class="form-group">
            <label for="nik">Nik</label>
            <input class="form-control" type="text" name="nik" id="nik" placeholder="" disabled>
        </div>
        <div class="form-group">
            <label for="tgl">Tanggal Pengaduan</label>
            <input class="form-control" type="text" name="tgl" id="tgl" placeholder="" disabled>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input class="form-control" type="text" name="status" id="status" placeholder="" disabled>
        </div>
        <div class="form-group">
            <label for="laporan">Laporan</label>
            <textarea class="form-control" name="laporan" id="laporan" cols="30" rows="5" placeholder="" disabled></textarea>
        </div>
        <div class="form-group">
            <label for="tanggapan">Tanggapan</label>
            <textarea class="form-control" name="tanggapan" id="tanggapan" cols="30" rows="5" placeholder="" disabled></textarea>
        </div>
        <div class="form-group">
            <label for="nama_ptg">Nama Petugas</label>
            <input class="form-control" type="text" name="nama_ptg" id="nama_ptg" placeholder="" disabled>
        </div>
        <div class="form-group">
            <label for="nama_ptg">Foto</label>
            <img class="form-control" src="{{ asset('img/ONLYLOGO.png') }}" alt="foto" class="img-fluid">
        </div>
@endsection

@section('foot_content')
    <a href="masyarakat" class="btn btn-dark my-4"><i class="fas fa-arrow-left"></i> Kembali</a>
@endsection