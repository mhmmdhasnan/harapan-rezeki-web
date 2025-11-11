<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CompanyInfo;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyInfo::create([
            'company_name' => 'CV HARAPAN REZEKI MANDIRI',
            'about' => 'Yang berdiri tahun 2021 merupakan salah satu perusahaan yang terjun dalam bisnis bidang pengadaan barang dan jasa maupun bidang Event, rental equipment dan Tataboga. Perusahaan kami menawarkan kerjasama dengan berbagai perusahaan nasional maupun instansi pemerintah pada berbagai bentuk pekerjaan sesuai bidang keahlian kami. Selain pengadaan barang, kami juga memiliki tim yang solid, terampil dan berpengalaman.',
            'vision' => 'Menjadi Mitra yang handal dan Terpercaya dalam memenuhi permintaan customer dengan senantiasa mengedepankan kualitas, mengikuti dan menerapkan teknologi terkini.',
            'mission' => 'Percaya kepada Tuhan bahwa kita mampu menjadi perusahaan terbaik di Indonesia. Membangun budaya kerja dan hubungan kerja yang kondusif dan harmonis. Menyediakan barang dan jasa yang berkualitas dan bersaing. Berusaha mengedepankan hasil terbaik dalam pekerjaan, mengembangkan ide kreatif, serta memberikan kepuasan customer, menjaga komitmen dan kepercayaan customer dengan pelayanan yang handal.',
            'address' => 'Jl Pilau Indah No 29, Palangkaraya, Kalimantan Tengah',
            'phone' => '085247855756',
            'email' => 'hrezekimandiri@gmail.com',
        ]);
    }
}
