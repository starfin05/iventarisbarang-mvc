<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Edit Kategori</h1>
    <form method="POST">
        <label>Nama Kategori</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>

        <button class="btn btn-primary" type="submit">Update</button>
        <a href="index.php?url=kategori/index" class="btn">Batal</a>
    </form>
</div>
</body>
</html>


