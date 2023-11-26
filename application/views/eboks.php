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

    <div class="site-section" id="portfolio-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h2 class="heading font-weight-bold mb-3"><?php echo $title ?></h2>
                </div>
            </div>

            <div class="filters text-lg-right" data-aos="fade-up" data-aos-delay="100">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <!-- <li data-filter=".packaging">Packaging</li> -->
                    <li class="dropdown show">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilih Kategori Lainnya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <?php foreach ($ebooks as $e) { ?>
                                <a class="dropdown-item" data-filter="<?php echo $e->nama_kategori ?>"><?php echo $e->nama_kategori ?></a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="filters-content mb-5" data-aos="fade-up" data-aos-delay="200">
                <!-- <div class="row grid">
                    <div class="isotope-card col-sm-4 all komputer">
                        <a href="images/img_v_4-min.jpg" data-fancybox="gal">
                            <img src="images/img_v_4-min.jpg" alt="Image" class="img-fluid">
                            <div class="contents">
                                <h3>Card Vol. 3</h3>
                                <div class="cat">Mockup</div>
                            </div>
                        </a>
                    </div>
                </div> -->

                <div class="row ">
                    <?php foreach ($ebooks as $e) { ?>
                        <?php if ($e->nama_kategori == $e->nama_kategori) { ?>
                            <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                                <div class="blog_entry">
                                    <a data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><img src="<?php echo base_url() . 'assets/ebooks/' . $e->foto ?>" alt="Politala" class="img-fluid p-4"></a>
                                    <div class="p-4 bg-white">
                                        <?php if ($e->status_buku == 'Free') { ?>
                                            <h3><a data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><?php echo $e->judul_buku ?></a> <span class=" badge bg-success text-white"><?php echo $e->status_buku ?></span></h3>
                                        <?php } else { ?>
                                            <h3><a data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><?php echo $e->judul_buku ?></a> <span class="  badge bg-info text-white"><?php echo $e->status_buku ?></span></h3>
                                        <?php } ?>
                                        <span class="date"><?php echo format_indo(date($e->tanggal_luncur)); ?></span>
                                        <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                                        <p class="more" data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><a>Continue reading...</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
                                <div class="blog_entry">
                                    <a data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><img src="<?php echo base_url() . 'assets/ebooks/' . $e->foto ?>" alt="Politala" class="img-fluid p-4"></a>
                                    <div class="p-4 bg-white">
                                        <?php if ($e->status_buku == 'Free') { ?>
                                            <h3><a data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><?php echo $e->judul_buku ?></a> <span class=" badge bg-success text-white"><?php echo $e->status_buku ?></span></h3>
                                        <?php } else { ?>
                                            <h3><a data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><?php echo $e->judul_buku ?></a> <span class="  badge bg-info text-white"><?php echo $e->status_buku ?></span></h3>
                                        <?php } ?>
                                        <span class="date"><?php echo format_indo(date($e->tanggal_luncur)); ?></span>
                                        <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
                                        <p class="more" data-toggle="modal" data-target="#exampleModal<?php echo $e->id_ebooks ?>"><a>Continue reading...</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <div class="pagination justify-content-center">
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
    <!-- .untrtee_co-section -->

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