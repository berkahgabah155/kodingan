<?php
include "header_admin.php";
include "koneksi.php";
$query_barang = mysqli_query($conn,"select * from buku where id_buku = ".$_GET['id_buku']);
$data_barang = mysqli_fetch_array($query_barang);
?>
<form action="proses_ubah_buku.php" method="post" enctype="multipart/form-data">
    <input type="hidden"name="id_buku" value = <?=$_GET["id_buku"]?>>
Nama Barang
<input type="text" name = "nama_barang" value = "<?=$data_barang['nama_buku']?>">
<br>
<br>
<br>
<br>
Merk
<input type="text" name = "pengarang" value = "<?=$data_barang['pengarang']?>">
<br>
<br>
<br>
foto
<br>
<input type="file" name = "foto" value = "<?=$data_barang['foto']?>">
<br>
<br>
<br>
Deskripsi Barang
<br>
<textarea name="deskripsi" id="" cols="30" rows="10"><?=$data_barang['deskripsi']?></textarea>
<br>
<br>
<br>
Harga
<input type="text" name = "harga" value = "<?=$data_barang['harga']?>">
<br>
<button type="submit">Submit</button>
</form>
