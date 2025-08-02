<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Data Kategori</h1>
    <a href="index.php?url=kategori/tambah" class="btn btn-primary">+ Tambah Kategori</a>
    <a href="index.php?url=barang/index" class="btn btn-secondary">Kembali ke Barang</a>
    <table>
        <thead>
            <tr>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td>
                    <a href="index.php?url=kategori/edit&id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
                    <a href="index.php?url=kategori/delete&id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
</body>
</html>


