<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id_buku='$id'");
$data = mysqli_fetch_assoc($query);

$nama_file = $data['foto_cover'];

if (!empty($nama_file) && file_exists("uploads/" . $nama_file)) {
    unlink("uploads/" . $nama_file);
}

mysqli_query($conn, "DELETE FROM tb_buku WHERE id_buku='$id'");

header("Location: data_buku.php");
?>