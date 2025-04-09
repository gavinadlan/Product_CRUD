@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

    @if(session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Tambah Produk
    </a>

    <table class="w-full mt-6 table-auto border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Harga</th>
                <th class="border px-4 py-2">Stok</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="text-center">
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $product->name }}</td>
                <td class="border px-4 py-2">Rp{{ number_format($product->price, 2, ',', '.') }}</td>
                <td class="border px-4 py-2">{{ $product->stock }}</td>
                <td class="border px-4 py-2 flex justify-center gap-2">
                    <a href="{{ route('products.edit', $product) }}" class="text-yellow-600 hover:underline">Edit</a>

                    <!-- Tombol buka modal -->
                    <button type="button"
                        class="text-red-600 hover:underline"
                        onclick="document.getElementById('modal-{{ $product->id }}').showModal()">
                        Hapus
                    </button>

                    <!-- Modal konfirmasi -->
                    <dialog id="modal-{{ $product->id }}" class="rounded-md p-0 w-96 backdrop:bg-black/50">
                        <form method="POST" action="{{ route('products.destroy', $product) }}">
                            @csrf
                            @method('DELETE')
                            <div class="p-6">
                                <h2 class="text-lg font-semibold mb-4">Konfirmasi Hapus</h2>
                                <p class="text-gray-600 mb-6">Yakin ingin menghapus produk <strong>{{ $product->name }}</strong>?</p>
                                <div class="flex justify-end gap-2">
                                    <button type="button"
                                        onclick="document.getElementById('modal-{{ $product->id }}').close()"
                                        class="bg-gray-300 hover:bg-gray-400 px-4 py-2 rounded">
                                        Batal
                                    </button>
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </form>
                    </dialog>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
