<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Layanan Boga (Katering)',
                'description' => 'Melayani pemesanan makanan sesuai kebutuhan Anda: Syukuran, Acara Kantor, Pesta Ulang Tahun, Pesta Pernikahan, Katering Harian',
                'icon' => '🍽️',
                'is_active' => true
            ],
            [
                'name' => 'Instalasi & Konfigurasi',
                'description' => 'Melayani pemasangan dan konfigurasi jaringan: Network/Internet, CCTV, AC, dan lainnya',
                'icon' => '�',
                'is_active' => true
            ],
            [
                'name' => 'Perlengkapan Acara',
                'description' => 'Melayani pengadaan dan jasa rental perlengkapan untuk semua kebutuhan acara kecil & skala besar: Event Organizer, Sound System, Pemain Musik Profesional/MC, Rigging, Lighting',
                'icon' => '🎪',
                'is_active' => true
            ],
            [
                'name' => 'Pembuatan & Pengembangan Website serta Aplikasi',
                'description' => 'Jasa pembuatan dan pengembangan website profesional serta aplikasi mobile (Android & iOS) untuk perusahaan, toko online, profil bisnis, dan berbagai kebutuhan digital lainnya',
                'icon' => '💻',
                'is_active' => true
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
