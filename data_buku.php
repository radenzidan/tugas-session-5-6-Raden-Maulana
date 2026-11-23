<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT tb_buku.*, tb_kategori_buku.kategori_buku 
FROM tb_buku 
JOIN tb_kategori_buku 
ON tb_buku.id_kategori_buku = tb_kategori_buku.id_kategori_buku");
?>

<h2>Data Buku</h2>

<a href="tambah_buku.php">Tambah Buku</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Foto Cover</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['kategori_buku']; ?></td>
            <td><?= $data['judul_buku']; ?></td>
            <td><?= $data['penulis']; ?></td>
            <td><?= $data['penerbit']; ?></td>
            <td>
                <img src="uploads/<?= $data['foto_cover']; ?>" width="100">
            </td>
            <td>
                <a href="edit_buku.php?id=<?= $data['id_buku']; ?>">Edit</a> |
                <a href="hapus_buku.php?id=<?= $data['id_buku']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</table>