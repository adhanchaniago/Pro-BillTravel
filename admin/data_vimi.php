<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Visi dan Misi</h2>
                    </div>
                </div>
            </div>
            <div class="m-t-25"></div>

            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="col-lg-8">
                        <a href="index.php?page=aksi_vimi/edit" class="btn btn-primary ">Edit</a>
                        <div class="card m-t-25">
                            <div class="card-header">
                                <strong>Data</strong> Visi dan Misi Perusahaan
                            </div>
                            <div class="card-body card-block">
                                <?php
                                $ambil = $koneksi->query("SELECT * FROM tb_vimi WHERE vimi_id = 1");
                                $pecah = $ambil->fetch_object();
                                ?>
                                <form action="" method="post" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <small class="form-text text-muted">Visi</small>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-bars"></i>
                                                </div>
                                                <textarea disabled class="form-control" name="visi" id="" cols="30" rows="10">
                                                <?php echo $pecah->vimi_visi ?>
                                                </textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <small class="form-text text-muted">Misi</small>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-bars"></i>
                                                </div>
                                                <textarea disabled class="form-control" name="misi" id="" cols="30" rows="10">
                                                <?php echo $pecah->vimi_misi ?>
                                                </textarea>
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