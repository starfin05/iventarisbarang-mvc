<?php
require_once __DIR__ . '/../models/Barang.php';
require_once __DIR__ . '/../models/Kategori.php';

class BarangController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $barangModel = new Barang($this->pdo);
        $data = $barangModel->getAll();
        include '../app/views/barang/index.php';
    }

    public function tambah() {
        $kategoriModel = new Kategori($this->pdo);
        $kategori = $kategoriModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi input
            if (empty(trim($_POST['nama']))) {
                echo "<script>alert('Nama barang tidak boleh kosong.'); window.history.back();</script>";
                exit;
            }

            if (!isset($_POST['jumlah']) || !is_numeric($_POST['jumlah']) || $_POST['jumlah'] <= 0) {
                echo "<script>alert('Jumlah harus berupa angka lebih dari 0.'); window.history.back();</script>";
                exit;
            }

            if (empty(trim($_POST['lokasi'])) || strlen(trim($_POST['lokasi'])) < 3) {
                echo "<script>alert('Lokasi minimal 3 karakter.'); window.history.back();</script>";
                exit;
            }

            if (!isset($_POST['kategori_id']) || $_POST['kategori_id'] == '0') {
                echo "<script>alert('Silakan pilih kategori.'); window.history.back();</script>";
                exit;
            }

            $barangModel = new Barang($this->pdo);
            $barangModel->create($_POST);
            header('Location: index');
            exit;
        }

        include '../app/views/barang/tambah.php';
    }

    public function edit() {
        $barangModel = new Barang($this->pdo);
        $kategoriModel = new Kategori($this->pdo);

        $id = $_GET['id'];
        $data = $barangModel->getById($id);
        $kategori = $kategoriModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi input saat edit
            if (empty(trim($_POST['nama']))) {
                echo "<script>alert('Nama barang tidak boleh kosong.'); window.history.back();</script>";
                exit;
            }

            if (!isset($_POST['jumlah']) || !is_numeric($_POST['jumlah']) || $_POST['jumlah'] <= 0) {
                echo "<script>alert('Jumlah harus berupa angka lebih dari 0.'); window.history.back();</script>";
                exit;
            }

            if (empty(trim($_POST['lokasi'])) || strlen(trim($_POST['lokasi'])) < 3) {
                echo "<script>alert('Lokasi minimal 3 karakter.'); window.history.back();</script>";
                exit;
            }

            if (!isset($_POST['kategori_id']) || $_POST['kategori_id'] == '0') {
                echo "<script>alert('Silakan pilih kategori.'); window.history.back();</script>";
                exit;
            }

            $barangModel->update($id, $_POST);
            header('Location: index');
            exit;
        }

        include '../app/views/barang/edit.php';
    }

    public function delete() {
        $barangModel = new Barang($this->pdo);
        $id = $_GET['id'];
        $barangModel->delete($id);
        header('Location: index');
        exit;
    }
}

