<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM tb_kategori_buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form action="proses_tambah_buku.php" method="POST" enctype="multipart/form-data">

    Kategori Buku:
    <select name="id_kategori_buku">
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <option value="<?= $data['id_kategori_buku']; ?>">
                <?= $data['kategori_buku']; ?>
            </option>
        <?php } ?>
    </select><br><br>

    Judul Buku:
    <input type="text" name="judul_buku"><br><br>

    Penulis:
    <input type="text" name="penulis"><br><br>

    Penerbit:
    <input type="text" name="penerbit"><br><br>

    Foto Cover:
    <input type="file" name="foto_cover"><br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>