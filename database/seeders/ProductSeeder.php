<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Alat Tulis Kantor',
                'description' => 'Berbagai macam alat tulis kantor berkualitas untuk kebutuhan administrasi perusahaan Anda.',
                'category' => 'Perlengkapan Kantor',
                'price' => 50000,
                'is_active' => true
            ],
            [
                'name' => 'Komputer & Laptop',
                'description' => 'Komputer dan laptop berbagai merek dengan spesifikasi terbaik untuk kebutuhan bisnis.',
                'category' => 'Elektronik',
                'price' => 8000000,
                'is_active' => true
            ],
            [
                'name' => 'Peralatan Dapur',
                'description' => 'Perlengkapan dapur berkualitas untuk restoran, hotel, dan katering.',
                'category' => 'Peralatan',
                'price' => 250000,
                'is_active' => true
            ],
            [
                'name' => 'Furnitur Kantor',
                'description' => 'Meja, kursi, dan furnitur kantor ergonomis untuk kenyamanan kerja.',
                'category' => 'Furnitur',
                'price' => 1500000,
                'is_active' => true
            ],
            [
                'name' => 'Bahan Bangunan',
                'description' => 'Berbagai material dan bahan bangunan berkualitas untuk proyek konstruksi.',
                'category' => 'Konstruksi',
                'price' => 500000,
                'is_active' => true
            ],
            [
                'name' => 'Peralatan Cleaning Service',
                'description' => 'Alat kebersihan dan cleaning service untuk gedung dan perkantoran.',
                'category' => 'Kebersihan',
                'price' => 150000,
                'is_active' => true
            ],
            [
                'name' => 'Mesin Fotocopy',
                'description' => 'Mesin fotocopy berbagai tipe dan kapasitas untuk kebutuhan kantor.',
                'category' => 'Elektronik',
                'price' => 5000000,
                'is_active' => true
            ],
            [
                'name' => 'Perlengkapan Safety',
                'description' => 'Alat pelindung diri (APD) dan perlengkapan keselamatan kerja.',
                'category' => 'Safety',
                'price' => 200000,
                'is_active' => true
            ],
            [
                'name' => 'Elektronik Rumah Tangga',
                'description' => 'Berbagai elektronik rumah tangga seperti kulkas, AC, dan lainnya.',
                'category' => 'Elektronik',
                'price' => 3000000,
                'is_active' => true
            ],
            [
                'name' => 'Peralatan Outdoor',
                'description' => 'Perlengkapan untuk kegiatan outdoor dan camping.',
                'category' => 'Outdoor',
                'price' => 750000,
                'is_active' => true
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
