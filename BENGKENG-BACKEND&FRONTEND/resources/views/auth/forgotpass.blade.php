<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/searchemail.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | CHECK PASSWORD</title>
	</head>
	<body>
		<!-- form login -->
		<section class="container">
			<!-- <section class="row justify-content-start">
				<section class="col-lg-5 col-md-4">
					<div class="kanan">
						<img src="../img/smkn2.png" alt="" />
						<br /><br />
						<img src="../img/BENGKENG PROJECT.png" alt="" />
						<h3>BENGKENG</h3>
						<p>BENGKEL KELILING</p>
					</div>
				</section>
			</section> -->

			<section class="row justify-content-center">
				<section class="col-sm-12 col-lg-5 col-md-12">
					<form class="form-container" action="{{ route('changepassword', $user->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group mb-3">
							<div class="text-center">
								<img src="../img/BENGKENG PROJECT.png" alt="" style="width: 100px; height: 100px" />
							</div>
							<h2>FORGOT PASSWORD</h2>
							<!-- <br /><br /> -->
							<p class="text-center text-light">Halo {{ $user->name }}, silahkan ubah password anda</p>
							<label for="password" class="teks-kolom">Password :</label>
							<input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" />
							<br />
						</div>
						<div class="form-group mb-3">
							<label for="confirmpassword" class="teks-kolom">Konfirmasi Password :</label>
							<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Konfirmasi Password Anda" />
							<br />
							<a href="{{ route('login') }}"><small class="text-cl-sm">Kembali</small></a>
						</div>
						<br />
						<div class="d-grid gap-2">
							<button class="btn tombol" id="tombol" type="submit"><span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Ubah</button>
						</div>
					</form>
					<br /><br /><br />
				</section>
			</section>
		</section>
		<!-- form login end -->
	</body>

	<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<!-- jQuery end -->
</html>
