<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_paket WHERE paket_id = $id");
$pecah = $ambil->fetch_object();
?>
<section class="services py-5" id="services">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Paket Wisata BIL Transport <br> <?php echo $pecah->paket_nama ?></h3>
        <div class="row service-grid-grids text-center">
            <div class="col-lg-12 col-md-12 service-grid service-grid1 mb-4">
                <p class="mt-3">
                    <div class="row">
                        <div class="col-md-6 gal-img">
                            <a href="#<?php echo $pecah->paket_id ?>"><img style="width: 70%; height;: 200px;" src="admin/images/<?php echo $pecah->paket_foto ?>" alt="news image" class="img-fluid"></a>
                        </div>
                        <div class="col-md-6 gal-img">
                            <div class="">
                                <p>
                                    <?php echo $pecah->paket_detail  ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include('page/testimoni.php'); ?>
<?php include('page/map.php'); ?>