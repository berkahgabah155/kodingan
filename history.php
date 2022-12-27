<?php
include "header.php";
?>
<h2>History Checkouts</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th>
        <th>Tanggal Checkout</th>
        <th>Tanggal Barang Diterima</th>
        <th>Nama Barang</th>
        <th>Jumlah Barang</th>
        <th>Total Harga</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>

        <?php
        
        include "koneksi.php";
        $qry_histori = mysqli_query($conn, "select * from peminjaman_buku where id_siswa = ".$_SESSION["id_siswa"]." order by id_peminjaman_buku desc");
        $no = 0;
        while ($dt_histori = mysqli_fetch_array($qry_histori)) {
            $no++;
            //menampilkan buku yang dipinjam
            $buku_dipinjam = "<ol>";
            $qry_buku = mysqli_query($conn, "select * from detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where id_peminjaman_buku ='" . $dt_histori['id_peminjaman_buku'] . "'");
            $harga = 0;
            while ($dt_buku = mysqli_fetch_array($qry_buku)) {
                    $buku_dipinjam .= "<li>" . $dt_buku['nama_buku'] . "</li>";
                    $harga = $harga + ($dt_buku ['qty'] * $dt_buku ["harga"]); 
            }
            $buku_dipinjam .= "</ol>";
            //menampilkan status sudah kembali atau belum
            $qry_buku = mysqli_query($conn, "select * from detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where id_peminjaman_buku ='" . $dt_histori['id_peminjaman_buku'] . "'");
            $dt_buku = mysqli_fetch_array($qry_buku);
            $status_kembali = "<label class='alert alertsuccess'>".$dt_buku['Status_Pembelian']." <br>"."</label>";
           
                $button_kembali = "";
            
            if($dt_buku['Status_Pembelian'] == 'Utiwi Kerumah') {
                $button_kembali = "<a href='kembali.php?id=" . $dt_histori['id_peminjaman_buku'] . "' class='btn btn-warning' onclick='return confirm(\"YNTKTS\")'>Berhasil diterima</a>";
            }
            $qry_buku = mysqli_query($conn, "select * from detail_peminjaman_buku join buku on buku.id_buku=detail_peminjaman_buku.id_buku where id_peminjaman_buku ='" . $dt_histori['id_peminjaman_buku'] . "'");
            $dt_buku = mysqli_fetch_array($qry_buku);
        ?>

            <tr>
                <td><?= $no ?></td>
                <td><?= $dt_histori['tanggal_pinjam'] ?></td>
                <td><?= $dt_histori['tanggal_kembali'] ?></td>
                <td><?= $buku_dipinjam ?></td>
                <td><?=$dt_buku ['qty']?></td>
                <td><?=$harga?></td>
                <td><?= $status_kembali ?></td>
                <td><?= $button_kembali ?></td>
            </tr>

        <?php
        }
        ?>

    </tbody>
</table>
<?php
include "footer.php";
?>