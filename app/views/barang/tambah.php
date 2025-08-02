<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Tambah Barang</h1>
    <form method="POST">
        <label>Nama Barang</label>
        <input type="text" name="nama" required>

        <label>Jumlah</label>
        <input type="number" name="jumlah" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi"></textarea>

        <label>Kategori</label>
        <select name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id'] ?>"><?= htmlspecialchars($k['nama']) ?></option>
            <?php endforeach ?>
        </select>

        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="index.php?url=barang/index" class="btn">Batal</a>
    </form>
</div>
</body>
</html>


