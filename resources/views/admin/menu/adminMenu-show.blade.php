@extends('layout.masterAdmin')

@section('content')
    <div class="content">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $menus->nama_item }}</h1>
                        </div>
                        <img src="/storage/gambar/{{ $menus->gambar }}">
                        <div class="card-body">
                            <p class="card-text">{{ $menus->Harga }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $menus->stok }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $menus->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <a href="{{ url('/adminMenu') }}" class="btn btn-info" title="Kembali">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    @endsection
