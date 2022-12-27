<?php
include "header.php";
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="foto_buku/mdrpkato.jpg" class="d-block w-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto_buku/aria.jpg" class="d-block w-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto_buku/r5gen2.jpg" class="d-block w-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto_buku/hs5.jpg" class="d-block w-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto_buku/nicehck db1.jpg" class="d-block w-500" alt="...">
    </div>
    <div class="carousel-item">
      <img src="foto_buku/2544.webp" class="d-block w-500" alt="...">
    </div>
  </div>
</div>
<h2 align="center">Audio Store</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_buku=mysqli_query($conn, "select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card" >
                <img src="foto_buku/<?=$dt_buku['foto']?>"class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                    <p class="card-text"><?=substr($dt_buku['deskripsi'],0,20)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>