# Website Profil CV HARAPAN REZEKI MANDIRI

Website profil perusahaan CV HARAPAN REZEKI MANDIRI yang dibangun menggunakan Laravel 11 dan Tailwind CSS.

## Fitur

- 🏠 **Halaman Beranda** - Menampilkan informasi perusahaan, produk, dan layanan
- 📖 **Tentang Kami** - Profil perusahaan lengkap dengan visi dan misi
- 📦 **Produk** - Katalog produk dengan pagination
- 🔧 **Layanan** - Daftar layanan yang ditawarkan
- 📞 **Kontak** - Form kontak dan informasi perusahaan
- 📱 **Responsive Design** - Tampilan optimal di semua perangkat

## Teknologi

- **Framework**: Laravel 11
- **Frontend**: Tailwind CSS
- **Database**: SQLite (default) / MySQL / PostgreSQL
- **Asset Bundler**: Vite

## Instalasi

### 1. Clone Repository

```bash
git clone <repository-url>
cd harapan-rezeki-web
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Setup Database

Edit file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=sqlite
# Atau untuk MySQL:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=harapan_rezeki
# DB_USERNAME=root
# DB_PASSWORD=
```

### 5. Jalankan Migration & Seeder

```bash
php artisan migrate:fresh --seed
```

Seeder akan mengisi database dengan:
- Informasi perusahaan
- 10 produk sample
- 6 layanan sample

### 6. Jalankan Development Server

Terminal 1 - Laravel Server:
```bash
php artisan serve
```

Terminal 2 - Vite Dev Server (untuk compile assets):
```bash
npm run dev
```

Website dapat diakses di: `http://127.0.0.1:8000`

## Build untuk Production

```bash
npm run build
```

## Struktur Database

### Tabel: company_infos
- company_name
- about
- vision
- mission
- address
- phone
- email
- logo

### Tabel: products
- name
- description
- category
- image
- price
- is_active

### Tabel: services
- name
- description
- icon
- is_active

## Halaman Website

1. **Beranda** (`/`) - Halaman utama dengan highlight produk dan layanan
2. **Tentang Kami** (`/about`) - Informasi lengkap perusahaan
3. **Produk** (`/products`) - Katalog produk dengan pagination
4. **Layanan** (`/services`) - Daftar layanan
5. **Kontak** (`/contact`) - Form kontak dan informasi perusahaan

## Kustomisasi

### Menambah/Edit Data Perusahaan

Edit file seeder: `database/seeders/CompanyInfoSeeder.php`

### Menambah/Edit Produk

Edit file seeder: `database/seeders/ProductSeeder.php`

### Menambah/Edit Layanan

Edit file seeder: `database/seeders/ServiceSeeder.php`

Setelah mengedit seeder, jalankan ulang:
```bash
php artisan migrate:fresh --seed
```

### Customize Styling

File CSS utama: `resources/css/app.css`
Config Tailwind: `tailwind.config.js`

## Admin Panel (Opsional)

Untuk menambahkan admin panel, Anda dapat mengintegrasikan:
- Laravel Filament
- Laravel Nova
- Atau membuat custom admin panel

## Deployment

### Production Checklist

1. Update `.env`:
   - Set `APP_ENV=production`
   - Set `APP_DEBUG=false`
   - Update `APP_URL`
   
2. Optimize:
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   npm run build
   ```

3. Setup web server (Apache/Nginx)
4. Setup database production
5. Jalankan migration: `php artisan migrate --force`

## Lisensi

Proprietary - CV HARAPAN REZEKI MANDIRI

## Support

Untuk pertanyaan dan dukungan, hubungi:
- Email: info@harapanrezeki.com
- Telepon: +62 812-3456-7890
