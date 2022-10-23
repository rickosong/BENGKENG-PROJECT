<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="../css/home.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | HOMEPAGE</title>
	</head>
	<body>
		<!-- alert bergabung -->
		<div class="alert alert-success text-center text-success" role="alert">
			Anda Punya Bengkel? <strong><a href="" class="text-success">Yuk Bergabung Bersama Kami Sekarang!</a></strong>
		  </div>
		<!-- alert bergabung end -->

		@include('partials.navbar')

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
			<h1 class="text-lg-center text-md-center text-sm-center">Bengkel Terdekat</h1>
			<br><br>
			<h5 class="text-lg-end text-md-end text-sm-end click-postingan"><a href="Bengkelan.html">Semua</a></h5>
			<div class="row">
				@forelse ($Bengkels as $bengkel)
				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="{{ 'img' }}/{{ $bengkel->image }}" class="card-img-top img-thumbnail" alt="..." loaded="lazy" />
						<div class="card-body">
							<h5 class="card-title m-1">{{ $bengkel->namabengkel }}</h5>
							<h6 class="distance">500 meter dari jarak anda</h4>
							<a href="{{ route('post', $bengkel->id) }}" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>
				@empty
					<h5 class="text-center text-secondary">tidak ada bengkel yang ada di section ini</h5>
				@endforelse ($collection as $item)

			<br><br>
			<h1 class="text-lg-center text-md-center text-sm-center">Bengkel Terbaik</h1>
			<br><br>
			<h5 class="text-lg-end text-md-end text-sm-end click-postingan"><a href="Bengkelan.html">Semua</a></h5>
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Bengkel 1</h5>
							<h6 class="distance">500 meter dari jarak anda</h4>
							<a href="post.html" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Bengkel 2</h5>
							<h6 class="distance">500 meter dari jarak anda</h4>
							<a href="post.html" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Bengkel 3</h5>
							<h6 class="distance">500 meter dari jarak anda</h4>
							<a href="post.html" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card">
						<img src="../img/img2.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title m-1">Bengkel 4</h5>
							<h6 class="distance">500 meter dari jarak anda</h4>
							<a href="post.html" class="btn btn-card-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Info Selengkapnya</a>
						</div>
					</div>
				</div>
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
		<script src="../js/jquery-3.6.0.min.js"></script>
		<!-- <script src="../js/popper.min.js"></script> -->
		<script src="../js/bootstrap.bundle.min.js"></script>

		<!-- jQuery end -->
	</body>
</html>