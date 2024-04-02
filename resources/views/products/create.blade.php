<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Produk Baru</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input id="nama_barang" type="text" class="form-control" name="nama_barang" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="form-control" name="deskripsi" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input id="harga" type="number" class="form-control" name="harga" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
