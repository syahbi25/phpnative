# MVC CRUD Application

Aplikasi CRUD sederhana menggunakan arsitektur MVC (Model-View-Controller) dengan PHP Native.


Tahap 1: Menjalankan Laragon & Masuk ke phpMyAdmin
Buka Laragon: Cari ikon Laragon di desktop atau menu Start, lalu klik kanan dan pilih "Run as Administrator".

Jalankan Service: Klik tombol Start All. Pastikan status Apache dan MySQL berubah menjadi "Started".

Buka phpMyAdmin:

Klik tombol Database di panel Laragon.

Secara default, Laragon menggunakan HeidiSQL. Jika kamu lebih suka phpMyAdmin lewat browser, buka browser lalu ketik: localhost/phpmyadmin.

Login: Username biasanya root dan password dikosongkan (langsung klik Go/Login).

Tahap 2: Import Database
Setelah masuk ke phpMyAdmin, ikuti langkah ini:

Klik tab SQL di bagian atas menu.

Copy-paste kode berikut ke dalam kotak yang tersedia:

SQL
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

Klik tombol Go di pojok kanan bawah. Sekarang database mvc_db sudah siap.

Tahap 3: Menyiapkan Folder Proyek di www
Buka folder instalasi Laragon (biasanya di C:\laragon\www).

Di dalam folder www, buat folder dan file seperti dibawah ini

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
├── public/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   ├── images/
│   │   └── logo.png
│   ├── .htaccess
│   └── index.php
│
└── .htaccess
```

Tahap 4: Mengisi File dari GitHub

buka link https://github.com/syahbi25/phpnative
jika file yang kalian isinya masih kosong, samakan dengan file yang ada di link tersebut 

Konfigurasi Database:

Buka file app/config/config.php

Pastikan pengaturannya sesuai:

DB_HOST: localhost

DB_USER: root

DB_PASS: (kosongkan)

DB_NAME: mvc_db

BASEURL: http://localhost/myapp/public

Tahap 5: Menjalankan Aplikasi
Sekarang, buka browser kamu dan ketik alamat berikut:

http://localhost/myapp/public

Jika muncul halaman utama (Home), berarti kamu sudah berhasil!