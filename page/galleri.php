<section class="gallery py-5" id="gallery">
    <div class="container py-md-5">
        <div class="header mb-3 mb-sm-5 text-center">
            <h3 class="heading text-center mb-3 mb-sm-5">Galleri</h3>
            <div class="row news-grids text-center">
                <?php
                $ambil = $koneksi->query("SELECT * FROM tb_galleri");
                while ($pecah = $ambil->fetch_object()) {
                    ?>
                    <div class="col-md-4 gal-img">
                        <a href="#<?php echo $pecah->galleri_id ?>"><img style="width: 100%; height;: 300px;" src="admin/images/<?php echo $pecah->galleri_foto ?>" alt="news image" class="img-fluid"><span> <?php echo $pecah->galleri_judul ?></span></a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
        $ambil = $koneksi->query("SELECT * FROM tb_galleri");
        while ($pecah = $ambil->fetch_object()) {
            ?>
            <!-- popup-->
            <div id="<?php echo $pecah->galleri_id ?>" class="pop-overlay animate">
                <div class="popup">
                    <img style="width:100%; height: 200;" src="admin/images/<?php echo $pecah->galleri_foto ?>" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4"><?php echo $pecah->galleri_detail ?></p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
        <?php } ?>
        <!-- //popup -->

    </div>
</section>