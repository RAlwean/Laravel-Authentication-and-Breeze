Laravel-Authentication-and-Breeze
🛠️ Cara Menjalankan Project

1.Unduh & Ekstrak Project Download file ZIP project ini lalu ekstrak, atau kloning menggunakan Gitnstall Dependensi PHP (Composer) composer install

2.Install Dependensi Frontend (NPM) npm install

3.Copy File Konfigurasi (.env) cp .env.example .env

4.Buat Database Baru Buka phpMyAdmin atau aplikasi database Anda, lalu buat database baru kosong dengan nama: auth_demo

5.Atur Koneksi Database di .env Buka file .env, cari baris berikut dan sesuaikan dengan pengaturan database Anda: DB_DATABASE=laravel DB_USERNAME=root DB_PASSWORD=

6.Generate Enkripsi Key php artisan key:generate

7.Jalankan Migrasi Database php artisan migrate

8.Build Aset Frontend npm run build

9.Jalankan Server php artisan serve
