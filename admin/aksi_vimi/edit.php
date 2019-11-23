<?php
$ambil = $koneksi->query("SELECT * FROM tb_vimi WHERE vimi_id = 1");
$pecah = $ambil->fetch_object();
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-1">
                <div class="col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-lg-12">
                            <a href="index.php?page=data_vimi" class="btn btn-primary ">Kembali</a>
                            <div class="m-t-25 card">
                                <div class="card-header">
                                    <strong>Edit</strong> Visi dan Misi Perusahaan
                                </div>
                                <div class="card-body card-block ">
                                    <div class="form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Visi Perusahaan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="visi" id="summernote" cols="30" rows="50"><?php echo $pecah->vimi_visi ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Misi Perusahaan</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="misi" id="summernote2" cols="30" rows="50"><?php echo $pecah->vimi_misi ?></textarea>
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
                        $visi   = $_POST['visi'];
                        $misi   = $_POST['misi'];

                        $edit = $koneksi->query("UPDATE tb_vimi SET     `vimi_visi`='$visi',
                                                                        `vimi_misi`='$misi'
                                                                        WHERE vimi_id = '1' ");

                        if ($edit) {
                            echo "<script>alert('Data berhasil di edit');window.location='index.php?page=data_vimi';</script>";
                        } else {
                            echo "<script>alert('Data gagal di edit');window.location='index.php?page=aksi_vimi/edit';</script>";
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