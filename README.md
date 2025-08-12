# Web Pendataan DPKKA UNAIR

Ini adalah sistem web sederhana untuk pendataan mahasiswa, bisnis, prodi, pelatihan, dan dosen di DPKKA Universitas Airlangga. Aplikasi ini dibangun menggunakan PHP dan MySQL untuk membantu mengelola data yang terkait dengan mahasiswa dan kegiatan mereka.

## Fitur-fitur Aplikasi

Berdasarkan file-file yang ada, berikut adalah fitur utama dari aplikasi ini:

* **Login Administrator**: Sistem memiliki halaman login untuk administrator dengan kredensial default yang tersimpan dalam database.
* **Dashboard**: Halaman utama setelah login yang berfungsi sebagai dashboard.
* **Manajemen Data Mahasiswa**:
    * Melihat daftar semua mahasiswa.
    * Menambah, mengedit, dan menghapus data mahasiswa.
* **Manajemen Data Prodi**:
    * Melihat daftar program studi.
    * Menambah, mengedit, dan menghapus data prodi.
* **Manajemen Data Bisnis**:
    * Melihat daftar bisnis.
    * Menambah, mengedit, dan menghapus data bisnis.
* **Manajemen Data Pelatihan**:
    * Melihat daftar pelatihan.
    * Menambah, mengedit, dan menghapus data pelatihan.
* **Manajemen Data Dosen**:
    * Melihat daftar dosen.
    * Menambah, mengedit, dan menghapus data dosen.
* **Laporan Data Terintegrasi**:
    * Menampilkan data mahasiswa yang memiliki bisnis.
    * Menampilkan data mahasiswa yang mengikuti pelatihan.

## Teknologi yang Digunakan

* **Backend**: PHP
* **Database**: MySQL
* **Frontend**: HTML, CSS (Bootstrap), JavaScript (simple-datatables, Chart.js)
* **Web Server**: Apache (direkomendasikan menggunakan XAMPP atau sejenisnya)

## Panduan Instalasi

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Siapkan Lingkungan Server**:
    Pastikan Anda memiliki lingkungan server lokal seperti XAMPP atau WAMPP yang sudah terinstal, yang menyediakan Apache dan MySQL.

2.  **Import Database**:
    * Buka phpMyAdmin (biasanya di `http://localhost/phpmyadmin/`).
    * Buat database baru dengan nama `tugasdatabase`.
    * Import file `tugasdatabase.sql` ke dalam database yang baru Anda buat.
    * File SQL ini akan membuat tabel-tabel: `bisnis`, `dosen`, `mahasiswa`, `pelatihan`, `prodi`, dan `user`, serta mengisi beberapa data awal.

3.  **Konfigurasi Koneksi Database**:
    * Buka file `koneksi.php`.
    * Pastikan detail koneksi sudah sesuai dengan konfigurasi server lokal Anda. Jika Anda menggunakan XAMPP default, konfigurasinya sudah benar:
        ```php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "tugasdatabase";
        ```

4.  **Akses Aplikasi**:
    * Buka browser dan navigasikan ke URL proyek Anda (contoh: `http://localhost/web-pendataan-master/login.php`).
    * Gunakan kredensial berikut untuk login sebagai administrator:
        * **Username**: `admin`
        * **Password**: `admin`
