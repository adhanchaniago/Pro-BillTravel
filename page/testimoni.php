<section class="testimonials py-5" id="testimonials">
    <div class="container py-md-5">
        <h3 class="heading heading1 text-center mb-3 mb-sm-5"> Testimoni</h3>
        <div class="row">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tb_testi");
            while ($pecah = $ambil->fetch_object()) {
                ?>
                <div class="col-lg-4 col-sm-6 test-info text-left mb-4">
                    <p><span class="fa fa-quote-left"></span> <?php echo $pecah->testi_pesan ?>. <span class="fa fa-quote-right"></span></p>
                    <div class="test-img text-right mb-3">
                    </div>
                    <h3 class="my-md-2 my-3 text-right"><?php echo $pecah->testi_ig ?></h3>
                </div>
            <?php } ?>
        </div>
</section>