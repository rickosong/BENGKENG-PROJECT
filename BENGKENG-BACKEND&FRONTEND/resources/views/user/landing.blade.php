<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="{{ asset('css/landing.css') }} " />
		<link rel="shortcut icon" href="{{ asset('img/BENGKENG PROJECT.png') }}" type="image/x-icon" />
		<title>BENGKENG | LANDING</title>
	</head>
	<body>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand row justify-content-center" href="{{ route('landing') }}"><img src="../img/Bengkeng proect navbar.png" alt="BENGKENG logo" title="BENGKENG"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item active">
							<a class=" btn nav-link" id="tombolkuning" href="{{ route('login') }}">Login</span></a>
						</li>
						<li class="nav-item active">
							<a class="btn btn-outline-dark nav-link active" id="tombolputih" href="{{ route('register') }}">register</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navbar end -->

		<!-- carousel -->
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="../img/BENGKENG CAROUSEL 1.jpg" class="d-block w-100" alt="...">
			  </div>
			  <div class="carousel-item">
				<img src="../img/BENGKENG CAROUSEL 2.jpg" class="d-block w-100" alt="...">
			  </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		</div>
		<!-- carousel end -->

		<!-- card and content -->
		<div class="container">
			<br><br>
			<h1 class="text-lg-center text-md-center text-sm-center">Bengkel Terbaik</h1>
			<br><br>
			<div class="row">
				@forelse ($Bengkels as $bengkel)
				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="{{ 'img' }}/{{ $bengkel->image }}" class="card-img-top img-thumbnail" alt="..." laoding="lazy" />
						<div class="card-body">
							<h5 class="card-title m-1">{{ $bengkel->namabengkel }}</h5>
							<br>
							{{-- <h6 class="distance">500 meter dari jarak anda</h4> --}}
							<a href="{{ route('post', $bengkel->id) }}" class="btn btn-card-info col-12"><i class="fa fa-commenting-o" aria-hidden="true"></i>Selengkapnya</a>
						</div>
					</div>
				</div>
				@empty
					<h5 class="text-center text-secondary">tidak ada bengkel yang ada di section ini</h5>
				@endforelse ($collection as $item)
			</div>		
		</div>
		<!-- card and content -->
		<br><br><br><br><br><br><br><br>

		<!-- Footer -->
		<div class="card-footer">
			<div class="container">
				<div class="row">
					<div class="col justify-content-start">
						<h3 class=""><img src="../img/BENGKENG PROJECT.png" alt="" srcset="SMKN 2 Banjarmasin"><span class="space"></span></h3>
					</div>
					<div class="col justify-content-center text-center">
						<a href=""><i class="fa fa-instagram link-light icon" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-youtube-play link-light icon" aria-hidden="true"></i></a>
						<a href=""><i class="fa fa-facebook-official link-light" aria-hidden="true"></i></a>
						<div class="text-center">
							<p>BENGKENG &copy; 2022 --All Rights Reserved</p>
						</div>
					</div>
					<div class="col justify-content-end">
						<h6 class="footer-t text-end">Selamat Datang</h6>
						<h6 class="text-end">User</h5>
					</div>

				</div>
			</div>
		</div>
	<!-- Footer End -->

		<!-- jQuery -->
		<script src="{{ asset('../js/jquery-3.6.0.min.js') }}"></script>
		<!-- <script src="../js/popper.min.js"></script> -->
		<script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>

		<!-- jQuery end -->
	</body>
</html>