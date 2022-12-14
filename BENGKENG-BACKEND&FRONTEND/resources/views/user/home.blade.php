<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="../css/home.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
		integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
		crossorigin=""/>
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | HOMEPAGE</title>
	</head>
	<body>
		<!-- alert bergabung -->
		@if (auth()->user()->havebengkel == 0)
			<div class="alert alert-success text-center text-success" role="alert">
				Anda Punya Bengkel? <strong><a href="{{ route('daftarbengkel') }}" class="text-success">Yuk Bergabung Bersama Kami Sekarang!</a></strong>
		  </div>
		@endif
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
			{{-- <h5 class="text-lg-end text-md-end text-sm-end click-postingan"><a href="Bengkelan.html">Semua</a></h5> --}}
			<div class="row">
				@forelse ($Bengkels as $bengkel)
				<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
					<div class="card h-auto">
						<img src="{{ 'img' }}/{{ $bengkel->image }}" class="card-img-top img-thumbnail" alt="..." laoding="lazy" />
						<div class="card-body">
							<h5 class="card-title m-1">{{ $bengkel->namabengkel }}</h5>
							@if ($bengkel->jenisbengkel_id == 1)
							<small>Bengkel Motor</small>
							@else
							<small>Bengkel Mobil</small>
							@endif
							{{-- <h6 class="distance" id="distance"></h4> --}}
								<br>
							@if ($bengkel->status_id != 1)
								<button class=" btn btn-danger col-12">Bengkel Tutup</button>
							@else
							<a href="{{ route('post', $bengkel->id) }}" class="btn btn-card-info col-12"><i class="fa fa-commenting-o" aria-hidden="true"></i>Selengkapnya</a>
							@endif
						</div>
					</div>
				</div>
				@empty
					<h5 class="text-center text-secondary">tidak ada bengkel yang ada di section ini</h5>
				@endforelse ($collection as $item)
			</div>
				<br><br>
				<h1 class="text-lg-center text-md-center text-sm-center">Bengkel Terbaik</h1>
				<br><br>
				<h5 class="text-lg-end text-md-end text-sm-end click-postingan"><a href="{{ route('bengkelterdekat') }}">Semua</a></h5>
				<div class="row">
					@forelse ($bestBengkel as $bengkel)
					<div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
						<div class="card h-auto">
							<img src="{{ 'img' }}/{{ $bengkel->image }}" class="card-img-top img-thumbnail" alt="..." loading="lazy" />
							<div class="card-body">
								<h5 class="card-title m-1">{{ $bengkel->namabengkel }}</h5>
								@if ($bengkel->jenisbengkel_id == 1)
								<small>Bengkel Motor</small>
								@else
								<small>Bengkel Mobil</small>
								@endif
								{{-- <h6 class="distance" id="distance"> Rating Bengkel {{ $bengkel->total_rating }}</h4> --}}
								<br>
							@if ($bengkel->status_id != 1)
								<button class=" btn btn-danger col-12">Bengkel Tutup</button>
							@else
							<a href="{{ route('post', $bengkel->id) }}" class="btn btn-card-info col-12"><i class="fa fa-commenting-o" aria-hidden="true"></i>Selengkapnya</a>
							@endif
							</div>
						</div>
					</div>
					@empty
						<h5 class="text-center text-secondary">tidak ada bengkel yang ada di section ini</h5>
					@endforelse ($collection as $item)
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
		<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
		integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
		crossorigin=""></script>
		<script>
			// ambil lokasi terkini
			getlocation();
			setInterval(() => {
				getlocation();
			}, 5000);
			
			function getlocation() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(showPosition);
				} else {
					x.innerHtml = "browser not supported"
				}
			}

			function showPosition(position) {
				console.log('Koordinatnya adalah', position.coords.latitude + "," +position.coords.longitude);
			}

			// function positionNow(position) {
			// 	var coordinat = position.coords.latitude + "," + position.coords.logitude;

			// 	return coordinat;
			// }

			// revisi
			// rombak database lagi, buat di table user tuh field "lokasi" inya saat ini dengan nullable, nanti waktu login isi datanya, trus kalo inya logout dihapus datanya, nanti data inya tuh di bandingkan lwn data lokasi bengkel disini, setelah itu nanti dapat hasilnya baru ditampilkan

			// createDistance();

			// function createDistance() {
			// 	var locationFrom = [navigator.geolocation.getCurrentPosition()];
			// 	console.log(locatonFrom);
				// @foreach($Bengkels as $bengkel)
				// var locationTo = [{{ $bengkel->maps }}];
				// @endforeach
				// var from = locationFrom.getLatLng();
				// var to = locationTo.getLatLng();
				// locationFrom.bindPopup((from).toString());
				// locationTo.bindPopup((to).toString());
				// getDistance(from, to);
			}

			// function getDistance(from, to) {
			// 	var container = document.getElementById('distance');
			// 	console.log('jarak' + ((from.distanceTo(to)) + ' meter dari jarak anda');
				// container.innerHTML = ((from.distanceTo(to)).toFixed(0)/1000) + ' meter dari jarak anda';
			}
		</script>

		<!-- jQuery end -->
	</body>
</html>