<?php
try {
    $pdo = new PDO("sqlite:" . __DIR__ . "/../database/inventaris.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>

