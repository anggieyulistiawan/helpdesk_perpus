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

	<title>Helpdesk Perpustakaan</title>
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
						<li class="active"><a href="<?php echo base_url('welcome') ?>"><strong>Home</strong></a></li>
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


	<div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('assets/images/perpustakaan 1.jpeg')">

		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 intro">
					<h1 class="text-white font-weight-bold mb-1" data-aos="fade-up" data-aos-delay="0">PERPUSTAKAAN</h1>
					<h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Politeknik Negeri Tanah Laut</h2>
				</div>
			</div>
		</div>

		<div class="slant" style="background-image: url('assets/images/slant.svg');"></div>
	</div>

	<div class="site-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12 text-center" data-aos="fade-up">
					<h2 class="heading font-weight-bold mb-3">Pelayanan</h2>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
					<div class="unit-4 d-flex">
						<div class="unit-4-icon mr-4">
							<span class="feather-book"></span>
						</div>
						<div>
							<h3>Mengusulkan Buku</h3>
							<p>
								Mengusulkan buku merupakan proses mengajukan buku ke pihak Perpustakaan dengan tujuan untuk menerbitkan buku tersebut.
							</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
					<div class="unit-4 d-flex">
						<div class="unit-4-icon mr-4">
							<span class="feather-layers"></span>
						</div>
						<div>
							<h3>Arsip PKL & TA</h3>
							<p>
								Arsip laporan PKL dan TA adalah dokumen yang berisi laporan hasil kegiatan PKL atau TA yang telah selesai dilakukan.
							</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
					<div class="unit-4 d-flex">
						<div class="unit-4-icon mr-4">
							<span class="feather-search"></span>
						</div>
						<div>
							<h3>Informasi Judul PKL & TA</h3>
							<p>
								Pencarian judul PKL atau TA yang pernah diangkat sebelumnya dapat membantu dalam memperoleh inspirasi dan referensi dalam menentukan topik atau judul penelitian.
							</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>
				</div>


				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
					<div class="unit-4 d-flex">
						<div class="unit-4-icon mr-4">
							<span class="feather-user-check"></span>
						</div>
						<div>
							<h3>Pengajuan Surat Bebas Perpustakaan</h3>
							<p>
								Surat bebas Perpustakaan adalah surat yang dikeluarkan oleh Perpustakaan sebagai bukti bahwa seseorang telah mengembalikan semua buku.
							</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
					<div class="unit-4 d-flex">
						<div class="unit-4-icon mr-4">
							<span class="feather-book-open"></span>
						</div>
						<div>
							<h3>Membaca Online</h3>
							<p>
								Membaca buku online atau ebooks adalah salah satu cara untuk mengakses dan membaca buku secara digital melalui perangkat elektronik yang terhubung dengan internet.
							</p>
							<p><a href="<?php echo base_url('cari_buku') ?>">Learn More</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
					<div class="unit-4 d-flex">
						<div class="unit-4-icon mr-4">
							<span class="feather-activity"></span>
						</div>
						<div>
							<h3>Registrasi Pengunjung Perpustakaan</h3>
							<p>
								Suatu adalah proses pendaftaran pengunjung Perpustakaan yang harus dilakukan oleh setiap orang yang ingin memanfaatkan layanan perpustakaan.
							</p>
							<p><a href="#">Learn More</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="features-lg ">
		<div class="container">
			<div class="row feature align-items-center justify-content-between">
				<div class="col-lg-7 section-stack order-lg-2 mb-4 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="0">

					<div class="image-stack">
						<div class="image-stack__item image-stack__item--top">
							<img src="<?php echo base_url() ?>assets/images/p1.jpg" alt="">
						</div>
						<div class="image-stack__item image-stack__item--bottom">
							<img src="<?php echo base_url() ?>assets/images/perpustakaan 1.jpeg" alt="">
						</div>
					</div>

				</div>
				<div class="col-lg-4 section-title" data-aos="fade-up" data-aos-delay="100">

					<h2 class="font-weight-bold mb-4 heading">HELPDESK INFORMATION</h2>
					<p class="mb-4 text-justify">
						Helpdesk perpustakaan adalah sebuah layanan yang disediakan oleh pihak Perpustakaan untuk membantu pengunjung yang mengalami kesulitan atau masalah dalam menggunakan layanan Perpustakaan, seperti kesulitan dalam mencari buku atau bahan Perpustakaan, masalah teknis, atau lain sebagainya.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="site-section overlay site-cover-2" style="background-image: url('assets/images/p2.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2 class="text-white mb-4"> HELPDESK PERPUSTAKAAN POLITEKNIK NEGERI TANAH LAUT👋</h2>
					<p class="mb-0"><a href="<?php echo base_url('login') ?>" rel="noopener" class="btn btn-primary">Get Started!</a></p>
				</div>
			</div>
		</div>
	</div>