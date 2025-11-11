@extends('layouts.app')

@section('title', 'Tentang Kami - CV HARAPAN REZEKI MANDIRI')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-red-900 to-red-950 text-white py-20 relative overflow-hidden">
        <!-- Dayak Pattern Background -->
        <div class="absolute inset-0 opacity-30">
            <div class="absolute -top-10 -left-10 w-80 h-80"
                style="background-image: url('{{ asset('images/dayak-motif.svg') }}'); background-size: contain; background-repeat: no-repeat;">
            </div>
            <div class="absolute -bottom-10 -right-10 w-80 h-80"
                style="background-image: url('{{ asset('images/dayak-motif.svg') }}'); background-size: contain; background-repeat: no-repeat; transform: rotate(180deg);">
            </div>
        </div>
        <!-- Border Pattern -->
        <div class="absolute top-0 left-0 right-0 h-2 opacity-50"
            style="background-image: url('{{ asset('images/dayak-pattern.svg') }}'); background-repeat: repeat-x; background-size: 100px;">
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-2 opacity-50"
            style="background-image: url('{{ asset('images/dayak-pattern.svg') }}'); background-repeat: repeat-x; background-size: 100px;">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Kami</h1>
                <p class="text-xl">Mengenal lebih dekat CV HARAPAN REZEKI MANDIRI</p>
            </div>
        </div>
    </section>

    @if ($companyInfo)
        <!-- Company Profile -->
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        {{-- <img src="{{ asset('images/logo.svg') }}" alt="Logo CV HARAPAN REZEKI MANDIRI" class="h-20 mb-6"> --}}
                        <h2 class="text-3xl font-bold text-red-900 mb-6">{{ $companyInfo->company_name }}</h2>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            {{ $companyInfo->about }}
                        </p>
                    </div>
                    <div
                        class="bg-gradient-to-br from-red-100 to-blue-200 rounded-lg p-8 h-96 flex items-center justify-center">
                        @if ($companyInfo->logo)
                            <img src="{{ asset('storage/' . $companyInfo->logo) }}" alt="{{ $companyInfo->company_name }}"
                                class="max-h-full">
                        @else
                            <div class="text-center">
                                <img src="{{ asset('images/logo.png') }}" alt="{{ $companyInfo->company_name }}"
                                    class="h-32 mb-4 mx-auto">
                                <p class="text-xl font-bold text-red-950">{{ $companyInfo->company_name }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision & Mission -->
        <section class="py-16 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @if ($companyInfo->vision)
                        <div class="bg-white p-8 rounded-lg shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="text-4xl mr-4">🎯</div>
                                <h3 class="text-2xl font-bold text-gray-800">Visi Kami</h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">{{ $companyInfo->vision }}</p>
                        </div>
                    @endif

                    @if ($companyInfo->mission)
                        <div class="bg-white p-8 rounded-lg shadow-md">
                            <div class="flex items-center mb-4">
                                <div class="text-4xl mr-4">🚀</div>
                                <h3 class="text-2xl font-bold text-gray-800">Misi Kami</h3>
                            </div>
                            <div class="text-gray-600 leading-relaxed">
                                @php
                                    $missions = explode('. ', $companyInfo->mission);
                                @endphp
                                <ol class="list-decimal list-inside space-y-3">
                                    @foreach ($missions as $index => $mission)
                                        @if (trim($mission))
                                            <li>{{ trim($mission) }}{{ !str_ends_with(trim($mission), '.') ? '.' : '' }}
                                            </li>
                                        @endif
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif

    <!-- Company Legal Information -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Legalitas Perusahaan</h2>
                <div class="w-20 h-1 bg-red-900 mx-auto"></div>
            </div>
            <div class="max-w-4xl mx-auto bg-gray-50 rounded-lg shadow-lg p-8">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-b border-gray-300 pb-4">
                        <div class="font-semibold text-gray-700">NAMA PERUSAHAAN</div>
                        <div class="md:col-span-2 text-gray-600">CV HARAPAN REZEKI MANDIRI</div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-b border-gray-300 pb-4">
                        <div class="font-semibold text-gray-700">ALAMAT</div>
                        <div class="md:col-span-2 text-gray-600">
                            JL. PILAU INDAH NO 29 RT.02<br>
                            KEL. PANARUNG KEC. PAHANDUT<br>
                            PALANGKARAYA,<br>
                            KALIMANTAN TENGAH
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-b border-gray-300 pb-4">
                        <div class="font-semibold text-gray-700">AKTA PENDIRIAN</div>
                        <div class="md:col-span-2 text-gray-600">
                            NOTARIS RENNY RAMONA TAMBUNAN, SH, M.KN<br>
                            NO. 07 TGL. 26 OKTOBER 2021
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-b border-gray-300 pb-4">
                        <div class="font-semibold text-gray-700">NIB</div>
                        <div class="md:col-span-2 text-gray-600">251121000049</div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="font-semibold text-gray-700">NPWP</div>
                        <div class="md:col-span-2 text-gray-600">53.110.992.4.711.000</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
                <div class="w-20 h-1 bg-red-900 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="text-5xl mb-4">✅</div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Terpercaya</h3>
                    <p class="text-gray-600">Pengalaman bertahun-tahun melayani pelanggan dengan integritas tinggi</p>
                </div>
                <div class="text-center p-6">
                    <div class="text-5xl mb-4">💎</div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Kualitas Terbaik</h3>
                    <p class="text-gray-600">Menyediakan produk dan layanan berkualitas dengan harga kompetitif</p>
                </div>
                <div class="text-center p-6">
                    <div class="text-5xl mb-4">🤝</div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">Pelayanan Prima</h3>
                    <p class="text-gray-600">Tim profesional siap membantu kebutuhan bisnis Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-red-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Tertarik Bekerja Sama?</h2>
            <p class="text-xl mb-8">Mari berdiskusi tentang bagaimana kami dapat membantu bisnis Anda</p>
            <a href="{{ route('contact') }}"
                class="inline-block bg-white text-red-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Hubungi
                Kami</a>
        </div>
    </section>
@endsection
