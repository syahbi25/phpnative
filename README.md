# MVC CRUD Application

Aplikasi CRUD sederhana menggunakan arsitektur MVC (Model-View-Controller) dengan PHP Native.

## Struktur Folder

```
myapp/
│
├── app/
│   ├── controllers/
│   │   ├── Home.php
│   │   └── User.php
│   │
│   ├── models/
│   │   └── User_model.php
│   │
│   ├── views/
│   │   ├── templates/
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   ├── home/
│   │   │   ├── index.php
│   │   │   └── about.php
│   │   └── user/
│   │       ├── index.php
│   │       └── detail.php
│   │
│   ├── core/
│   │   ├── App.php
│   │   ├── Controller.php
│   │   ├── Database.php
│   │   └── Flasher.php
│   │
│   ├── config/
│   │   └── config.php
│   │
│   └── init.php
│
└── public/
    ├── css/
    │   └── style.css
    ├── js/
    │   └── script.js
    ├── images/
    │   └── logo.png
    ├── .htaccess
    └── index.php
```

## Fitur

- ✅ Create (Tambah Data User)
- ✅ Read (Lihat Data User)
- ✅ Update (Edit Data User)
- ✅ Delete (Hapus Data User)
- ✅ Search (Cari Data User)
- ✅ Flash Message (Notifikasi)
- ✅ Modal Form (Bootstrap Modal)
- ✅ Responsive Design (Bootstrap 5)

## Teknologi yang Digunakan

- PHP 7.4+
- MySQL/MariaDB
- Bootstrap 5
- jQuery 3.6
- PDO (PHP Data Objects)

## Cara Instalasi

### 1. Persiapan

Pastikan Anda sudah menginstall:
- XAMPP/WAMP/MAMP
- Web browser

### 2. Setup Database

1. Buka phpMyAdmin
2. Import file `database.sql` atau jalankan query berikut:

```sql
CREATE DATABASE IF NOT EXISTS mvc_db;
USE mvc_db;

CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (nama, email, telepon) VALUES
('John Doe', 'john@example.com', '08123456789'),
('Jane Smith', 'jane@example.com', '08234567890'),
('Bob Johnson', 'bob@example.com', '08345678901');
```

### 3. Setup Aplikasi

1. Copy folder `myapp` ke folder `htdocs` (untuk XAMPP) atau `www` (untuk WAMP)

2. Edit file `app/config/config.php` sesuai konfigurasi Anda:

```php
define('BASEURL', 'http://localhost/myapp/public');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvc_db');
```

3. Edit file `public/js/script.js`, ganti URL sesuai BASEURL Anda:

```javascript
'http://localhost/myapp/public/user/add'
'http://localhost/myapp/public/user/update'
'http://localhost/myapp/public/user/getupdate'
```

### 4. Jalankan Aplikasi

1. Nyalakan Apache dan MySQL di XAMPP
2. Buka browser dan akses: `http://localhost/myapp/public`

## Cara Penggunaan

### Tambah Data
1. Klik tombol "Tambah Data User"
2. Isi form yang muncul
3. Klik "Simpan Data"

### Edit Data
1. Klik badge "update" pada user yang ingin diubah
2. Edit data di form yang muncul
3. Klik "Update Data"

### Hapus Data
1. Klik badge "delete" pada user yang ingin dihapus
2. Konfirmasi penghapusan

### Cari Data
1. Ketik kata kunci di kolom pencarian
2. Klik tombol "Cari"

### Lihat Detail
1. Klik badge "detail" pada user yang ingin dilihat

## Troubleshooting

### Error 404 Not Found
- Pastikan module `mod_rewrite` di Apache sudah aktif
- Cek file `.htaccess` sudah ada di folder `public`

### Database Connection Error
- Cek konfigurasi database di `app/config/config.php`
- Pastikan MySQL sudah running
- Pastikan database `mvc_db` sudah dibuat

### Modal tidak muncul
- Cek apakah jQuery sudah terload dengan benar
- Cek console browser untuk error JavaScript

## Struktur MVC

### Model
File: `app/models/User_model.php`
- Berisi logic untuk berinteraksi dengan database
- Fungsi: getAllUsers(), getUserById(), addUser(), updateUser(), deleteUser(), searchUsers()

### View
Folder: `app/views/`
- Berisi file-file tampilan HTML
- Menggunakan PHP untuk menampilkan data dinamis

### Controller
Folder: `app/controllers/`
- Berisi logic untuk mengatur alur aplikasi
- Menghubungkan Model dan View

## Pengembangan Lebih Lanjut

Beberapa fitur yang bisa ditambahkan:
- [ ] Authentication & Authorization
- [ ] Pagination
- [ ] Export to Excel/PDF
- [ ] Upload Photo Profile
- [ ] Validation Form
- [ ] AJAX untuk semua operasi
- [ ] RESTful API

## Lisensi

Free to use and modify

## Kontak

Jika ada pertanyaan, silakan hubungi developer.
