@extends('layouts.app')

@section('title', 'Kontak - CV HARAPAN REZEKI MANDIRI')

@section('content')
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

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
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
            <p class="text-xl">Kami siap membantu kebutuhan bisnis Anda</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                
                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 @error('name') border-red-500 @enderror">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 @error('email') border-red-500 @enderror">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 @error('subject') border-red-500 @enderror">
                        @error('subject')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-red-500 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full bg-red-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-950 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>
                
                @if($companyInfo)
                <div class="space-y-6">
                    @if($companyInfo->address)
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📍</div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Alamat</h3>
                            <p class="text-gray-600">{{ $companyInfo->address }}</p>
                        </div>
                    </div>
                    @endif

                    @if($companyInfo->phone)
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📞</div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Telepon</h3>
                            <p class="text-gray-600">{{ $companyInfo->phone }}</p>
                        </div>
                    </div>
                    @endif

                    @if($companyInfo->email)
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📧</div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Email</h3>
                            <p class="text-gray-600">{{ $companyInfo->email }}</p>
                        </div>
                    </div>
                    @endif
                </div>
                @else
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📍</div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Alamat</h3>
                            <p class="text-gray-600">Jakarta, Indonesia</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📞</div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Telepon</h3>
                            <p class="text-gray-600">+62 xxx-xxxx-xxxx</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📧</div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 mb-1">Email</h3>
                            <p class="text-gray-600">info@harapanrezeki.com</p>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Business Hours - HIDDEN
                <div class="mt-8 bg-red-50 p-6 rounded-lg">
                    <h3 class="font-semibold text-lg text-gray-800 mb-4">Jam Operasional</h3>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span>Senin - Jumat</span>
                            <span class="font-semibold">08:00 - 17:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sabtu</span>
                            <span class="font-semibold">08:00 - 13:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Minggu</span>
                            <span class="font-semibold text-red-600">Tutup</span>
                        </div>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
            <div class="w-20 h-1 bg-red-900 mx-auto"></div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
            <div id="map" style="height: 450px; width: 100%;"></div>
        </div>
    </div>
</section>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    // Koordinat Palangkaraya, Kalimantan Tengah
    // Jl. Pilau Indah No 29, Panarung, Pahandut
    var lat = -2.2090;  // Latitude Palangkaraya
    var lng = 113.9213; // Longitude Palangkaraya
    
    // Initialize map
    var map = L.map('map').setView([lat, lng], 15);
    
    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(map);
    
    // Custom marker icon (red)
    var redIcon = L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    
    // Add marker
    var marker = L.marker([lat, lng], {icon: redIcon}).addTo(map);
    
    // Add popup
    marker.bindPopup(`
        <div style="text-align: center;">
            <strong style="font-size: 16px; color: #7f1d1d;">CV HARAPAN REZEKI MANDIRI</strong><br>
            <p style="margin: 8px 0; color: #4b5563;">Jl. Pilau Indah No 29, RT.02<br>
            Kel. Panarung, Kec. Pahandut<br>
            Palangkaraya, Kalimantan Tengah</p>
        </div>
    `).openPopup();
</script>
@endsection
