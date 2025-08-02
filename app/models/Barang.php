<?php
class Barang {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT barang.*, kategori.nama AS nama_kategori 
                                   FROM barang 
                                   JOIN kategori ON barang.kategori_id = kategori.id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM barang WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO barang (nama, jumlah, lokasi, deskripsi, kategori_id) 
                                     VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $data['nama'],
            $data['jumlah'],
            $data['lokasi'],
            $data['deskripsi'],
            $data['kategori_id']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE barang SET nama=?, jumlah=?, lokasi=?, deskripsi=?, kategori_id=? 
                                     WHERE id=?");
        $stmt->execute([
            $data['nama'],
            $data['jumlah'],
            $data['lokasi'],
            $data['deskripsi'],
            $data['kategori_id'],
            $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM barang WHERE id=?");
        $stmt->execute([$id]);
    }
}

