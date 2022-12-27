<?php
include "koneksi_admin.php";
move_uploaded_file($_FILES["foto"]["tmp_name"], "foto_buku/".$_FILES["foto"]["name"]);
$ubah = mysqli_query($conn, "update buku set nama_buku = '".$_POST['nama_barang']."',pengarang='".$_POST['pengarang']."',deskripsi='".$_POST['deskripsi']."',foto='".$_FILES['foto']['name']."',harga=".$_POST['harga']." where id_buku=".$_POST['id_buku']."");
header ("Location:daftar_buku_admin.php");
?>