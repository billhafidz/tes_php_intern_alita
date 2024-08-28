
# Struktur Aplikasi Web

1. Folder Struktur
- app/: Berisi logika aplikasi, termasuk model, controller, middleware, dan providers.
- config/: Berisi file konfigurasi aplikasi.
- database/: Berisi migrasi dan seeder untuk basis data.
- public/: Berisi file yang dapat diakses publik, seperti index.php, gambar, dan CSS.
- resources/: Berisi tampilan (views) dan aset (CSS, JS).
- routes/: Berisi rute aplikasi.

2.  Model dan Controller
- Employee Model: Menangani data employee dan location.
- EmployeeController: Menangani logika terkait employee (CRUD dan pencarian), menangani logika terkait location(CRUD).


# Instruksi Menjalankan Aplikasi

1. Prasyarat
- Pastikan memiliki XAMPP, VsCode, MySQL, PHP (8.x), Composer, dan Laravel terinstal.

2. Clone Repository

```bash
git clone https://github.com/username/repo-name.git
cd repo-name
```

3. Instalasi Dependensi

```bash
  composer install
```

4. Konfigurasi Lingkungan
- Salin file .env.example menjadi .env dan sesuaikan konfigurasi (database, app key).

```bash
cp .env.example .env
php artisan key:generate
```

5. Migrasi Database

```bash
  php artisan migrate
```

6. Jalankan Server

```bash
  php artisan serve
```

7. Akses Aplikasi
- Buka browser dan akses http://localhost:8000.
- Terdapat page welcome dan ada 2 pilihan yaitu masuk ke manajemen employee atau manajemen location.
- Di dalam manajemen location terdapat CRUD dari location nya.
- Di dalam manajemen employee terdapat CRUD dan mencari karyawan jakarta yang umurnya di atas 28 dihitung dari hari ini.

# Proses Deployment ke github

- Aplikasi ini di-deploy di GitHub. Untuk mengupdate aplikasi atau meng-upload versi terbaru

1. Buat Repositori di GitHub:
- Masuk ke akun GitHub.
- Klik "New" untuk membuat repositori baru.
- Beri nama repositori dan deskripsi, lalu klik "Create repository".

2. Inisialisasi Git di Proyek

```bash
cd path/to/your/project
git init
```

3. Tambahkan Remote Repository:

```bash
git remote add origin https://github.com/username/repo-name.git
```

4. Tambahkan dan Commit Perubahan:

```bash
git add .
git commit -m "Initial commit"
```

5. Push Kode ke GitHub:

```bash
git push -u origin main
```

