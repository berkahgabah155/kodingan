<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
if(empty($username)){
        echo "<script>alert('Username tidak boleh
        kosong');location.href='login_admin.php';</script>";
} elseif(empty($password)){
            echo "<script>alert('Password tidak boleh
            kosong');location.href='login_admin.php';</script>";
} else {
include "koneksi_admin.php";
$qry_cek=mysqli_query($conn,"select * from petugas where
nama_petugas = '".$username."' and password = '".($password)."'");
if(mysqli_num_rows($qry_cek)>0){
    session_start();
    $dt_login=mysqli_fetch_array($qry_cek);
    $_SESSION['id_admin']=$dt_login['id_admin'];
    $_SESSION['nama_admin']=$dt_login['nama_admin'];
    $_SESSION['role']=$dt_login['role'];
    $_SESSION['status_login']=true;
    header("location: home_admin.php");
} else {
echo "<script>alert('Username dan Password tidak
benar');location.href='login.php';</script>";
}
}
}
?>