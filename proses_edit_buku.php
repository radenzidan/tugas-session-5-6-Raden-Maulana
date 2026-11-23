<?php
include 'koneksi.php';

$id = $_POST['id_buku'];
$judul = $_POST['judul_buku'];
$id_kategori = $_POST['id_kategori_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

$query = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id_buku='$id'");
$data = mysqli_fetch_assoc($query);

$nama_file = $data['foto_cover'];

if (!empty($_FILES['foto_cover']['name'])) {
    $nama_file = $_FILES['foto_cover']['name'];
    $tmp_file = $_FILES['foto_cover']['tmp_name'];

    move_uploaded_file($tmp_file, "uploads/" . $nama_file);

    if (!empty($data['foto_cover'])) {
        unlink("uploads/" . $data['foto_cover']);
    }
}

mysqli_query($conn, "UPDATE tb_buku SET
    id_kategori_buku='$id_kategori',
    judul_buku='$judul',
    penulis='$penulis',
    penerbit='$penerbit',
    foto_cover='$nama_file'
    WHERE id_buku='$id'");

header("Location: data_buku.php");
?>