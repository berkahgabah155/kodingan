<?php
if ($_GET['id']) {
    include "koneksi.php";
    echo $_GET['id'];
    $id_peminjaman_buku = $_GET['id'];
    $cek_terlambat = mysqli_query($conn, "select * from peminjaman_buku 
    where id_peminjaman_buku= '" . $id_peminjaman_buku . "' ");
    $dt_beli = mysqli_fetch_array($cek_terlambat);

    if (strtotime($dt_beli['tanggal_kembali']) >= strtotime(date('Y-m-d'))) {
            echo "tidak sesuai";

    } else {
        $tanggal_kembali = new DateTime();
        $tgl_harus_kembali = new
            DateTime($dt_beli['tanggal_kembali']);
        $selisih_hari = $tanggal_kembali->diff($tgl_harus_kembali)->d;
        echo $selisih_hari;
        echo "sesuai";
        echo  date('Y-m-d');
    }
    mysqli_query($conn, "update peminjaman_buku
set tanggal_kembali = ('". date('Y-m-d') . "') where  id_peminjaman_buku='". $id_peminjaman_buku . "'") ;
mysqli_query($conn, "update detail_peminjaman_buku set Status_Pembelian = 'Selesai' where id_peminjaman_buku = ".$id_peminjaman_buku);
    header('location: history.php');
}