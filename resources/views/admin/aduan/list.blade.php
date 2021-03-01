@extends('layouts.card')

@section('title')
    Aduan
@endsection

@section('card_title')
    List Aduan
@endsection

@section('card_content')
    <a href="detail" class="btn btn-primary"><i class="fas fa-info-circle"></i> Detail</a>
    <button class="btn btn-danger" data-toggle="modal" data-target="#modal"><i class="fas fa-trash-alt"></i> Hapus</button>
@endsection

<div class="modal fade" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">Hapus Data</div>
            <div class="modal-body">File akan Terhapus, yakin?</div>
            <div class="modal-footer">
                <form action="" method="POST">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>