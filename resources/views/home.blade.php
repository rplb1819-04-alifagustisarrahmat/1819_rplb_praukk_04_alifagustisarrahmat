@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4 justify-content-center">
        <div class="col-lg-10"><h1>Dashboard</h1></div>
    </div>
    <div class="row my-4 justify-content-center">
        <div class="col-lg-10"><h3>Selamat Datang {{ Auth::user()->name }}, di aplikasi Pelaporan Pengaduan Masyarakat</h3></div>
    </div>

    <div class="row text-center justify-content-center">
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-header bg-transparent border-0"><h3>Pengguna</h3></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col"><span><i class="fas fa-users fa-4x"></i></span></div>
                        <div class="col"><h1>0</h1></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-header bg-transparent border-0"><h3>Petugas</h3></div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col"><span><i class="fas fa-users fa-4x"></i></span></div>
                        <div class="col"><h4>0</h4></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-header bg-transparent border-0"><h3>Aduan</h3></div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col"><span><i class="fas fa-hourglass-end fa-4x"></i></span></div>
                        <div class="col"><h4>0</h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-4">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    Tabel Log
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </div>
    
</div>
@endsection
