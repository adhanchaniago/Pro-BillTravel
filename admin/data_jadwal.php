<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Jadwal Perjalanan</h2>
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <a href="index.php?page=aksi_jadwal/tambah" class="btn btn-primary ">Tambah</a>
                        <table class="table table-borderless table-data2 m-t-25">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Dari</th>
                                    <th>Tujuan</th>
                                    <th>Jam</th>
                                    <th>Paket</th>
                                    <th>Mobil</th>
                                    <th>Jumlah <br> Penumpang</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $ambil = $koneksi->query("SELECT * FROM tb_jadwal");
                                while ($pecah = $ambil->fetch_object()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $pecah->jadwal_dari ?></td>
                                        <td><?php echo $pecah->jadwal_ke ?></td>
                                        <td><?php echo $pecah->jadwal_jam ?> </td>
                                        <td><?php echo $pecah->jadwal_paket ?></td>
                                        <td><?php echo $pecah->jadwal_mobil ?></td>
                                        <td><?php echo $pecah->jadwal_jumlah ?> Orang </td>
                                        <td><?php echo rupiah($pecah->jadwal_harga) ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <a href="index.php?page=aksi_jadwal/edit&id=<?php echo $pecah->jadwal_id ?>"><i class="zmdi zmdi-edit"></i></a>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                    <a href="index.php?page=aksi_jadwal/hapus&id=<?php echo $pecah->jadwal_id ?>"><i class="zmdi zmdi-delete"></i></a>

                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © <?php echo date('Y') ?> PT. Putra Bill Tranposrts. Mediatama by <a href="https://www.instagram.com/egovaflavia/" target="_blank">Egova</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>