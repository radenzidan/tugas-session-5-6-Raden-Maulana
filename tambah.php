<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori Buku</title>
</head>
<body>

    <h2>Tambah Kategori Buku</h2>

    <form method="POST" action="simpan.php">
        <label>Kategori Buku</label>
        <br>
        <input type="text" name="kategori_buku" required>

        <br><br>

        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>