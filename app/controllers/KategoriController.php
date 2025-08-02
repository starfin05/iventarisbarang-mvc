<?php
require_once __DIR__ . '/../models/Kategori.php';

class KategoriController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        $kategoriModel = new Kategori($this->pdo);
        $data = $kategoriModel->getAll();
        include '../app/views/kategori/index.php';
    }

    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kategoriModel = new Kategori($this->pdo);
            $kategoriModel->create($_POST);
            header('Location: index');
            exit;
        }

        include '../app/views/kategori/tambah.php';
    }

    public function edit() {
        $kategoriModel = new Kategori($this->pdo);
        $id = $_GET['id'];
        $data = $kategoriModel->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kategoriModel->update($id, $_POST);
            header('Location: index');
            exit;
        }

        include '../app/views/kategori/edit.php';
    }

    public function delete() {
        $kategoriModel = new Kategori($this->pdo);
        $id = $_GET['id'];
        $kategoriModel->delete($id);
        header('Location: index');
        exit;
    }
}

