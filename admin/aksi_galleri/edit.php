<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_jadwal WHERE jadwal_id = $id");
$pecah = $ambil->fetch_object();
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-1">
                <div class="col-md-12">
                    <pre>
                        <?php print_r($pecah); ?>
                    </pre>
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_jadwal" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Edit</strong> Jadwal Perjalanan
                                </div>
                                <div class="card-body card-block ">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Destinasi Awal</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input value="<?php echo $pecah->jadwal_id ?>" type="hidden" name="id" class="form-control">
                                            <input value="<?php echo $pecah->jadwal_dari ?>" type="text" name="dari" class="form-control">
                                            <small class="form-text text-muted">Gunakan huruf kapita di awal kata</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Destinasi Tujuan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input value="<?php echo $pecah->jadwal_ke ?>" type="text" name="ke" class="form-control">
                                            <small class="form-text text-muted">Gunakan huruf kapita di awal kata</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class="form-control-label">Jam Keberangkatan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input value="<?php echo $pecah->jadwal_jam ?>" type="time" name="jam" class="form-control">
                                            <small class="form-text text-muted">Format AM/PM. AM = 00.00-11.59, PM = 12.00 - 23.59</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Paket</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="paket" class="form-control">
                                                <option value="<?php echo $pecah->jadwal_paket ?>">Pilih</option>
                                                <option value="Ekonomi">Ekonomi</option>
                                                <option value="Exclisive">Exclisive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Mobil</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="mobil" class="form-control">
                                                <option value="<?php echo $pecah->jadwal_mobil ?>">Pilih</option>
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
                                                <option value="<?php echo $pecah->jadwal_jumlah ?>">Pilih</option>
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
                                            <input value="<?php echo $pecah->jadwal_id ?>" type="number" name="harga" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button name="edit" type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Edit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['edit'])) {
                        $id   = $_POST['id'];
                        $dari   = $_POST['dari'];
                        $ke     = $_POST['ke'];
                        $jam    = $_POST['jam'];
                        $paket  = $_POST['paket'];
                        $mobil  = $_POST['mobil'];
                        $jumlah = $_POST['jumlah'];
                        $harga  = $_POST['harga'];

                        $edit = $koneksi->query("UPDATE tb_jadwal SET  `jadwal_dari`='$dari',
                                                                        `jadwal_ke`='$ke', 
                                                                        `jadwal_jam`='$jam', 
                                                                        `jadwal_paket`='$paket', 
                                                                        `jadwal_mobil`='$mobil', 
                                                                        `jadwal_jumlah`='$jumlah', 
                                                                        `jadwal_harga`='$harga'
                                                                        WHERE jadwal_id = '$id' ");

                        if ($edit) {
                            echo "<script>alert('Data berhasil di edit');window.location='index.php?page=data_jadwal';</script>";
                        } else {
                            echo "<script>alert('Data gagal di edit');window.location='index.php?page=aksi_jadwal/tambah';</script>";
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