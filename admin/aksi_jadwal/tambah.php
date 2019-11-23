<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_jadwal" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Tambah</strong> Galleri
                                </div>
                                <div class="card-body card-block ">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Destinasi Awal</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="dari" class="form-control">
                                            <small class="form-text text-muted">Gunakan huruf kapita di awal kata</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Destinasi Tujuan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="ke" class="form-control">
                                            <small class="form-text text-muted">Gunakan huruf kapita di awal kata</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class="form-control-label">Jam Keberangkatan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="time" name="jam" class="form-control">
                                            <small class="form-text text-muted">Format AM/PM. AM = 00.00-11.59, PM = 12.00 - 23.59</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Paket</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="paket" class="form-control">
                                                <option>Pilih</option>
                                                <option value="Ekonomi">Ekonomi</option>
                                                <option value="Exclusive">Exclusive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Mobil</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="mobil" class="form-control">
                                                <option>Pilih</option>
                                                <option value="Panther">Panther</option>
                                                <option value="Inova">Inova</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Kapasitas</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="jumlah" class="form-control">
                                                <option>Pilih</option>
                                                <option value="5">5</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Harga</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" name="harga" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button name="simpan" type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Simpan
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['simpan'])) {
                        $dari   = $_POST['dari'];
                        $ke     = $_POST['ke'];
                        $jam    = $_POST['jam'];
                        $paket  = $_POST['paket'];
                        $mobil  = $_POST['mobil'];
                        $jumlah = $_POST['jumlah'];
                        $harga  = $_POST['harga'];

                        $simpan = $koneksi->query("INSERT INTO `tb_jadwal`( `jadwal_dari`, 
                                                                            `jadwal_ke`, 
                                                                            `jadwal_jam`, 
                                                                            `jadwal_paket`, 
                                                                            `jadwal_mobil`, 
                                                                            `jadwal_jumlah`, 
                                                                            `jadwal_harga`) VALUES 
                                                                            ('$dari',
                                                                            '$ke',
                                                                            '$jam',
                                                                            '$paket',
                                                                            '$mobil',
                                                                            '$jumlah',
                                                                            '$harga')");

                        if ($simpan) {
                            echo "<script>alert('Data berhasil di simpan');window.location='index.php?page=data_jadwal';</script>";
                        } else {
                            echo "<script>alert('Data gagal di simpan');window.location='index.php?page=aksi_jadwal/tambah';</script>";
                        }
                    }
                    ?>
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