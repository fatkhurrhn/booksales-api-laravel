# Booksales API

Booksales API adalah aplikasi berbasis Laravel untuk mengelola penjualan buku. API ini menyediakan berbagai endpoint untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada data buku, serta mengelola transaksi penjualan. 

## Fitur

- Manajemen buku (CRUD)
- Menambahkan dan memperbarui informasi penjualan buku
- Mengelola kategori buku
- API yang terstruktur dengan baik menggunakan Laravel

## Persyaratan Sistem

- PHP >= 8.0
- Composer
- MySQL atau database lainnya
- Laravel 12.x

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini secara lokal.

### 1. Clone Repository

Clone repository ini ke komputer lokal:

```
git clone https://github.com/fatkhurrhn/booksales-api-laravel.git
```

### 2. Instalasi Dependensi

Masuk ke direktori proyek dan jalankan perintah untuk menginstal dependensi:

```
cd booksales-api-laravel
composer install
```
### 3. Konfigurasi .env

Salin file .env.example ke .env dan ubah konfigurasi database sesuai dengan pengaturan lokal kamu:

```
cp .env.example .env
```

Kemudian buka file .env dan pastikan konfigurasi database seperti ini:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_booksales-api
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Kunci Aplikasi

Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

```
php artisan key:generate
```

### 5. Buat Database

Buat database db_booksales-api di MySQL menggunakan phpMyAdmin atau command line:

```
CREATE DATABASE db_booksales-api;
```

### 6. Jalankan Migrasi

Jalankan migrasi untuk membuat tabel yang diperlukan:

```
php artisan migrate
```

### 7. Jalankan Server

Setelah semua terpasang dan dikonfigurasi, jalankan server Laravel:

```
php artisan 
```

Aplikasi sekarang dapat diakses melalui ``` http://127.0.0.1:8000```
