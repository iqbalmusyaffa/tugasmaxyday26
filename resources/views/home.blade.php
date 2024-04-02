@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>
    </div>

    <table id="dataTable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nama_barang }}</td>
                <td>{{ $product->deskripsi }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Detail</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection

@section('scripts')
<script>
     $(document).ready(function() {
        $('#dataTable').DataTable({
            "pageLength": 10
        });
    });
</script>
@endsection
