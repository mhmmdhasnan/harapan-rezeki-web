@extends('layouts.app')

@section('title', 'Layanan - CV HARAPAN REZEKI MANDIRI')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-red-900 to-red-950 text-white py-20 relative overflow-hidden">
    <!-- Dayak Pattern Background -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute -top-10 -left-10 w-80 h-80" style="background-image: url('{{ asset('images/dayak-motif.svg') }}'); background-size: contain; background-repeat: no-repeat;"></div>
        <div class="absolute -bottom-10 -right-10 w-80 h-80" style="background-image: url('{{ asset('images/dayak-motif.svg') }}'); background-size: contain; background-repeat: no-repeat; transform: rotate(180deg);"></div>
    </div>
    <!-- Border Pattern -->
    <div class="absolute top-0 left-0 right-0 h-2 opacity-50" style="background-image: url('{{ asset('images/dayak-pattern.svg') }}'); background-repeat: repeat-x; background-size: 100px;"></div>
    <div class="absolute bottom-0 left-0 right-0 h-2 opacity-50" style="background-image: url('{{ asset('images/dayak-pattern.svg') }}'); background-repeat: repeat-x; background-size: 100px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Products & Services</h1>
            <p class="text-xl">Solusi terbaik untuk kebutuhan bisnis Anda</p>
        </div>
    </div>
</section>

<!-- Main Services Section -->
@if($services && $services->count() > 0)
@php
    $mainServices = $services->whereIn('name', ['BOGA (Catering)', 'INSTALASI & CONFIGURE', 'EQUIPMENT EVENT']);
    $otherServices = $services->whereNotIn('name', ['BOGA (Catering)', 'INSTALASI & CONFIGURE', 'EQUIPMENT EVENT']);
@endphp

@if($mainServices->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl">
                @foreach($mainServices as $service)
                <div class="bg-white p-10 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                    <div class="flex justify-center mb-6">
                        <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center">
                            <span class="text-5xl">{{ $service->icon ?? '🔧' }}</span>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-red-900 text-center">{{ $service->name }}</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-6">{{ $service->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

<!-- Other Services Section -->
@if($otherServices->count() > 0)
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Layanan Lainnya</h2>
            <div class="w-20 h-1 bg-red-900 mx-auto"></div>
        </div>
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl">
                @foreach($otherServices as $service)
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition transform hover:-translate-y-2">
                    <div class="text-6xl mb-6 text-center">{{ $service->icon ?? '🔧' }}</div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 text-center">{{ $service->name }}</h3>
                    <p class="text-gray-600 leading-relaxed text-center">{{ $service->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

@else
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center py-16">
            <div class="text-6xl mb-4">🔧</div>
            <p class="text-xl text-gray-600">Belum ada layanan yang tersedia</p>
        </div>
    </div>
</section>
@endif

<!-- Benefits Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Keunggulan Layanan Kami</h2>
            <div class="w-20 h-1 bg-red-900 mx-auto"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">⚡</span>
                </div>
                <h4 class="font-bold text-xl mb-3 text-gray-800">EFISIENSI</h4>
                <p class="text-gray-600 leading-relaxed">Menerapkan Manajemen mutu serta pengendalian waktu dan biaya secara efisien</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">🏆</span>
                </div>
                <h4 class="font-bold text-xl mb-3 text-gray-800">KUALITAS</h4>
                <p class="text-gray-600 leading-relaxed">Mengutamakan standar kualitas tinggi dalam setiap produk dan layanan yang kami berikan untuk kepuasan pelanggan</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">👥</span>
                </div>
                <h4 class="font-bold text-xl mb-3 text-gray-800">PROFESIONALITAS</h4>
                <p class="text-gray-600 leading-relaxed">Profesionalitas dalam kerja sebagai jaminan bagi integritas perusahaan</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">�</span>
                </div>
                <h4 class="font-bold text-xl mb-3 text-gray-800">INOVASI</h4>
                <p class="text-gray-600 leading-relaxed">Terus berinovasi dengan kreatifitas & teknologi demi karya yang sesuai dengan tuntutan zaman</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-red-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Butuh Konsultasi?</h2>
        <p class="text-xl mb-8">Tim kami siap membantu memberikan solusi terbaik untuk Anda</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-red-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Hubungi Kami Sekarang</a>
    </div>
</section>
@endsection
