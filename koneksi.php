<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_phpraden"
);

if (!$conn) {
    die("Koneksi gagal");
}
?>