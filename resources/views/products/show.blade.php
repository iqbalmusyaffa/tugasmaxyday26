@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Detail Produk
            <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Kembali ke Daftar Produk</a>
        </div>
        <div class="card-body">
            <div>
                <strong>ID:</strong> {{ $product->id }}
            </div>
            <div>
                <strong>Nama Barang:</strong> {{ $product->nama_barang }}
            </div>
            <div>
                <strong>Deskripsi:</strong> {{ $product->deskripsi }}
            </div>
            <div>
                <strong>Harga:</strong> {{ $product->harga }}
            </div>
            <div>
                <strong>Dibuat pada:</strong> {{ $product->created_at }}
            </div>
            <div>
                <strong>Diperbarui pada:</strong> {{ $product->updated_at }}
            </div>
        </div>
        <div class="card-footer">
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
            </form>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
