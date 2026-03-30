### ⚙️ Konfigurasi Environment & Database

1. Salin File Environment
Gandakan file `.env.example` menjadi `.env` menggunakan terminal:

# Windows (CMD/PowerShell)

copy .env.example .env

2. Generate Application Key
Jalankan perintah ini untuk membuat kunci keamanan aplikasi Anda:

php artisan key:generate

3. Konfigurasi Database
Buka file .env di teks editor Anda dan sesuaikan dengan kredensial database lokal Anda:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uiux
DB_USERNAME=root
DB_PASSWORD=

4. Jalankan Migrasi dan Seeder
Setelah konfigurasi database selesai, buat tabel dan isi data awal (seeder) dengan menjalankan perintah berikut:

php artisan migrate --seed