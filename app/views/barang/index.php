<!DOCTYPE html>
<html>
<head>
    <title>Inventaris Barang Pribadi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Inventaris Barang</h1>
    <a href="index.php?url=barang/tambah" class="btn btn-primary">➕ Tambah Barang</a>
    <a href="index.php?url=kategori/index" class="btn btn-secondary">🗂️ Kelola Kategori</a>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Lokasi</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td><?= htmlspecialchars($row['lokasi']) ?></td>
                <td><?= htmlspecialchars($row['nama_kategori']) ?></td>
                <td>
                    <a href="index.php?url=barang/edit&id=<?= $row['id'] ?>" class="btn-edit">🖊️Edit</a>
                    <a href="index.php?url=barang/delete&id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Yakin?')">🗑️Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>


