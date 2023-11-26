<!-- /*
* Template Name: Append
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/politala.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/feather/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <title>PKL - Helpdesk Perpustakaan</title>

</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="container">


        <nav class="site-nav">
            <div class="logo">
                <a href="<?php echo base_url('welcome') ?>" class="text-white">HELPDESK<span class="text-black">.</span></a>
            </div>
            <div class="row align-items-center">


                <div class="col-12 col-sm-12 col-lg-12 site-navigation text-center">
                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu">
                        <li class=""><a href="<?php echo base_url('welcome') ?>"><strong>Home</strong></a></li>
                        <li class=""><a href="<?php echo base_url('cari_buku') ?>"><strong>Ebooks</strong></a></li>
                        <li class="has-children">
                            <a href="#"><strong>Arsip PKL & TA</strong></a>
                            <ul class="dropdown">
                                <li><a href="<?php echo base_url('pkl') ?>">PKL</a></li>
                                <li><a href="<?php echo base_url('tugas_akhir') ?>">Tugas Akhir</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('registrasi') ?>"><strong>Registrasi</strong></a></li>
                    </ul>


                    <ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right menu-absolute">
                        <li class="cta-button"><a href="login">LOGIN</a></li>
                    </ul>

                    <a href="#" class="burger light ml-auto site-menu-toggle js-menu-toggle d-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>

            </div>
        </nav> <!-- END nav -->

    </div> <!-- END container -->


    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('assets/images/p5.jpg')">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 intro">
                    <h2 class="text-white font-weight-bold mb-3" data-aos="fade-up" data-aos-delay="0">Perpustakaan Politeknik Negeri Tanah Laut👋</h1>
                </div>
            </div>
        </div>
        <div class="slant" style="background-image: url('assets/images/slant.svg');"></div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 class="heading font-weight-bold mb-3">Praktek Kerja Lapangan</h2>
                </div>
            </div>

            <div class="card-body">
                <div class=" table-hover">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> </th>
                                <th>Tanggal Upload</th>
                                <th class="text-center">Judul yang diangkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pkl as $p) : ?>
                                <tr>
                                    <td>
                                        <center>
                                            <a class="btn btn-circle btn-lg" data-toggle="modal" data-target="#exampleModal<?php echo $p->id_pkl ?>"><i class="fas fa-search-plus"></i></a>
                                        </center>
                                    </td>
                                    <td><?php echo format_indo(date($p->tanggal_pkl)); ?></td>
                                    <td><?php echo $p->judul_pkl ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal -->
            <?php
            foreach ($pkl as $p) : ?>
                <div class="modal fade" id="exampleModal<?php echo $p->id_pkl ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Praktek Kerja Lapangan</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-4">
                                        <tr>
                                            <img class="mb-lg-3" src="<?php echo base_url() . 'assets/foto/' . $p->foto ?>" width="200px">
                                        </tr>
                                    </div>
                                    <div class="col-ml-8">
                                        <table class="table bg-gray-300">
                                            <tr>
                                                <th>Tanggal Upload</th>
                                                <td><?php echo format_indo(date($p->tanggal_pkl)); ?></td>
                                            </tr>


                                            <tr>
                                                <th>Mahasiswa</th>
                                                <td><?php echo $p->idp ?> - <?php echo $p->nama_akun ?></td>
                                            </tr>

                                            <tr>
                                                <th>Prodi</th>
                                                <td><?php echo $p->diploma ?> - <?php echo $p->nama_prodi ?></td>
                                            </tr>

                                            <tr>
                                                <th>Tempat PKL</th>
                                                <td><?php echo $p->tempat_pkl ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <tr>
                                                <th>Judul PKL</th>
                                                <td><?php echo $p->judul_pkl ?></td>
                                            </tr>

                                            <tr>
                                                <th>Dosen Pembimbing</th>
                                                <td><?php echo $p->dosen_pembimbing1 ?></td>
                                            </tr>

                                            <tr>
                                                <th>Dosen Penguji</th>
                                                <td><?php echo $p->dosen_penguji1 ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="site-footer">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 text-justify">
                            <div class="widget">
                                <h3>About</h3>
                                <p>
                                    Tim helpdesk perpustakaan akan membantu pengunjung dalam menyelesaikan masalah atau memberikan informasi yang dibutuhkan sehubungan dengan layanan perpustakaan. Dengan adanya layanan helpdesk, diharapkan pengunjung dapat memperoleh pengalaman penggunaan perpustakaan yang lebih nyaman dan lancar.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="widget">
                                        <h3>Navigations</h3>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-5">
                                    <div class="widget">
                                        <ul class="links list-unstyled">
                                            <li><a href="<?php echo base_url('welcome') ?>">Home</a></li>
                                            <li><a href="<?php echo base_url('pkl') ?>">Praktek Kerja Lapangan</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4">
                                    <div class="widget">
                                        <ul class="links list-unstyled">
                                            <li><a href="<?php echo base_url('cari_buku') ?>">Ebooks</a></li>
                                            <li><a href="<?php echo base_url('tugas_akhir') ?>">Tugas Akhir</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <div class="widget">
                                        <ul class="links list-unstyled">
                                            <li><a href="<?php echo base_url('registrasi') ?>">Registrasi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="widget">
                                <h3>Connect with us</h3>
                                <ul class="social list-unstyled">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li><a href="#"><span class="icon-dribbble"></span></a></li>
                                    <li><a href="#"><span class="icon-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="overlayer"></div>
            <div class="loader">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery-migrate-3.0.0.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/aos.js"></script>
            <script src="<?php echo base_url() ?>assets/js/imagesloaded.pkgd.js"></script>
            <script src="<?php echo base_url() ?>assets/js/isotope.pkgd.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/jquery.fancybox.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/custom.js"></script>


</body>

</html>