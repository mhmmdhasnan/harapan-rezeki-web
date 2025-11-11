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
                'name' => 'BOGA (Catering)',
                'description' => 'Melayani Pemasanan makanan Sesuai Kebutuhan Anda: Syukuran, Acara Kantor, Pesta Ulang Tahun, Pesta Pernikahan, Catering Harian',
                'icon' => '🍽️',
                'is_active' => true
            ],
            [
                'name' => 'INSTALASI & CONFIGURE',
                'description' => 'Melayani Pemasangan dan Pemasangan Jaringan: Network / Internet, CCTV, AC, Dll',
                'icon' => '👷',
                'is_active' => true
            ],
            [
                'name' => 'EQUIPMENT EVENT',
                'description' => 'Melayani Pengadaan dan Jasa Rental Equipment untuk memenuhi semua kebutuhan Event Kecil & Skala Besar: Event Organizer, Soundsystem, Pro Player Music /MC, Rigging, Lighting',
                'icon' => '🎪',
                'is_active' => true
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
