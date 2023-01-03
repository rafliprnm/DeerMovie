<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
	<section class="h-100 gradient-form">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-xl-10">
					<div class="card rounded-3 text-black">
						<div class="row g-0">
							<div class="col-lg-6">
								<div class="card-body p-md-5 mx-md-4">

									<div class="text-center">
										<img src="<?= base_url() ?>asset/img/icon/logo.png" style="width: 150px;" alt="logo">
									</div>

									<form class="my-3" method="post" action="<?= site_url() . 'index.php/site/login' ?>">
										<h6 class="text-center text-dark">Please login to your account</h6>

										<div class="form-outline mb-4">
											<label class="form-label" for="form2Example11">Username</label>
											<input type="text" name="usr" class="form-control" placeholder="Enter Your Email or Username..." />
										</div>

										<div class="form-outline mb-4">
											<label class="form-label" for="form2Example22">Password</label>
											<input type="password" name="pwd" class="form-control" placeholder="Enter your Password..." />
										</div>

										<div class="form-outline mb-4 text-center">
											<input type="submit" class="btn btn-default w-50" value="Login" />
										</div>

										<div class="form-outline mb-4">
											<div class="text-center text-danger">
												<?= $this->session->flashdata('info'); ?>
											</div>
										</div>
									</form>
									<div class="d-flex align-items-center justify-content-center pb-4">
										<p class="mb-0 me-2 text-dark">Don't have an account?</p>
										<a href="<?= site_url(); ?>index.php/site/register">
											<button type="button" class="btn btn-outline-login">Register Now</button>
										</a>
									</div>

								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center" style="background-image:url('<?= base_url() ?>asset/img/icon/ads.jpg');background-repeat: no-repeat; background-size: 460px; border-radius: 10px;">
								<div class="text-white px-3 py-3 mx-5 " style="background-color: rgba(0, 0, 0, 0.4); border-radius: 10px;">
									<h4 class="mb-4 text-center">DEER MOVIE</h4>
									<p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
										exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
