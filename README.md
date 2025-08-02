# 📦 Inventaris Barang Pribadi (MVC)

Aplikasi web sederhana untuk mencatat dan mengelola barang inventaris pribadi. Dibangun menggunakan **PHP native** dengan arsitektur **MVC (Model-View-Controller)** dan database **SQLite3**.

## 📋 Fitur Utama

- 🔄 CRUD Barang: Tambah, lihat, edit, dan hapus data barang.
- 🗂️ CRUD Kategori: Kelola kategori barang.
- 🔗 Relasi antar entitas: Barang terhubung dengan Kategori.
- 🧪 Validasi input sederhana.
- 🧭 Navigasi halaman berdasarkan pola MVC.
- 🖼️ Antarmuka rapi dan responsif (HTML + CSS).
- ✔️ Cocok untuk mahasiswa yang ingin belajar dasar MVC PHP.

---

## 📂 Struktur Folder

```bash
iventarisbarang-mvc/
│
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── config/
│   └── database.php
│
├── public/
│   ├── css/
│   └── index.php
│
├── data/
│   └── inventaris.db  # file SQLite3
│
└── README.md

