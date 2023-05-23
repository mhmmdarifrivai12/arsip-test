    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header ">

            <h1>
                <i class="fa fa-dashboard"></i>
                Dashboard
                <small>Arsip 2023</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard" style=" font-weight: bold;"></i> Dashboard</a> / <a>Home</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h4>Admin</h4>
                            <h3><?= $tot_user ?></h3>

                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h4>Kategori</h4>
                            <h3><?= $tot_kategori ?></h3>

                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h4>Arsip</h4>
                            <h3><?= $tot_arsip ?></h3>

                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h4>Departemen</h4>
                            <h3><?= $tot_dep ?></h3>

                            <div class="icon">
                                <i class="fa fa-signal"></i>
                            </div>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>




            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->