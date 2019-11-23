<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Profil Perusahaan</h2>
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="col-lg-12">
                        <a href="index.php?page=aksi_profil/edit" class="btn btn-primary ">Edit</a>
                        <div class="card m-t-25">
                            <div class="card-header">
                                <strong>Data</strong> Profil
                            </div>
                            <div class="card-body card-block">
                                <?php
                                $ambil = $koneksi->query("SELECT * FROM tb_profil WHERE profil_id = 1");
                                $pecah = $ambil->fetch_object();
                                ?>
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <small class="form-text text-muted">Profil Perusahaan</small>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-mobile-phone"></i>
                                                </div>
                                                <textarea style="text-align: justify;" name="" class="form-control" disabled id="" cols="30" rows="10"><?php echo $pecah->profil_ket ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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