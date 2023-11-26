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

    <title>Ebooks - Helpdesk Perpustakaan</title>
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
                        <li class="active"><a href="<?php echo base_url('cari_buku') ?>"><strong>Ebooks</strong></a></li>
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


    <div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('assets/images/p4.jpeg')">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 intro">
                    <h2 class="text-white font-weight-bold mb-3" data-aos="fade-up" data-aos-delay="0">Perpustakaan Politeknik Negeri Tanah Laut</h1>
                        <p class="text-white mb-4" data-aos="fade-up" data-aos-delay="100">masukkan satu atau lebih kata kunci dari judul, pengarang, atau subyek.</p>
                        <form method="POST" action="<?php echo base_url('cari_buku/search/') ?>" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
                            <input type="text" name="keyword" class="form-control" placeholder="e.g. Library and Information">
                            <input type="submit" class="btn btn-primary" value="Cari">
                        </form>
                </div>
            </div>
        </div>
        <div class="slant" style="background-image: url('assets/images/slant.svg');"></div>
    </div>