<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="../css/bengkelterdekat.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | BENGKEL TERDEKAT</title>
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

		<!-- card and content -->
		<div class="container">
			<br><br>
			<h1 class="text-lg-center text-md-center text-sm-center">Semua Bengkel</h1>
			<br><br>
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

							{{-- <h6 class="distance">500 meter dari jarak anda</h4> --}}
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
            {{ $Bengkels->links() }}		
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