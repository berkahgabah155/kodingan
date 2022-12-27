<?php
if($_POST){
    $nama_buku=$_POST['nama_barang'];
    $pengarang=$_POST['brands'];
    $deskripsi=$_POST['deskripsi_barang'];
    $file_name=$_FILES['foto']['name'];
    $file_tmp=  $_FILES['foto']['tmp_name'];
    $harga=$_POST['harga'];
    $upload=move_uploaded_file($file_tmp, 'foto_buku/' .$file_name);

    if($upload!=false){
        include "koneksi.php";
        $simpan=mysqli_query($conn, "insert into buku value('','$nama_buku','$pengarang','$deskripsi','$file_name','$harga')");
        
    }
    if($simpan){ echo '<script> 
        alert("sukses");location.href="tambah_buku.php"</script>';
    }
    else {
            echo '<script>alert("gagal");</script>';
            // echo '<script>location.href="tambah_buku.php"</script>';
    }
    header("Location: daftar_buku_admin.php");

}
?>