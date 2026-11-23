<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_kategori_buku
        WHERE id_kategori_buku = '$id'";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
        alert('Kategori berhasil dihapus!');
        window.location='index.php';
    </script>";
} else {
    echo "<script>
        alert('Kategori gagal dihapus!');
        window.location='index.php';
    </script>";
}
?>