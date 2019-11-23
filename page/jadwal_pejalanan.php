<section class="testimonials py-5" id="testimonials">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Jadwal Perjalanan</h3>
        <div class="row">
            <div class="col-lg-12 ">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Dari</th>
                            <th>Tujuan</th>
                            <th>Jam</th>
                            <th>Paket</th>
                            <th>Mobil</th>
                            <th>Penumpang</th>
                            <th>Harga</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody class="thead-light">
                        <?php
                        $ambil_kontak = $koneksi->query("SELECT * FROM tb_kontak");
                        $pecah_kontak = $ambil_kontak->fetch_object();
                        $ambil = $koneksi->query("SELECT * FROM tb_jadwal");
                        while ($pecah = $ambil->fetch_object()) {
                            ?>
                            <tr>
                                <th><?php echo $pecah->jadwal_dari ?></th>
                                <th><?php echo $pecah->jadwal_ke ?></th>
                                <th><?php echo $pecah->jadwal_jam ?></th>
                                <th><?php echo $pecah->jadwal_paket ?></th>
                                <th><?php echo $pecah->jadwal_mobil ?></th>
                                <th><?php echo $pecah->jadwal_jumlah ?> Orang</th>
                                <th><?php echo rupiah($pecah->jadwal_harga) ?></th>
                                <th>
                                    <a target="_blank" href="https://wa.me/<?php echo $pecah_kontak->kontak_wa ?>" class="btn btn-primary">Pesan</a>
                                </th>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>