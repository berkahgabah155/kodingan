<?php
include 'koneksi.php';
mysqli_query(
    $conn, 'delete from buku where id_buku = '.$_GET['id_buku']
);
header("Location: daftar_buku_admin.php");

?>