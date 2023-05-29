    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header ">

            <h1>
                <i class="fa fa-dashboard"></i>
                Dashboard
                <small>Arsip 2023</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-lg-1 col-xs-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: bold;">Admin</span>
                            <span class="info-box-number"><?= $tot_user ?></span>
                            <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>


                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-lg-3 col-xs-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-folder-open-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: bold;">Kategori</span>
                            <span class="info-box-number"><?= $tot_kategori ?></span>
                            <a href="<?= base_url('kategori') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-lg-3 col-xs-3">
                    <div class="info-box">
                        <span class="icon info-box-icon bg-aqua"><i class="fa fa-file-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: bold;">Surat Masuk</span>
                            <span class="info-box-number"><?= $tot_arsip ?></span>
                            <a href="<?= base_url('arsip') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-lg-3 col-xs-3">
                    <div class="info-box">
                        <span class="icon info-box-icon bg-blue"><i class="fa fa-file-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: bold;">Surat Keluar</span>
                            <span class="info-box-number"><?= $tot_arsipp ?></span>
                            <a href="<?= base_url('arsipp') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>


                <div class="col-lg-3 col-xs-3">
                    <div class="info-box">
                        <span class="icon info-box-icon bg-yellow"><i class="fa fa-signal"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text" style="font-weight: bold;">Departemen</span>
                            <span class="info-box-number"><?= $tot_dep ?></span>
                            <a href="<?= base_url('departemen') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>


                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->