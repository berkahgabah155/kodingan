<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='LOGIN.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='LOGIN.php';</script>";
    } else {
        include "koneksi.php";
        $qry_cek=mysqli_query($conn,"select * from siswa where
        username = '".$username."' and password = '".($password)."'");
        if(mysqli_num_rows($qry_cek)>0){
            $dt_login=mysqli_fetch_array($qry_cek);
            session_start();
            $_SESSION['id_siswa']=$dt_login['id_siswa'];
            $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
            $_SESSION['status_login']=true;
            // print_r($dt_login);
            header("location: home.php");
            } else {
            echo "<script>alert('Username dan Password tidak benar');location.href='LOGIN.php';</script>";
            }
    }
}
?>