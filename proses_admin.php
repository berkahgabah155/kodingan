<?php
include "koneksi_admin.php";
mysqli_query($conn, "update detail_peminjaman_buku set Status_Pembelian = '".$_POST['Cek_status']."' where id_peminjaman_buku = ".$_POST ['id_peminjaman_buku']);
header("location: historyadmin.php");
?>
