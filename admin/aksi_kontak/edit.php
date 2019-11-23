<?php
$ambil = $koneksi->query("SELECT * FROM tb_kontak WHERE kontak_id = 1");
$pecah = $ambil->fetch_object();
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_kontak" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Edit</strong> Kontak
                                </div>
                                <div class="card-body card-block ">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Whatsapp</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input value="<?php echo $pecah->kontak_wa ?>" type="text" name="wa" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Instagra</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input value="<?php echo $pecah->kontak_ig ?>" type="text" name="ig" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class="form-control-label">Facebook</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input value="<?php echo $pecah->kontak_fb ?>" type="text" name="fb" class="form-control">
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
                        $wa   = $_POST['wa'];
                        $ig   = $_POST['ig'];
                        $fb   = $_POST['fb'];

                        $edit = $koneksi->query("UPDATE tb_kontak SET   `kontak_wa`='$wa',
                                                                        `kontak_ig`='$ig', 
                                                                        `kontak_fb`='$fb'
                                                                        WHERE kontak_id = '1' ");

                        if ($edit) {
                            echo "<script>alert('Data berhasil di edit');window.location='index.php?page=data_kontak';</script>";
                        } else {
                            echo "<script>alert('Data gagal di edit');window.location='index.php?page=aksi_kontak/edit';</script>";
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