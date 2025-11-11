@extends('layouts.app')

@section('title', 'Beranda - CV HARAPAN REZEKI MANDIRI')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-red-900 to-red-950 text-white relative overflow-hidden">
        <!-- Dayak Pattern Background -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute -top-10 -left-10 w-96 h-96"
                style="background-image: url('{{ asset('images/dayak-motif.svg') }}'); background-size: contain; background-repeat: no-repeat;">
            </div>
            <div class="absolute -bottom-10 -right-10 w-96 h-96"
                style="background-image: url('{{ asset('images/dayak-motif.svg') }}'); background-size: contain; background-repeat: no-repeat; transform: rotate(180deg);">
            </div>
        </div>
        <!-- Border Pattern Top & Bottom -->
        <div class="absolute top-0 left-0 right-0 h-2 opacity-50"
            style="background-image: url('{{ asset('images/dayak-pattern.svg') }}'); background-repeat: repeat-x; background-size: 100px;">
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-2 opacity-50"
            style="background-image: url('{{ asset('images/dayak-pattern.svg') }}'); background-repeat: repeat-x; background-size: 100px;">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">CV HARAPAN REZEKI MANDIRI</h1>
                <p class="text-xl md:text-2xl mb-8">Mitra Terpercaya dalam Pengadaan Barang dan Jasa</p>
                <div class="space-x-4">
                    <a href="{{ route('services') }}"
                        class="inline-block bg-white text-red-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Lihat
                        Layanan</a>
                    <a href="{{ route('contact') }}"
                        class="inline-block border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-red-900 transition">Hubungi
                        Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 relative">
        <!-- Decorative Pattern - Tugu Kapuas & Dayak -->
        <div class="absolute top-10 left-10 w-48 h-48 opacity-10">
            <img src="{{ asset('images/tugu-kapuas.svg') }}" alt="" class="w-full h-full">
        </div>
        <div class="absolute top-10 right-10 w-48 h-48 opacity-10">
            <img src="{{ asset('images/dayak-pattern.svg') }}" alt="" class="w-full h-full">
        </div>
        <div class="absolute bottom-10 left-10 w-48 h-48 opacity-10">
            <img src="{{ asset('images/dayak-motif.svg') }}" alt="" class="w-full h-full">
        </div>
        <div class="absolute bottom-10 right-10 w-48 h-48 opacity-10" style="transform: rotate(180deg);">
            <img src="{{ asset('images/tugu-kapuas.svg') }}" alt="" class="w-full h-full">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                <div class="flex items-center justify-center gap-2">
                    <div class="w-8 h-1 bg-red-900"></div>
                    <div class="w-4 h-1 bg-red-900"></div>
                    <div class="w-8 h-1 bg-red-900"></div>
                </div>
            </div>
            @if ($companyInfo)
                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{ $companyInfo->about }}
                    </p>
                </div>
            @endif
            <div class="text-center mt-8">
                <a href="{{ route('about') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Selengkapnya →</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    @if ($services && $services->count() > 0)
        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
                    <div class="w-20 h-1 bg-red-900 mx-auto"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center max-w-5xl mx-auto">
                    @foreach ($services as $service)
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition w-full max-w-sm">
                            <div class="text-4xl mb-4 text-center">{{ $service->icon ?? '📦' }}</div>
                            <h3 class="text-xl font-semibold mb-3 text-gray-800 text-center">{{ $service->name }}</h3>
                            <p class="text-gray-600 text-center">{{ $service->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-8">
                    <a href="{{ route('services') }}" class="text-red-900 hover:text-red-950 font-semibold">Lihat Semua
                        Layanan →</a>
                </div>
            </div>
        </section>
    @endif

    {{-- Products Section - HIDDEN --}}
    {{-- @if ($products && $products->count() > 0)
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Produk Kami</h2>
            <div class="w-20 h-1 bg-red-900 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gradient-to-br from-red-800 to-red-950 flex items-center justify-center">
                    <span class="text-white text-4xl">📦</span>
                </div>
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">{{ $product->name }}</h3>
                    @if ($product->category)
                    <span class="inline-block bg-red-100 text-red-900 text-xs px-2 py-1 rounded mb-3">{{ $product->category }}</span>
                    @endif
                    <p class="text-gray-600 mb-4">{{ Str::limit($product->description, 100) }}</p>
                    @if ($product->price)
                    <p class="text-2xl font-bold text-red-900">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-8">
            <a href="{{ route('products') }}" class="inline-block bg-red-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-950 transition">Lihat Semua Produk</a>
        </div>
    </div>
</section>
@endif --}}

    <!-- CTA Section -->
    <section class="py-16 bg-red-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Untuk Bekerja Sama?</h2>
            <p class="text-xl mb-8">Hubungi kami sekarang untuk mendapatkan penawaran terbaik</p>
            <a href="{{ route('contact') }}"
                class="inline-block bg-white text-red-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Hubungi
                Kami</a>
        </div>
    </section>
@endsection
