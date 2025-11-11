@extends('layouts.app')

@section('title', 'Produk - CV HARAPAN REZEKI MANDIRI')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-red-900 to-red-950 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Produk Kami</h1>
            <p class="text-xl">Temukan berbagai produk berkualitas untuk kebutuhan Anda</p>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($products && $products->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-56 object-cover">
                @else
                <div class="w-full h-56 bg-gradient-to-br from-blue-400 to-red-900 flex items-center justify-center">
                    <span class="text-white text-5xl">📦</span>
                </div>
                @endif
                <div class="p-4">
                    <h3 class="text-lg font-semibold mb-2 text-gray-800 line-clamp-2">{{ $product->name }}</h3>
                    @if($product->category)
                    <span class="inline-block bg-red-100 text-red-950 text-xs px-2 py-1 rounded mb-3">{{ $product->category }}</span>
                    @endif
                    <p class="text-gray-600 text-sm mb-3 line-clamp-3">{{ $product->description }}</p>
                    @if($product->price)
                    <p class="text-xl font-bold text-red-900 mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    @endif
                    <a href="{{ route('contact') }}" class="block text-center bg-red-900 text-white px-4 py-2 rounded hover:bg-red-950 transition">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $products->links() }}
        </div>
        @else
        <div class="text-center py-16">
            <div class="text-6xl mb-4">📦</div>
            <p class="text-xl text-gray-600">Belum ada produk yang tersedia</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4 text-gray-800">Tidak Menemukan Produk yang Anda Cari?</h2>
        <p class="text-xl text-gray-600 mb-8">Hubungi kami untuk informasi produk lainnya</p>
        <a href="{{ route('contact') }}" class="inline-block bg-red-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-950 transition">Hubungi Kami</a>
    </div>
</section>
@endsection
