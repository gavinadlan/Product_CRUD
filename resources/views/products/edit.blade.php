@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1">Nama Produk</label>
            <input type="text" name="name" class="w-full p-2 border rounded" value="{{ $product->name }}" required maxlength="100">
        </div>

        <div>
            <label class="block mb-1">Deskripsi</label>
            <textarea name="description" class="w-full p-2 border rounded">{{ $product->description }}</textarea>
        </div>

        <div>
            <label class="block mb-1">Harga</label>
            <input type="number" step="0.01" name="price" class="w-full p-2 border rounded" value="{{ $product->price }}" required>
        </div>

        <div>
            <label class="block mb-1">Stok</label>
            <input type="number" name="stock" class="w-full p-2 border rounded" value="{{ $product->stock }}">
        </div>

        <div class="flex justify-end">
            <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-300 rounded mr-2">Batal</a>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
        </div>
    </form>
</div>
@endsection
