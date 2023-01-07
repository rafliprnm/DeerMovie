<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">


</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="d-lg-block" href="<?= site_url() ?>index.php/main">
				<img width="auto" height="80px" src="<?= base_url() ?>asset/img/icon/logo.png">
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav me-auto px-5" style="--bs-scroll-height: 100px;">
					<li class="nav-itepx-2">
						<a class="nav-link fs-5 fw-semibold px-3" href="<?= site_url() ?>index.php/main">Home</a>
					</li>
					<li class="nav-item px-2">
						<a class="nav-link fs-5 fw-semibold px-3" href="<?= site_url() ?>index.php/main/newRealese">New Release</a>
					</li>
					<li class="nav-item dropdown px-2">
						<a class="nav-link dropdown-toggle fs-5 fw-semibold px-3" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Category</a>
						<ul class="dropdown-menu dropdown-menu-dark">
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryAction">Action</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryAdventure">Adventure</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryAnimation">Animation</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryComedy">Comedy</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryCrime">Crime</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryDrama">Drama</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryFamily">Family</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryHorror">Horror</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categorySciFi">Sci-Fi</a></li>
							<li><a class="dropdown-item" href="<?= site_url() ?>index.php/main/categoryWar">War</a></li>
						</ul>
					</li>
				</ul>
				<ul class="navbar-nav my-auto navbar-nav-scroll navbar-right">
					<li class="nav-link my-auto text-center">
						<?php foreach ($user as $u) : ?>
							<img class="rounded" width="45" height="45" src="<?= base_url() ?>uploads/<?= $u->avatar ?>" alt="<?= $u->avatar ?>">
							<h6 class=""><?= $u->username ?></h6>
						<?php endforeach ?>
					</li>
					<li class="nav-link my-2">
						<a href="<?= site_url(); ?>index.php/site/logout">
							<button class="btn btn-default text-white fw-semibold m-auto">Logout</button>
						</a>
					</li>
					<li class="my-3">
						<div class="toggle-button">
							<div class="toggle-ball"> </div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="main">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-3">
					<div class="poster">
						<?php if (substr($detail['poster'], -4) == ".jpg" or substr($detail['poster'], -4) == ".png" or substr($detail['poster'], -5) == ".jpeg") : ?>
							<img class="rounded mx-auto" width="200" height="300" src="<?= base_url() ?>uploads/<?= $detail['poster'] ?> " alt="">
						<?php else : ?>
							<img class="rounded mx-auto" width="200" height="300" src="<?= $detail['poster'] ?> " alt="">
						<?php endif ?>
					</div>
					<div class="mt-2">
						<h5><a href="<?= site_url() ?>index.php/main/buttonLike/<?= $detail['id_movie'] ?>"><i id="like" class="like bi bi-heart text-danger"></i></a> <?= $detail['vote'] ?> votes</h5>
						<h5><i class="bi bi-star-fill text-warning"></i> <?= $detail['rating'] ?> ratings</h5>
					</div>
				</div>
				<div class="col-md-6">
					<h3><?= $detail['title'] ?></h3>
					<p><?= $detail['year'] ?></p>
					<a href="<?= base_url() ?>asset/video/trailer.mp4">
						<button class="btn btn-default text-white fw-semibold w-25 mb-3">
							<i class="bi bi-play-fill"></i>
							Play
						</button>
					</a>
					<p><?= $detail['description'] ?></p>
					<h4>Details</h4>
					<table class="table text-white">
						<tbody>
							<tr>
								<td>Genres</td>
								<td><?= $detail['genre'] ?></td>
							</tr>
							<tr>
								<td>Duration</td>
								<td><?= $detail['duration'] ?></td>
							</tr>
							<tr>
								<td>Certificate</td>
								<td><?= $detail['certificate'] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					<h4>Director</h4>
					<div class="row justify-content-start mb-3">
						<div class="col-3">
							<img class="rounded-circle" width="50" height="50" src="<?= base_url() ?>asset/img/icon/profile.png" alt="">
						</div>
						<div class="col-9">
							<h6 class="pt-3"><?= $detail['director'] ?></h6>
						</div>
					</div>
					<h4>Artist</h4>
					<div class="row mb-2">
						<div class="col-3">
							<img class="rounded-circle" width="50" height="50" src="<?= base_url() ?>asset/img/icon/profile.png" alt="">
						</div>
						<div class="col-9">
							<h6 class="pt-3"><?= $detail['star1'] ?></h6>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-3">
							<img class="rounded-circle" width="50" height="50" src="<?= base_url() ?>asset/img/icon/profile.png" alt="">
						</div>
						<div class="col-9">
							<h6 class="pt-3"><?= $detail['star2'] ?></h6>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-3">
							<img class="rounded-circle" width="50" height="50" src="<?= base_url() ?>asset/img/icon/profile.png" alt="">
						</div>
						<div class="col-9">
							<h6 class="pt-3"><?= $detail['star3'] ?></h6>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-3">
							<img class="rounded-circle" width="50" height="50" src="<?= base_url() ?>asset/img/icon/profile.png" alt="">
						</div>
						<div class="col-9">
							<h6 class="pt-3"><?= $detail['star4'] ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer>
		<p class="text-secondary">&copy 1997-2022 DeerMovie, Inc.</p>
		<p class="text-secondary">Kelompok 3 &copy 2022</p>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="javaScript/bootstrap.bundle.min.js"></script>
	<script>
		$('.toggle-button').click(function() {
			$('body').toggleClass('light-mode-active');

		});

		$('.toggle-button').click(function() {
			$('.toggle-button').toggleClass('light-mode-active');
		})

		$('.toggle-button').click(function() {
			$('.toggle-ball').toggleClass('light-mode-active');
		})

		$('.toggle-button').click(function() {
			$('.table').toggleClass('light-mode-active');
		})

		$('.like').click(function() {
			$('.like').toggleClass('like-color');
		})
		$("#like").click(function() {
			$(this).toggleClass('bi bi-heart-fill');
			$(this).toggleClass('bi bi-heart');
		});
	</script>

</body>

</html>
