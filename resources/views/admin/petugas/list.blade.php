@extends('layouts.card')

@section('title')
    Petugas
@endsection

@section('card_title')
    List Petugas
@endsection

@section('button')
    <a href="tambah" class="btn btn-success float-right"><i class="fas fa-plus"></i> Tambah Petugas</a>
@endsection

@section('card_content')
    <div class="row">
        <div class="col-lg-12">
 
{{ $dataTable->table() }}


        </div>
    </div>
    {{-- <a href="detail" class="btn btn-primary"><i class="fas fa-info-circle"></i> Detail</a>
    <a href="edit" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
    <button class="btn btn-danger" data-toggle="modal" data-target="#modal"><i class="fas fa-trash-alt"></i> Hapus</button> --}}
@endsection





{{ $dataTable->scripts() }}