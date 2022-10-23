<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/register.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | REGISTER</title>
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
					<form class="form-container" action="{{ route('storeregister') }}" method="POST">
						@csrf
						<div class="form-group mb-3">
							<div class="text-center">
								<img src="../img/BENGKENG PROJECT.png" style="width: 100px; height: 100px" alt="" />
							</div>
							<h2>REGISTER</h2>
							@if(session()->has('registerError'))
								<div class="alert alert-danger" role="alert">
							  		{{ session('registerError') }}
								</div>
							@endif
							<!-- <br /><br /> -->
							<label for="email" class="teks-kolom">Email :</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email Anda" required value="{{ old('email') }}" />
							@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="password" class="teks-kolom">Password :</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password Anda" required value="{{ old('password') }}" />
							@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="confirmpassword" class="teks-kolom">Konfirmasi Password :</label>
							<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Konfirmasi Password Anda" required value="{{ old('confirmpassword') }}" />
						</div>
						<br />
						<div class="  form-group mb-3">
							<label for="number" class="teks-kolom form-label">Nomor HP :</label>
							<div class="input-group">
								<span class="input-group-text">62</span>
								<input type="number" class="form-control" id="number" name="phone"  placeholder="Masukkan Nomor HP Anda" required value="{{ old('phone') }}" />
							</div>
							<br />
							<a href="{{ route('login') }}"><small class="text-cl-sm">Udah punya akun? Login Sekarang Yuk!</small></a>
						</div>
						<br />
						<div class="d-grid gap-2">
							<button type="submit" class="btn tombol" id="tombol" type="submit"
								>Daftar</button>
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
