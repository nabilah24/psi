@extends('layout.masterAdmin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Tambah Item Menu</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('adminMenu.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_item" class="form-label">Nama Item</label>
                            <input type="text" class="form-control @error('nama_item') is-invalid @enderror"
                                id="nama_item" name="nama_item" placeholder="Masukkan nama item">
                            @error('nama_item')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                                name="harga" placeholder="Masukkan harga item">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok"
                                name="stok" placeholder="Masukkan stok item">
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                                name="gambar">
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('adminMenu.index') }}" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
