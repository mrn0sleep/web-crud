# 📚 Library Management System

> Sistem manajemen perpustakaan sederhana menggunakan PHP & MySQL

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## ✨ Fitur

- ✅ CRUD (Create, Read, Update, Delete) data buku
- 📖 Manajemen penerbit & jumlah buku
- 🎨 UI modern dengan Bootstrap 5
- 🔍 Filter dan pencarian data

## 📸 Screenshot

![Screenshot](https://github.com/mrn0sleep/CRUD-Library-with-bootstrap-PHP/blob/0ab35996a1a514c533af1d156ae2239474196005/Screenshot_20260307_124729.png)

## 🛠️ Teknologi

- PHP 8.x
- MySQL 5.7+
- Bootstrap 5.3
- XAMPP

## 📦 Instalasi

1. Clone repository
```bash
git clone https://github.com/username/library-system.git
```

2. Import database
```bash
mysql -u root -p library < database.sql
```

3. Konfigurasi koneksi di `connection.php`
```php
$conn = mysqli_connect("localhost", "root", "", "library");
```

4. Jalankan di browser
```
http://localhost/library-system
```

## 📁 Struktur Folder
```
library-system/
├── index.php       # Halaman utama
├── add.php         # Tambah data
├── edit.php        # Edit data
├── delete.php      # Hapus data
├── connection.php  # Koneksi database
└── README.md
```

## 🎯 Cara Pakai

1. Buka `index.php`
2. Klik "Tambah Data" untuk input buku baru
3. Klik "Update" untuk edit data
4. Klik "Delete" untuk hapus data

## 👨‍💻 Author

- GitHub: [@mrn0sleep](https://github.com/mrn0sleep)
