<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
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

	<section class="recomend">
		<div id="carousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" style="background-image:url('<?= base_url() ?>asset/img/movie/slider1.jpg')" data-interval="3000">
					<div class="container">
						<h2>Avengers: Age of Ultron</h2>
						<p>Tony Stark creates the Ultron Program to protect the world, but when the peacekeeping program becomes hostile, The Avengers go into action to try and defeat a virtually impossible enemy together. Earth's mightiest heroes must come together once again to protect the world from global extinction.</p>
						<button class="btn btn-default text-white fw-semibold">
							<i class="bi bi-play-fill"></i>
							Play
						</button>
						<button class="btn btn-secondary text-white fw-semibold">See Details</button>
					</div>
				</div>
				<div class="carousel-item" style="background-image:url('<?= base_url() ?>asset/img/movie/avatar.jpg')" data-interval="3000">
					<div class="container">
						<h2>Avatar</h2>
						<p>A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home. When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora.</p>
						<button class="btn btn-default text-white fw-semibold">
							<i class="bi bi-play-fill"></i>
							Play
						</button>
						<button class="btn btn-secondary text-white fw-semibold">See Details</button>
					</div>
				</div>
				<div class="carousel-item" style="background-image:url('<?= base_url() ?>asset/img/movie/f3.jpg')" data-interval="3000">
					<div class="container">
						<h2>Five Feet Apart</h2>
						<p>A pair of teenagers with cystic fibrosis meet in a hospital and fall in love, though their disease means they must avoid close physical contact. A pair of teenagers with cystic fibrosis meet in a hospital and fall in love, though their disease means they must avoid close physical contact.</p>
						<button class="btn btn-default text-white fw-semibold">
							<i class="bi bi-play-fill"></i>
							Play
						</button>
						<button class="btn btn-secondary text-white fw-semibold">See Details</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="topTen mt-3">
		<div class="container-fluid">
			<h3 class="mb-0 mt-3">Top 10 Today</h3>
			<div class="slider ">
				<div class="slide-track d-flex justify-content-center mt-2 overflow-hidden">
					<?php
					$i = 1;
					foreach ($top10 as $top) :

					?>
						<div class="slide">
							<div class="card bg-secondary p-1 mx-2 ">
								<div class="card rank">
									<h5 class="m-auto">#<?= $i++ ?></h5>
								</div>
								<img class="rounded " width="200" height="300" src="<?= $top->poster ?>" alt="">
							</div>
						</div>
					<?php
					endforeach;
					?>
					<?php
					$j = 1;
					foreach ($top10 as $top) :
					?>
						<div class="slide">
							<div class="card bg-secondary p-1 mx-2 ">
								<div class="card rank">
									<h5 class="m-auto">#<?= $j++ ?></h5>
								</div>
								<img class="rounded " width="200" height="300" src="<?= $top->poster ?>" alt="">
							</div>
						</div>
					<?php
					endforeach;
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="TopPick">
		<div class="container-fluid">
			<h3 class="mb-3 ">Top Rating </h3>
			<div class="movies container-fluid m-0 mt-2">
				<?php
				foreach ($topRating as $movie) :
				?>
					<div class="card bg-secondary p-1 mx-2 ">
						<div class="card-movie">
							<div class="poster">
								<?php if (substr($movie->poster, -4) == ".jpg" or substr($movie->poster, -4) == ".png" or substr($movie->poster, -5) == ".jpeg") : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= base_url() ?>uploads/<?= $movie->poster ?> " alt="">
								<?php else : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= $movie->poster ?> " alt="">
								<?php endif ?>
							</div>
							<div class="details">
								<h2><?= $movie->title ?>
									<br><span>Directed by <?= $movie->director ?></span>
								</h2>
								<div class="info">
									<p><?= $movie->description ?></p>
								</div>
								<div class="row justify-content-between info2">
									<?php if ($movie->rating > 8) : ?>
										<div class="col-4 card bg-success px-auto">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating >= 4 && $movie->rating <= 8) : ?>
										<div class="col-4 card bg-warning">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating < 4) : ?>
										<div class="col-4 card bg-danger">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php endif ?>
									<div class="col-6 card bg-light">
										<p class="text-center text-black m-auto fw-semibold h-auto" style="font-size: 13px;"><i class="bi bi-clock fw-semibold mr-3" style="font-size: 13px;"> </i><span><?= $movie->duration ?></span></p>
									</div>
								</div>
								<div class="mt-4 infoPlay">
									<a href="<?= site_url() ?>index.php/main/movie/<?= $movie->id_movie ?>"><button class="btn btn-default text-white fw-semibold ">
											Watch
										</button></a>

								</div>

							</div>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</section>

	<section class="action">
		<div class="container-fluid">
			<h3 class="mb-3 mt-5 ">Action</h3>
			<div class="movies container-fluid m-0 mt-2">
				<?php
				foreach ($actionHome as $movie) :
				?>
					<div class="card bg-secondary p-1 mx-2 ">
						<div class="card-movie">
							<div class="poster">
								<?php if (substr($movie->poster, -4) == ".jpg" or substr($movie->poster, -4) == ".png" or substr($movie->poster, -5) == ".jpeg") : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= base_url() ?>uploads/<?= $movie->poster ?> " alt="">
								<?php else : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= $movie->poster ?> " alt="">
								<?php endif ?>
							</div>
							<div class="details">
								<h2><?= $movie->title ?>
									<br><span>Directed by <?= $movie->director ?></span>
								</h2>
								<div class="info">
									<p><?= $movie->description ?></p>
								</div>
								<div class="row justify-content-between info2">
									<?php if ($movie->rating > 8) : ?>
										<div class="col-4 card bg-success px-auto">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating >= 4 && $movie->rating <= 8) : ?>
										<div class="col-4 card bg-warning">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating < 4) : ?>
										<div class="col-4 card bg-danger">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php endif ?>
									<div class="col-6 card bg-light">
										<p class="text-center text-black m-auto fw-semibold h-auto" style="font-size: 13px;"><i class="bi bi-clock fw-semibold mr-3" style="font-size: 13px;"> </i><span><?= $movie->duration ?></span></p>
									</div>
								</div>
								<div class="mt-4 infoPlay">
									<a href="<?= site_url() ?>index.php/main/movie/<?= $movie->id_movie ?>"><button class="btn btn-default text-white fw-semibold ">
											Watch
										</button></a>

								</div>

							</div>
						</div>
					</div>
				<?php
				endforeach;
				?>

			</div>
	</section>

	<section class="family">
		<div class="container-fluid">
			<h3 class="mb-3 mt-5 ">Family</h3>
			<div class="movies container-fluid m-0 mt-2">
				<?php
				foreach ($familyHome as $movie) :
				?>
					<div class="card bg-secondary p-1 mx-2 ">
						<div class="card-movie">
							<div class="poster">
								<?php if (substr($movie->poster, -4) == ".jpg" or substr($movie->poster, -4) == ".png" or substr($movie->poster, -5) == ".jpeg") : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= base_url() ?>uploads/<?= $movie->poster ?> " alt="">
								<?php else : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= $movie->poster ?> " alt="">
								<?php endif ?>
							</div>
							<div class="details">
								<h2><?= $movie->title ?>
									<br><span>Directed by <?= $movie->director ?></span>
								</h2>
								<div class="info">
									<p><?= $movie->description ?></p>
								</div>
								<div class="row justify-content-between info2">
									<?php if ($movie->rating > 8) : ?>
										<div class="col-4 card bg-success px-auto">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating >= 4 && $movie->rating <= 8) : ?>
										<div class="col-4 card bg-warning">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating < 4) : ?>
										<div class="col-4 card bg-danger">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php endif ?>
									<div class="col-6 card bg-light">
										<p class="text-center text-black m-auto fw-semibold h-auto" style="font-size: 13px;"><i class="bi bi-clock fw-semibold mr-3" style="font-size: 13px;"> </i><span><?= $movie->duration ?></span></p>
									</div>
								</div>
								<div class="mt-4 infoPlay">
									<a href="<?= site_url() ?>index.php/main/movie/<?= $movie->id_movie ?>"><button class="btn btn-default text-white fw-semibold ">
											Watch
										</button></a>

								</div>

							</div>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</section>

	<section class="drama">
		<div class="container-fluid">
			<h3 class="mb-3 mt-5 ">Drama</h3>
			<div class="movies container-fluid m-0 mt-2">
				<?php
				foreach ($dramaHome as $movie) :
				?>
					<div class="card bg-secondary p-1 mx-2 ">
						<div class="card-movie">
							<div class="poster">
								<?php if (substr($movie->poster, -4) == ".jpg" or substr($movie->poster, -4) == ".png" or substr($movie->poster, -5) == ".jpeg") : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= base_url() ?>uploads/<?= $movie->poster ?> " alt="">
								<?php else : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= $movie->poster ?> " alt="">
								<?php endif ?>
							</div>
							<div class="details">
								<h2><?= $movie->title ?>
									<br><span>Directed by <?= $movie->director ?></span>
								</h2>
								<div class="info">
									<p><?= $movie->description ?></p>
								</div>
								<div class="row justify-content-between info2">
									<?php if ($movie->rating > 8) : ?>
										<div class="col-4 card bg-success px-auto">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating >= 4 && $movie->rating <= 8) : ?>
										<div class="col-4 card bg-warning">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating < 4) : ?>
										<div class="col-4 card bg-danger">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php endif ?>
									<div class="col-6 card bg-light">
										<p class="text-center text-black m-auto fw-semibold h-auto" style="font-size: 13px;"><i class="bi bi-clock fw-semibold mr-3" style="font-size: 13px;"> </i><span><?= $movie->duration ?></span></p>
									</div>
								</div>
								<div class="mt-4 infoPlay">
									<a href="<?= site_url() ?>index.php/main/movie/<?= $movie->id_movie ?>"><button class="btn btn-default text-white fw-semibold ">
											Watch
										</button></a>

								</div>

							</div>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</section>

	<section class="horror">
		<div class="container-fluid">
			<h3 class="mb-3 mt-5 ">Horror</h3>
			<div class="movies container-fluid m-0 mt-2">
				<?php
				foreach ($horrorHome as $movie) :
				?>
					<div class="card bg-secondary p-1 mx-2 ">
						<div class="card-movie">
							<div class="poster">
								<?php if (substr($movie->poster, -4) == ".jpg" or substr($movie->poster, -4) == ".png" or substr($movie->poster, -5) == ".jpeg") : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= base_url() ?>uploads/<?= $movie->poster ?> " alt="">
								<?php else : ?>
									<img class="rounded mx-auto" width="200" height="300" src="<?= $movie->poster ?> " alt="">
								<?php endif ?>
							</div>
							<div class="details">
								<h2><?= $movie->title ?>
									<br><span>Directed by <?= $movie->director ?></span>
								</h2>
								<div class="info">
									<p><?= $movie->description ?></p>
								</div>
								<div class="row justify-content-between info2">
									<?php if ($movie->rating > 8) : ?>
										<div class="col-4 card bg-success px-auto">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating >= 4 && $movie->rating <= 8) : ?>
										<div class="col-4 card bg-warning">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php elseif ($movie->rating < 4) : ?>
										<div class="col-4 card bg-danger">
											<p class="text-center m-auto fw-semibold" style="font-size: 13px;">Rating <br><span><?= $movie->rating ?></span></p>
										</div>
									<?php endif ?>
									<div class="col-6 card bg-light">
										<p class="text-center text-black m-auto fw-semibold h-auto" style="font-size: 13px;"><i class="bi bi-clock fw-semibold mr-3" style="font-size: 13px;"> </i><span><?= $movie->duration ?></span></p>
									</div>
								</div>
								<div class="mt-4 infoPlay">
									<a href="<?= site_url() ?>index.php/main/movie/<?= $movie->id_movie ?>"><button class="btn btn-default text-white fw-semibold ">
											Watch
										</button></a>

								</div>

							</div>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</section>

	<section class="link">
		<div class="sub-links">
			<ul>
				<li><a href="#">Audio and Subtitles</a></li>
				<li><a href="#">Audio Description</a></li>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">Gift Cards</a></li>
				<li><a href="#">Media Center</a></li>
				<li><a href="#">Investor Relations</a></li>
				<li><a href="#">Jobs</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Legal Notices</a></li>
				<li><a href="#">Corporate Information</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</section>
	<!-- END OF LINKS -->

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
		$(document).ready(function() {
			$('.movies').slick({
				dots: false,
				infinite: false,
				slidesToShow: 8,
				slidesToScroll: 1,
				arrows: true,
				responsive: [{
						breakpoint: 1300,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 1,
							infinite: false,
						}
					},
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: false,
						}
					},
					{
						breakpoint: 700,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
			$(".prev-btn").click(function() {
				$(".slick-list").slick("slickPrev");
			});

			$(".next-btn").click(function() {
				$(".slick-list").slick("slickNext");
			});
		});

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
			$('.topTen .slider').toggleClass('light-mode-active');
		})

		$('.toggle-button').click(function() {
			$('h3').toggleClass('light-mode-active');
		})

		function logout() {
			$.ajax({
				url: 'auth/authLogout.php',
				type: 'post',
				data: $('form').serialize(),
				success: function(res) {
					window.location.href = 'index.php'
				},
				error: function(res) {
					alert(res);
				}
			})
		}

		$(document).ready(function() {
			$('.demo').slick({
				dots: false,
				slideToShow: 5,
				slideToScroll: 1,
				touchMove: false
			});
		});
	</script>
</body>

</html>
