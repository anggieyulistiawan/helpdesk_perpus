<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Helpdesk Perpustakaan</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/politala.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-image: url('assets/img/login1.jpg');height: 100%;background-position: inherit;background-repeat: no-repeat;background-size: cover;background-position-y: center;">
    <!-- <div class="col-md-6 intro-info order-md-first order-last">
    <img src="assets/img/bg.jpg" alt="" class="img-fluid">  
</div> -->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-left">

            <div class="col-sm-5 mt-5 pl-5 ml-5">

                <div class="card shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <!-- <h1 class="h4 text-gray-900 mb-4"></i><strong></strong></h1> -->
                                        <h4 class="text-gray-900">HELPDESK👋</h4>
                                        <h5 class="text-gray-900 mb-3"><strong>Perpustakaan POLITALA</strong></h5>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form class="user" method="POST" action="<?php echo base_url('login') ?> ">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" name="username">
                                            <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                            <?php echo form_error('password', '<div class="text-small text-danger"></div>') ?>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <a href="welcome" class="btn btn-secondary btn-user btn-block">
                                            Kembali
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>