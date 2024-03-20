@extends('layout.masterAdmin')

@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Menu Item</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="user-data">
            <div class="user">
                <div class="card mb-3" style="background: transparent; border:none;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/storage/gambar/{{ $menus->gambar }}" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">{{ $menus->nama_item }}</h1>
                                <h5 class="card-body">Rp {{ $menus->harga }}</h5>
                                <h6 class="card-body">Stok : {{ $menus->stok }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header border-3">
                        Deskripsi
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $menus->deskripsi }}</p>
                        <a href="{{ url('/adminMenu') }}" class="btn btn-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
