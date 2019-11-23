<!-- banner -->
<div class="banner" id="home">
    <div class="layer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 banner-text-w3ls">
                    <!-- banner slider-->
                    <div class="csslider infinity" id="slider1">
                        <input type="radio" name="slides" checked="checked" id="slides_1" />
                        <input type="radio" name="slides" id="slides_2" />
                        <input type="radio" name="slides" id="slides_3" />
                        <ul class="banner_slide_bg">
                            <li>
                                <div class="container-fluid">
                                    <div class="w3ls_banner_txt">
                                        <?php
                                        $ambil = $koneksi->query("SELECT * FROM tb_jadwal ORDER BY jadwal_harga ASC ");
                                        $pecah = $ambil->fetch_object();
                                        ?>
                                        <h3 class="b-w3ltxt text-capitalize mt-md-4">Padang</h3>
                                        <h4><span class="" aria-hidden="true"></span>- Pekan Baru</h4>
                                        <p><span class="" aria-hidden="true"></span>Mulai dari <?php echo rupiah($pecah->jadwal_harga) ?><p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="navigation">
                            <div>
                                <label for="slides_1"></label>
                            </div>
                        </div>
                    </div>
                    <!-- //banner slider-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->