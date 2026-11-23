<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM tb_kategori_buku");
?>

<h2>Data Kategori Buku</h2>

<a href="tambah.php">Tambah Kategori Buku</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kategori Buku</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $data['kategori_buku'] ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id_kategori_buku'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $data['id_kategori_buku'] ?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>