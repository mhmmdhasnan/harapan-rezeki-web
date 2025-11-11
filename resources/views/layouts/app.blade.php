<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV HARAPAN REZEKI MANDIRI')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.png') }}" alt="CV HARAPAN REZEKI MANDIRI" class="h-12">
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-red-900 transition {{ request()->routeIs('home') ? 'text-red-900 font-semibold' : '' }}">Beranda</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-red-900 transition {{ request()->routeIs('about') ? 'text-red-900 font-semibold' : '' }}">Tentang Kami</a>
                    {{-- <a href="{{ route('products') }}" class="text-gray-700 hover:text-red-900 transition {{ request()->routeIs('products') ? 'text-red-900 font-semibold' : '' }}">Produk</a> --}}
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-red-900 transition {{ request()->routeIs('services') ? 'text-red-900 font-semibold' : '' }}">Layanan</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-red-900 transition {{ request()->routeIs('contact') ? 'text-red-900 font-semibold' : '' }}">Kontak</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-red-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:bg-red-50 hover:text-red-900 rounded {{ request()->routeIs('home') ? 'bg-red-50 text-red-900' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:bg-red-50 hover:text-red-900 rounded {{ request()->routeIs('about') ? 'bg-red-50 text-red-900' : '' }}">Tentang Kami</a>
                {{-- <a href="{{ route('products') }}" class="block px-3 py-2 text-gray-700 hover:bg-red-50 hover:text-red-900 rounded {{ request()->routeIs('products') ? 'bg-red-50 text-red-900' : '' }}">Produk</a> --}}
                <a href="{{ route('services') }}" class="block px-3 py-2 text-gray-700 hover:bg-red-50 hover:text-red-900 rounded {{ request()->routeIs('services') ? 'bg-red-50 text-red-900' : '' }}">Layanan</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:bg-red-50 hover:text-red-900 rounded {{ request()->routeIs('contact') ? 'bg-red-50 text-red-900' : '' }}">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 text-gray-800 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="CV HARAPAN REZEKI MANDIRI" class="h-16 mb-4">
                    <p class="text-gray-600">Perdagangan Umum & Supplier Terpercaya</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-red-900">Link Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-600 hover:text-red-900 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-red-900 transition">Tentang Kami</a></li>
                        {{-- <li><a href="{{ route('products') }}" class="text-gray-600 hover:text-red-900 transition">Produk</a></li> --}}
                        <li><a href="{{ route('services') }}" class="text-gray-600 hover:text-red-900 transition">Layanan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-red-900">Hubungi Kami</h4>
                    <ul class="space-y-2 text-gray-600">
                        <li>📧 Email: hrezekimandiri@gmail.com</li>
                        <li>📞 Telepon: 085247855756</li>
                        <li>📍 Alamat: Jl Pilau Indah No 29, Palangkaraya, Kalimantan Tengah</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-300 mt-8 pt-8 text-center text-gray-600">
                <p>&copy; {{ date('Y') }} CV HARAPAN REZEKI MANDIRI. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
