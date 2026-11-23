<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id_buku='$id'");
$data = mysqli_fetch_assoc($query);
$kategori = mysqli_query($conn, "SELECT * FROM tb_kategori_buku");
?>

<h2>Edit Buku</h2>

<form action="proses_edit_buku.php" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="id_buku" value="<?= $data['id_buku']; ?>">

    Kategori Buku:
    <select name="id_kategori_buku">
        <?php while ($kat = mysqli_fetch_assoc($kategori)) { ?>
            <option value="<?= $kat['id_kategori_buku']; ?>"
                <?= ($kat['id_kategori_buku'] == $data['id_kategori_buku']) ? 'selected' : ''; ?>>
                <?= $kat['kategori_buku']; ?>
            </option>
        <?php } ?>
    </select><br><br>

    Judul Buku:
    <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?>"><br><br>

    Penulis:
    <input type="text" name="penulis" value="<?= $data['penulis']; ?>"><br><br>

    Penerbit:
    <input type="text" name="penerbit" value="<?= $data['penerbit']; ?>"><br><br>

    Foto Cover:
    <input type="file" name="foto_cover"><br><br>

    <button type="submit">Update</button>

</form>