# Travelly

Travelly merupakan platform berbasis web yang dirancang untuk memudahkan pengguna dalam merencanakan perjalanan wisata. Website ini menawarkan berbagai fitur seperti pencarian destinasi, rekomendasi paket perjalanan, pemesanan tiket, serta artikel panduan wisata. Hasil dari pengembangan proyek ini berhasil memberikan antarmuka yang intuitif, responsif, dan mudah digunakan oleh pengguna. Integrasi dengan API pemesanan serta fitur personalisasi rekomendasi juga meningkatkan pengalaman pengguna secara keseluruhan. 

# Author
Program ini ditujukan untuk memenuhi Tugas Pemrograman Web 3IA21 Universitas Gunadarma, Kami dari kelompok 2 yang Beranggotakan :
- Dewi Safira
- Elisa Wulansari 
- Muhammad Daffa
- Muhammad Faiz Rashid
- M Ryan Rifqi
- Rafi Ananda


# Cara Menjalankan Program

## 1. Persyaratan
Sebelum memulai, pastikan Anda telah menginstal:
- [PHP](https://www.php.net/) (Disarankan versi terbaru yang didukung Laravel)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) atau database lainnya
- [Node.js](https://nodejs.org/) (Untuk mengelola frontend jika diperlukan)

## 2. Instalasi Dependensi
Jalankan perintah berikut untuk menginstal semua dependensi Laravel:
```sh
composer install
```

## 3. Konfigurasi Environment
Laravel menggunakan file `.env` untuk mengatur konfigurasi. Jika belum ada file `.env`, buat dengan menyalin dari `.env.example`:
```sh
cp .env.example .env
```
Lalu edit file `.env` sesuai kebutuhan, terutama bagian konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=user_database
DB_PASSWORD=password_database
```

## 4. Generate Application Key
Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
```sh
php artisan key:generate
```

## 5. Migrasi Database
Jalankan perintah berikut untuk membuat tabel yang diperlukan:
```sh
php artisan migrate
```

## 6. Storage Link
Jalankan program berikut untuk membuat Link pada sotrage anda
```sh
php artisan storage:link
```

## 7. Menjalankan Server Laravel
Jalankan server pengembangan Laravel dengan perintah berikut:
```sh
php artisan serve
```
Server akan berjalan pada `http://127.0.0.1:8000/` secara default.

## 8. Ubah Konfigurasi Frontend
Edit file `.env` pada FRONTEND_URL dan sesuaikan dengan alamat frontend anda:
```env
FRONTEND_URL='*'
```

## 9. Troubleshooting
Jika terjadi error:
- Pastikan semua dependensi telah diinstal dengan benar.
- Periksa koneksi database dan pastikan kredensialnya benar.
- Coba jalankan `composer dump-autoload` atau `php artisan cache:clear`.
- Jika ada masalah dengan frontend, coba `npm install` ulang.

Dengan mengikuti panduan ini, Anda seharusnya dapat menjalankan proyek Laravel dengan sukses. 🚀

