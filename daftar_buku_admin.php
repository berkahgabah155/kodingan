<?php
include "header_admin.php";
if($_SESSION['role']=='admin'){
?>
<h3>Audio Store</h3>
        <a href="tambah_buku.php" class="btn btn-primary">Tambah Barang</a>
        <table class="table table-hover table-striped">
        <thead>
        <tr>
        <th>ID</th><th>Foto</th><th>Nama Buku</th>
        <th>Deskripsi</th><th>harga</th>
        </tr>
        </thead>
        <tbody>
<?php
include "koneksi_admin.php";

            $qry_buku=mysqli_query($conn,"select * from buku");

                $no=0;
                while($data_buku=mysqli_fetch_array($qry_buku)){
                $no++;?>
                <tr>
                <td><?=$no?></td>
                <td><img src="foto_buku/<?=$data_buku['foto']?>" width="100"></td>
                <td><?=$data_buku['nama_buku']?></td> <td><?=$data_buku['deskripsi']?></td>
                <td><?=$data_buku['harga']?>
                <td><a href="hapus_admin.php?id_buku=<?=$data_buku['id_buku']?>"class="btn btn-danger">Hapus Barang</a></td>
                <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>"class="btn btn-success">EDIT</a></td>
                </tr>
                <?php
        }}
else{
   echo "Anda bukan admin";
        };
            ?>

</tbody>
</table>

<?php include "footer_admin.php"?>