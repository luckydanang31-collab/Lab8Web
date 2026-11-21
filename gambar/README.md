# Praktikum 8: PHP dan Database MySQL (`Lab8Web`)

## 1. Menjalankan Server & Membuat Database
- Menjalankan modul **Apache** dan **MySQL** melalui XAMPP Control Panel.
- Membuat database `latihan1`, tabel `data_barang`, serta mengisi data awal melalui phpMyAdmin / SQL.

![XAMPP Control Panel](screenshots/xampp.png)
![Database & Tabel](screenshots/database.png)

## 2. Folder Kerja & Koneksi Database (`koneksi.php`)
- Membuat folder `lab8_php_database` di dalam `htdocs` beserta folder `gambar/`.
- Membuat file `koneksi.php` untuk menghubungkan aplikasi PHP ke MySQL (`latihan1`) dan menguji koneksi di browser.

![Tes Koneksi](screenshots/koneksi.png)

## 3. Menampilkan Data (`index.php` - Read)
- Membuat `index.php` menggunakan query `SELECT * FROM data_barang` untuk menampilkan daftar barang beserta tombol aksi **Ubah** dan **Hapus**.

![Halaman Index](screenshots/index.png)

## 4. Menambah Data (`tambah.php` - Create)
- Membuat `tambah.php` dengan form input dan upload file gambar (`enctype="multipart/form-data"`), lalu menyimpan data baru ke tabel `data_barang` dengan query `INSERT`.

![Halaman Tambah Barang](screenshots/tambah.png)

## 5. Mengubah Data (`ubah.php` - Update)
- Membuat `ubah.php` untuk mengambil data berdasarkan `id_barang`, menampilkannya pada form, dan memperbarui record dengan query `UPDATE`.

![Halaman Ubah Barang](screenshots/ubah.png)

## 6. Menghapus Data (`hapus.php` - Delete)
- Membuat `hapus.php` untuk menghapus data berdasarkan `id_barang` dengan query `DELETE` dan mengarahkan kembali ke `index.php`.

![Hapus Data](screenshots/hapus.png)