<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dashboard Admin</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url() ?>asset/img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Template Stylesheet -->
	<link href="<?= base_url() ?>asset/css/admin/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-xxl position-relative d-flex p-0">


		<!-- Sidebar Start -->
		<div class="sidebar pe-4 pb-3">
			<nav class="navbar bg-light navbar-light">
				<a href="index.html" class="navbar-brand mx-4 mb-3">
					<h4 class="text">Dashboard Admin</h4>
				</a>
				<div class="d-flex align-items-center ms-4 mb-4">
					<div class="position-relative">
						<img class="rounded-circle" src="<?= base_url() ?>asset/img/icon/profile.png" alt="" style="width: 40px; height: 40px;">
						<div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
					</div>
					<div class="ms-3">
						<h6 class="mb-0"><?= $this->session->userdata('username') ?></h6>

					</div>
				</div>
				<div class="navbar-nav w-100">
					<a href="<?= base_url('index.php/admin/') ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
					<a href="<?= base_url('index.php/admin/form') ?>" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Forms</a>
					<a href="<?= base_url('index.php/admin/dataMovie') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables Movie</a>
					<a href="<?= base_url('index.php/admin/dataUser') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables User</a>


				</div>
			</nav>
		</div>
		<!-- Sidebar End -->


		<!-- Content Start -->
		<div class="content">
			<!-- Navbar Start -->
			<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
				<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
					<h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
				</a>
				<a href="#" class="sidebar-toggler flex-shrink-0">
					<i class="fa fa-bars"></i>
				</a>
				<form class="d-none d-md-flex ms-4">
					<input class="form-control border-0" type="search" placeholder="Search">
				</form>
				<div class="navbar-nav align-items-center ms-auto">
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
							<img class="rounded-circle me-lg-2" src="<?= base_url() ?>asset/img/icon/profile.png" alt="" style="width: 40px; height: 40px;">
							<span class="d-none d-lg-inline-flex"><?= $this->session->userdata('username') ?></span>
						</a>
						<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
							<a href="<?= site_url(); ?>index.php/site/logout" class="dropdown-item">Log Out</a>
						</div>
					</div>
				</div>
			</nav>
			<!-- Navbar End -->


			<!-- Sale & Revenue Start -->
			<div class="container-fluid pt-4 px-4 text-center">
				<div class="row justify-content-evenly mb-3">
					<div class="col-sm-6 col-xl-3">
						<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-film fa-3x text-primary"></i>
							<?php foreach ($movie as $d) : ?>
								<div class="ms-3">
									<h6 class="mb-2">Total Movie</h6>
									<h6 class="mb-0"><?= $d->total  ?></h6>
								</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-film fa-3x text-primary"></i>
							<?php foreach ($newmovie as $d) : ?>
								<div class="ms-3">
									<h6 class="mb-2">New Movie</h6>
									<h6 class="mb-0"><?= $d->total  ?></h6>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
				<div class="row justify-content-evenly">
					<div class="col-sm-6 col-xl-3">
						<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-user fa-3x text-primary"></i>
							<?php foreach ($user as $d) : ?>
								<div class="ms-3">
									<h6 class="mb-2">Total User</h6>
									<h6 class="mb-0"><?= $d->total  ?></h6>
								</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="col-sm-6 col-xl-3">
						<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
							<i class="fa fa-user fa-3x text-primary"></i>
							<?php foreach ($userAge as $d) : ?>
								<div class="ms-3">
									<h6 class="mb-2">Total Member</h6>
									<h6 class="mb-0"><?= $d->total  ?></h6>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Sale & Revenue End -->



			<!-- Widgets End -->


			<!-- Footer Start -->
			<div class="container-fluid pt-4 px-4">
				<div class="bg-light rounded-top p-4">
					<div class="row">
						<div class="col-12 col-sm-6 text-center text-sm-start">
							&copy; <a href="#">DeerMovie</a>
						</div>
						<div class="col-12 col-sm-6 text-center text-sm-end">
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a href="https://htmlcodex.com">HTML Codex</a>
							</br>
							Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</div>
		<!-- Content End -->


		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="lib/chart/chart.min.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/waypoints/waypoints.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/tempusdominus/js/moment.min.js"></script>
	<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="js/main.js"></script>
</body>

</html>
