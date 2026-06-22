**Getting Started**

Panduan singkat ini membantu Anda menjalankan proyek setelah melakukan clone, mulai dari konfigurasi database hingga menjalankan server lokal.

**Prerequisites**
- **PHP**: versi 8.1 atau lebih baru
- **Composer**: untuk menginstal dependensi PHP
- **Node.js & npm**: untuk membangun aset front-end
- **Database**: MySQL/MariaDB atau database lain yang didukung Laravel

**Installation**

1. **Clone repository**

```bash
git clone <repo-url> kelurahan-mc
cd kelurahan-mc
```

Ganti `<repo-url>` dengan URL repositori Anda (mis. `https://github.com/username/kelurahan-mc.git`).

2. **Install PHP dependencies**

```bash
composer install
```

3. **Install Node dependencies & build aset**

```bash
npm install
npm run dev
```

4. **Salin file environment**

```bash
cp .env.example .env
```

Jika Anda menggunakan Windows Command Prompt, gunakan `copy .env.example .env` atau di PowerShell: `Copy-Item .env.example .env`.

5. **Atur konfigurasi database di `.env`**

Edit file `.env` dan sesuaikan variabel koneksi database, contohnya:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kelurahan_db
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

Pastikan database (`kelurahan_db` pada contoh) sudah dibuat di server database Anda.

6. **Generate application key**

```bash
php artisan key:generate
```

7. **Migrasi database dan seeder (opsional: buat data awal)**

```bash
php artisan migrate --seed
```

Jika Anda ingin memulai dari nol (menghapus dan membuat ulang tabel), gunakan:

```bash
php artisan migrate:fresh --seed
```

8. **Jalankan aplikasi (development)**

```bash
php artisan serve
# lalu buka http://127.0.0.1:8000 di browser
```

Jika Anda menggunakan Vite untuk hot-reload, pastikan `npm run dev` berjalan bersamaan:

```bash
npm run dev
```

**Running Tests**

```bash
php artisan test
```

atau

```bash
./vendor/bin/phpunit
```

