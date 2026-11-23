<?php
include 'koneksi.php';

$id_kategori = $_POST['id_kategori_buku'];
$judul = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];

$nama_file = $_FILES['foto_cover']['name'];
$tmp_file = $_FILES['foto_cover']['tmp_name'];

move_uploaded_file($tmp_file, "uploads/" . $nama_file);

$query = mysqli_query($conn, "INSERT INTO tb_buku 
(id_kategori_buku, judul_buku, penulis, penerbit, foto_cover)
VALUES ('$id_kategori', '$judul', '$penulis', '$penerbit', '$nama_file')");

if ($query) {
    header("Location: data_buku.php");
} else {
    echo "Gagal menyimpan data!";
}
?>