<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/login.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | LOGIN</title>
	</head>
	<body>
		<!-- form login -->
		<section class="container">
			<!-- <section class="row justify-content-start">
				<section class="col-lg-5 col-md-4">
					<div class="kanan">
						<img src="../img/smkn2.png" alt="" />
						<br /><br />
						<h3>BENGKENG</h3>
						<img src="../img/BENGKENG PROJECT.png" alt="" />
						<p>BENGKEL KELILING</p>
					</div>
				</section>
			</section> -->

			<section class="row justify-content-center">
				<section class="col-sm-12 col-lg-5 col-md-12">
					<form class="form-container" action="{{ route('authlogin') }}" method="POST"> 
						<div class="form-group mb-3">
							<div class="text-center">
								<img src="../img/BENGKENG PROJECT.png" style="width: 100px; height: 100px" alt="" />
							</div>
							@csrf
							<h2>LOGIN</h2>
							@if(session()->has('loginError'))
								<div class="alert alert-danger" role="alert">
							  		{{ session('loginError') }}
								</div>
							@endif
							<!-- <br /><br /> -->
							<label for="email" class="teks-kolom">Email :</label>
							<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda" required />
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="password" class="teks-kolom">Password :</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required />
							<br />
							<a href="{{ route('register') }}"><small class="text-cl-sm">Gak punya akun? Daftar Sekarang!</small></a
							><br />
							<a href="searchemail.html"><small class="text-cl-sm">Forgot Password?</small></a>
						</div>
						<br />
						<div class="d-grid gap-2">
							<button class="btn tombol" id="tombol" type="submit"> Masuk</button>
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
