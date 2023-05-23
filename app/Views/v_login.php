<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arsip | <?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        body {
            background-color: #B0E0E6;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="hold-transition ">

    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>"><b>Arsip</b>Tekno</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body bg-gray-light" style="border-radius: 10px;">
            <h3 class="" style="font-weight: bold; padding-bottom: 2px">Masuk</h3>


            <div class="row " style="margin-top: -30px;">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <h3><i class="fa fa-qrcode" style="margin-left: 50px; "></i></h3>
                </div>
                <!-- /.col -->
            </div>

            <?php
            $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <ul>
                        <?php foreach ($errors as $key => $value) { ?>
                            <li><?= esc($value) ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php }
            ?>

            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-danger alert-dismissible">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
                # code...
            }
            ?>
            <?php echo form_open('auth/login') ?>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Email/Nomor Telepon" name="email" style="border-width: 2px; border-color: cyan; border-radius: 10px;">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password" style="border-width: 2px; border-color: cyan; border-radius: 10px;">
                <span class=" glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="social-auth-links text-center">
                <button type="submit" class="btn btn-block btn-flat" style="border-width: 2px; border-color: cyan; border-radius: 10px;">Masuk</button>
            </div>
            <!-- /.social-auth-links -->

            <a href="#">Lupa Password?</a><br>

            <?php echo form_close() ?>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>/template/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url() ?>/template/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>