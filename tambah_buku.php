<?php
include "header_admin.php";
?>
<h2 align="center">Tambah Stok</h2>
    <form action="proses_simpan_buku.php" method="POST" enctype="multipart/form-data">
        Nama Barang :
        <input type="text" required name="nama_barang" class="form-control"> <br>
        Brands :
        <input type="text" required name="brands" class="form-control"> <br>
        deskripsi barang :
        <textarea name="deskripsi_barang" class="form-control"></textarea><br>
        foto:
        <input type="file" required name="foto" class="form-control"> <br>
        harga : 
        <input type="number"required name="harga" class="form-control"><br>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
<?php
include "footer_admin.php"
?>