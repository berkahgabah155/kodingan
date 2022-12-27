<?php
include "koneksi.php";
mysqli_query($conn, "insert into kelas(nama_kelas) value ('".$_POST['kelas']."')");
$id_kelas =  mysqli_insert_id($conn);
mysqli_query($conn, "insert into siswa (username,password,alamat,gender,id_kelas) value ('".$_POST['username']."', '".$_POST['password']."','".$_POST['alamat']."','".$_POST['gender']."','".$id_kelas."');");
header ("location:LOGIN.php");
?>