<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Masuk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img" src="<?php echo base_url()?>assets/images/logo.png" alt="logo"></a><span class="splash-description">Gunakan Akun Anda untuk Masuk</span></div>
            <div class="card-body">
                <div id="infoMessage">
                    <?php
                        $message = $this->session->flashdata('message');
                        echo $message == '' ? '' : '<div class="alert alert-danger">' . $message . '</div>';
                      ?>
                </div>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ?>
                <?php echo form_open('login/login_proses'); ?>
                <fieldset>
                    <div class="form-group">
                        <input name="nama" class="form-control form-control-lg" id="name" type="text" placeholder="Nama" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input name="sandi" class="form-control form-control-lg" id="sandi" type="password" required="true" placeholder="Sandi" >
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Ingat Pass</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-login"></i> Masuk</button>
                </fieldset>
                <?php echo form_close();?>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Lupa Sandi ?</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
