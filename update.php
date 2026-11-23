<?php
include 'koneksi.php';

$id = $_POST['id_kategori_buku'];
$kategori_buku = mysqli_real_escape_string($conn, $_POST['kategori_buku']);

$sql = "UPDATE tb_kategori_buku
        SET kategori_buku = '$kategori_buku'
        WHERE id_kategori_buku = '$id'";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
        alert('Kategori berhasil diupdate!');
        window.location='index.php';
    </script>";
} else {
    echo "<script>
        alert('Kategori gagal diupdate!');
        window.location='index.php';
    </script>";
}
?>