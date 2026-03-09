# Laravel Yayasan & Sekolah Management

Aplikasi ini dibuat menggunakan **Laravel Framework** untuk mengelola data **Yayasan** dan **Sekolah**.  
Sistem ini menerapkan konsep **One-to-Many Relationship**, dimana satu Yayasan dapat memiliki banyak Sekolah.

---

# Fitur Aplikasi

- Autentikasi dasar (Login & Logout)
- CRUD Yayasan (Create, Read, Update, Delete)
- CRUD Sekolah (Create, Read, Update, Delete)
- Relasi One-to-Many antara Yayasan dan Sekolah
- Validasi form untuk field yang wajib diisi
- Database Migration
- Database Seeder untuk akun default

---

# Menu Aplikasi

## 1. Yayasan
Fitur yang tersedia:
- Menampilkan daftar yayasan
- Menambahkan data yayasan
- Mengedit data yayasan
- Menghapus data yayasan

## 2. Sekolah
Fitur yang tersedia:
- Menampilkan daftar sekolah
- Menambahkan data sekolah
- Mengedit data sekolah
- Menghapus data sekolah

Setiap **Sekolah** terhubung dengan satu **Yayasan** menggunakan field **yayasan_id**.

---

# Database Structure

## Tabel Yayasan

| Field | Type |
|------|------|
| id | bigint |
| nama | varchar |
| alamat | text |
| telepon | varchar |
| created_at | timestamp |
| updated_at | timestamp |

---

## Tabel Sekolah

| Field | Type |
|------|------|
| id | bigint |
| yayasan_id | bigint |
| nama | varchar |
| alamat | text |
| telepon | varchar |
| kepala_sekolah | varchar |
| created_at | timestamp |
| updated_at | timestamp |

---

# ERD (Entity Relationship Diagram)
+-----------+
| YAYASAN |
+-----------+
| id (PK) |
| nama |
| alamat |
| telepon |
+-----------+
|
| 1
|
|------<
|
+-----------+
| SEKOLAH |
+-----------+
| id (PK) |
| yayasan_id|
| nama |
| alamat |
| telepon |
| kepala_sekolah |
+-----------+

Relasi Database:

- **1 Yayasan memiliki banyak Sekolah**
- **1 Sekolah hanya dimiliki oleh 1 Yayasan**

---

# Default Login (Seeder)

Email
admin@gmail.com

Password
password

---

# Cara Menjalankan Project

1. Clone repository
git clone https://github.com/blowmind99/darul-hikam-test.git


2. Masuk ke folder project
cd project

3. Install dependency
composer install

4. Copy file environment
cp .env.example .env

5. Generate application key
php artisan key:generate

6. Atur konfigurasi database pada file `.env`
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
sesuaikan dengan database koneksi masing-masing

7. Jalankan migration dan seeder
php artisan migrate --seed

8. Jalankan server Laravel
php artisan serve


9. Buka aplikasi melalui browser
http://127.0.0.1:8000


---

# Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Bootstrap
- Javascript
- jQuery
- Tailwind
- Blade Template

---

# Author

Nama : Rifqi Fauzi Rahmat  
Framework : Laravel  
Project : Rekrutment Staff IT Study Kasus Darul Hikam 
