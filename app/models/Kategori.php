<?php
class Kategori {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM kategori");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM kategori WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO kategori (nama) VALUES (?)");
        $stmt->execute([$data['nama']]);
    }

    public function update($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE kategori SET nama = ? WHERE id = ?");
        $stmt->execute([$data['nama'], $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM kategori WHERE id = ?");
        $stmt->execute([$id]);
    }
}

