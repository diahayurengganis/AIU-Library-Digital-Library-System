# AIU Library

## Deskripsi
 AIU Library adalah Sistem Perpustakaan Digital seperti aplikasi berbasis web yang dikembangkan untuk membantu pengelolaan perpustakaan secara digital. Sistem ini memungkinkan admin mengelola data buku dan anggota, serta memfasilitasi proses peminjaman dan pengembalian buku.

## Fitur Utama
- Registrasi dan Login
- Manajemen Data Buku
- Manajemen Data Anggota
- Peminjaman Buku
- Pengembalian Buku
- Dashboard Admin
- Laporan Peminjaman

## Teknologi yang Digunakan
- PHP
- Laravel
- MySQL
- Bootstrap / Tailwind CSS

## Cara Menjalankan Proyek

1. Clone repository

```bash
git clone https://github.com/diahayurengganis/AIU-Library-Digital-Library-System.git
```

2. Install dependency

```bash
composer install
```

3. Salin file environment

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Jalankan migrasi database

```bash
php artisan migrate
```

6. Jalankan server Laravel

```bash
php artisan serve
```

## Pengembang
Diah Ayu Rengganis