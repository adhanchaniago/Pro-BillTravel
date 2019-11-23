<section class="destinations py-5" id="destinations">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Paket Wisata</h3>
        <div class="row inner-sec-w3layouts-w3pvt-lauinfo">
            <!-- Perulangan -->
            <?php
            $ambil = $koneksi->query("SELECT * FROM tb_paket");
            while ($pecah = $ambil->fetch_object()) {
                ?>
                <div class="col-md-3 col-sm-6 col-6 destinations-grids text-center mb-4">
                    <h4 class="destination mb-3"><?php echo $pecah->paket_nama ?></h4>
                    <div class="image-position position-relative">
                        <img style="width: 100%;height: 400px;" src="admin/images/<?php echo $pecah->paket_foto ?>" class="img-fluid" alt="">
                        <div class="rating">
                            <ul>
                                <li><?php echo rupiah($pecah->paket_harga) ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="destinations-info">
                        <div class="caption mb-lg-3">
                            <h4><?php echo $pecah->paket_nama ?></h4>
                            <a href="index.php?page=page/detail_paket&id=<?php echo $pecah->paket_id ?>" target="_blank">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Perulangan -->
        </div>
    </div>
</section>