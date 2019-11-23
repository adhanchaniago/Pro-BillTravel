<?php
$ambil = $koneksi->query("SELECT * FROM tb_kontak");
$pecah = $ambil->fetch_object();
?>
<section class="contact py-5" id="contact">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5"> Kontak Kami</h3>
        <ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
            <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                <div class=" adress-icon">
                    <span class="fa fa-map-marker"></span>
                </div>

                <h6>Lokasi</h6>
                <p>BIL Transport
                    <br>JL Dr. Sutomo, No. 5, Kubu Marapalam, Lubuk Begalung, Kota Padang, Sumatera Barat.</p>
            </li>

            <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                <div class="adress-icon">
                    <span class="fa fa-envelope-open-o"></span>
                </div>
                <h6>Telephone & Instagram</h6>
                <p></p>
                <a href="mailto:info@example.com" class="mail"><?php echo $pecah->kontak_wa ?></a>
                <a href="mailto:info@example.com" class="mail"><?php echo $pecah->kontak_ig ?></a>
            </li>
            <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                <div class="adress-icon">
                    <span class="fa fa-building"></span>
                </div>
                <h6>our branches</h6>
                <p>india</p>
                <p>china</p>

            </li>
        </ul>

        <div class="contact-grids mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 contact-left-form">
                    <h4>Tulis Ulasan Anda</h4>
                    <br>
                    <form action="" method="post">
                        <div class=" form-group contact-forms">
                            <input name="nama" type="text" class="form-control" placeholder="Nama" required="">
                        </div>
                        <div class="form-group contact-forms">
                            <input name="ig" type="text" class="form-control" placeholder="Instagram" required="">
                        </div>
                        <div class="form-group contact-forms">
                            <textarea name="pesan" class="form-control" placeholder="Pesan" rows="3" required=""></textarea>
                        </div>
                        <button name="kirim" class="btn btn-block sent-butnn">Kirim Testimoni</button>
                    </form>
                    <?php
                    if (isset($_POST['kirim'])) {
                        $nama = $_POST['nama'];
                        $ig = $_POST['ig'];
                        $pesan = $_POST['pesan'];

                        $simpan = $koneksi->query("INSERT INTO tb_testi (   testi_nama,
                                                                            testi_ig,
                                                                            testi_pesan) VALUES (
                                                                            '$nama',
                                                                            '$ig',
                                                                            '$pesan'
                        )");

                        if ($simpan) {
                            echo "<script>alert('Terimakasih atas ulasan Anda');location='index.php';</script>";
                        } else {
                            echo "<script>alert('Gagal mengirim ulasa');location='index.php';</script>";
                        }
                    }
                    ?>
                </div>
                <div class="col-lg-6 col-md-6 contact-right pl-lg-5">
                    <img src="images/c1.jpg" class="img-fluid" alt="user-image">
                </div>
            </div>
        </div>
    </div>
</section>