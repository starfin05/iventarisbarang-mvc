<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Edit Barang</h1>
    <form method="POST">
        <label>Nama Barang</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>

        <label>Jumlah</label>
        <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" value="<?= htmlspecialchars($data['lokasi']) ?>" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi"><?= htmlspecialchars($data['deskripsi']) ?></textarea>

        <label>Kategori</label>
        <select name="kategori_id" required>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id'] ?>" <?= $data['kategori_id'] == $k['id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($k['nama']) ?>
                </option>
            <?php endforeach ?>
        </select>

        <button class="btn btn-primary" type="submit">Update</button>
        <a href="index.php?url=barang/index" class="btn">Batal</a>
    </form>
</div>
</body>
</html>


