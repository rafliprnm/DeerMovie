<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
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
									<?php echo form_open_multipart('index.php/site/registUser') ?>
									<h6 class="text-center text-black">Please register to create your account</h6>

									<div class="form-outline mb-4">
										<label class="form-label">Username</label>
										<div class="bg-danger text-center text-dark">
											<?php echo form_error('username'); ?>
										</div>
										<input type="text" name="usr" class="form-control" placeholder="Create Your Email or Username..." />
									</div>

									<div class="form-outline mb-4">
										<label class="form-label">Password</label>
										<div class="bg-danger text-center text-dark">
											<?php echo form_error('password'); ?>
										</div>
										<input type="password" name="pwd" class="form-control" placeholder="Create your Password..." />
									</div>

									<div class="form-outline mb-4">
										<label class="form-label">Full Name</label>
										<div class="bg-danger text-center text-dark">
											<?php echo form_error('fullname'); ?>
										</div>
										<input type="text" name="fullName" class="form-control" placeholder="Enter your Full Name..." />
									</div>
									<div class="form-outline mb-4">
										<label class="form-label">Age</label>
										<div class="bg-danger text-center text-dark">
											<?php echo form_error('age'); ?>
										</div>
										<input type="number" name="age" class="form-control" placeholder="Enter your Age..." />
									</div>
									<div class="mb-3">
										<label for="avatar" class="form-label">Upload Avatar</label>
										<input type="file" step="any" class="form-control" id="avatar" name="avatar">
									</div>

									<div class="form-outline mb-4 text-center">
										<input type="submit" class="btn btn-default w-50" value="Register" />
									</div>

									<?php echo form_close() ?>
									<div class="d-flex align-items-center justify-content-center pb-4">
										<p class="mb-0 me-2 text-black">Have an account?</p>
										<a href="<?= site_url(); ?>index.php/site">
											<button type="button" class="btn btn-outline-login">Login Now</button>
										</a>
									</div>

								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center" style="background-image:url('<?= base_url() ?>asset/img/icon/ads.jpg');background-repeat: no-repeat; background-size: 600px; border-radius: 12px;">
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
