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

	<title>Buku Tamu Pengunjung - Helpdesk Perpustakaan</title>
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
						<li><a href="<?php echo base_url('welcome') ?>"><strong>Home</strong></a></li>
						<li class=""><a href="<?php echo base_url('cari_buku') ?>"><strong>Ebooks</strong></a></li>
						<li class="has-children">
							<a href="#"><strong>Arsip PKL & TA</strong></a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('pkl') ?>">PKL</a></li>
								<li><a href="<?php echo base_url('tugas_akhir') ?>">Tugas Akhir</a></li>
							</ul>
						</li>
						<li class="active"><a href="<?php echo base_url('welcome') ?>"><strong>Registrasi</strong></a></li>
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


	<div class="hero-slant overlay" data-stellar-background-ratio="0.5" style="background-image: url('assets/images/p3.jpg')">

		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 intro">
					<h2 class="text-white font-weight-bold mb-3" data-aos="fade-up" data-aos-delay="0">Perpustakaan Politeknik Negeri Tanah Laut</h2>
				</div>

				<div class="col-lg-6 intro">
					<div class=" card-header bg-light text-lg-center">
						<h4><strong>Buku Tamu</strong></h4>
					</div>
					<div class="container bg-white p-4">
						<?php echo $this->session->flashdata('pesan') ?>

						<div class="block">
							<div class="row justify-content-center">

								<div class="col-md-12 col-lg-12 pb-4" data-aos="fade-up" data-aos-delay="200">
									<form method="POST" action="<?php echo base_url('registrasi/tambah_data_aksi/') ?>" enctype="multipart/form-data">
										<div class="form-group">
											<label class="text-black">Nomor Induk Mahasiswa (NIM)</label>
											<input type="text" class="form-control" name="nim" placeholder="Masukan Nomor Induk Mahasiswa">
										</div>
										<div class="form-group">
											<label class="text-black">Nama Lengkap</label>
											<input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap">
											<!-- <input type="hidden" name="tanggal_registrasi" value="<?= date('Y-m-d') ?>" class="form-control" readonly> -->
										</div>
										<div class="form-group">
											<label class="text-black">Program Studi</label>
											<select class="form-control" name="id_prodi" required>
												<option class=" text-center">----- Pilih Program Studi -----</option>
												<?php
												foreach ($prodi as $p) { ?>
													<option value="<?php echo $p->id_prodi ?>"><?php echo $p->diploma ?> - <?php echo $p->nama_prodi ?></option>
												<?php } ?>
											</select>
										</div>

										<button type="submit" class="btn btn-primary btn-user btn-block">
											Submit
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


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