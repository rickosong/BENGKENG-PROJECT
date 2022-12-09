<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../css/post.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon">
		<title>BENGKENG | HALAMAN BENGKEL</title>
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand row justify-content-center" href="{{ route('home') }}"><img src="../img/Bengkeng proect navbar.png" alt="BENGKENG logo" title="BENGKENG"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item active">
							<a class="nav-link active" id="home" href="{{ route('home') }}">Home</span></a>
						</li>
						<li class="nav-item active">
							{{-- <a class="nav-link active" href="{{ route('bengkelterdekat') }}">Bengkel Terdekat</a> --}}
						</li>
						<form class="d-flex" role="search">
							<input class="form-control me-2" type="search" placeholder="Cari Bengkel atau Jasa" aria-label="Search">
							<a class="btn btn-outline-success" type="submit" id="btn-search" href="{{ route('caribengkel') }}">Cari</a>
						  </form>
						<li class="nav-item dropdown active" style="">
							<a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="rounded-circle" src="{{ '../img/' }}/{{ auth()->user()->image }}" alt="user photo">
							  </a>
							  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								@if (auth()->user()->havebengkel == 1)
								<li><a class="dropdown-item" href="{{ route('dashboard') }}"><span>Bengkel Anda<i class="fa fa-user-circle" aria-hidden="true"></i></span> </a></li>
								@else
								<li><a class="dropdown-item" href="{{ route('daftarbengkel') }}"><span>Buka Bengkel<i class="fa fa-user-circle" aria-hidden="true"></i></span> </a></li>
								@endif
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="{{ route('profile') }}"><span><i class="fa fa-user-circle" aria-hidden="true"></i></span> Profil</a></li>
								<li>
									<form action="{{ route('logout') }}" method="post">
										@csrf
										<button class="dropdown-item" type="submit">Log Out</button>
									</form>
								</li>
							  </ul>
						</li>
					</ul>
			</div>
		</nav>
		<!-- navbar end -->

        <!-- post page start -->
        <div class="container-fluid">
			@if (session()->has('successReview'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('successReview') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
            <div class="row">
                <div class="gambar text-center">
                    <img src="{{ '../img' }}/{{ $bengkel->image }}" class="col-lg-12" alt="">
                </div>
            </div>
            <br>

            <div class="col-lg-12">
                <div class="card harga">
                    <div class="row">
						<h1 class=" col-lg-7 col-md-6 col-5"><strong><b>{{ $bengkel->namabengkel }}</b></strong></h1>
						<span class="col-lg-4 col-5 col-md-4">
							@if ($checkReview == 0)
								<button type="button" data-bs-toggle="modal" data-bs-target="#modalReviewBagus" data-bs-whatever="Anda Menyukai Bengkel ini" class="btn btn-outline-success me-3"><i class=" fa fa-thumbs-up fa-lg me-3"></i><span class="">{{ $likes }}</span></button>
								<button type="button" data-bs-toggle="modal" data-bs-target="#modalReviewJelek" class="btn btn-outline-danger"><i class=" fa fa-thumbs-down fa-lg me-3"></i><span class="">{{ $dislikes }}</span></button>
							@else
							<button type="button" data-bs-toggle="modal" data-bs-target="#modalTidakBisaReview" data-bs-whatever="Anda Menyukai Bengkel ini" class="btn btn-outline-success me-3"><i class=" fa fa-thumbs-up fa-lg me-3"></i><span class="">{{ $likes }}</span></button>
							<button type="button" data-bs-toggle="modal" data-bs-target="#modalTidakBisaReview" class="btn btn-outline-danger"><i class=" fa fa-thumbs-down fa-lg me-3"></i><span class="">{{ $dislikes }}</span></button>
							@endif
						</span>
                    	<a href="https://wa.me/{{ $bengkel->phonenumber }}"  class=" col-lg-1 col-md-2 col-1"><img src="../img/WhatsApp.svg.webp" id="wa"></a>
					</div>
                </div>
            </div>
			<br>

			<!-- modal -->
			<!-- Modal -->
			<div class="modal fade" id="modalReviewBagus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Anda Menyukai Bengkel Ini</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="{{ route('uploadreview', $bengkel->id) }}" method="POST">
						@csrf
						<div class="modal-body">
							<p class="text-center"><i class="fa fa-thumbs-up text-success fa-4x"></i></p>
							<div class="mb-3">
								<input type="hidden" name="idrating" value="1">
								<label for="message-text" class="col-form-label">Berikan Komen (Opsional)</label>
								<textarea class="form-control" name="reviewtext" id="message-text" placeholder="Jelaskan Kenapa Anda Menyukai Bengkel ini"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Keluar</button>
							<button type="submit" class="btn btn-primary" id="tombolModal">Kirim</button>
						</div>	
					</form>
					
					
				</div>
				</div>
			</div>

			<div class="modal fade" id="modalReviewJelek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Anda TIdak Menyukai Bengkel Ini</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="{{ route('uploadreview', $bengkel->id) }}" method="POST">
						@csrf
						<div class="modal-body">
							<p class="text-center"><i class="fa fa-thumbs-down text-danger fa-4x"></i></p>
							<div class="mb-3">
								<input type="hidden" name="idrating" value="2">
								<label for="message-text" class="col-form-label">Berikan Komen (Opsional)</label>
								<textarea class="form-control" name="reviewtext" id="message-text" placeholder="Jelaskan Kenapa Anda Tidak Menyukai Bengkel ini"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Keluar</button>
							<button type="submit" class="btn btn-primary" id="tombolModal">Kirim</button>
						</div>
					</form>
				</div>
				</div>
			</div>


			<div class="modal fade" id="modalTidakBisaReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Anda Sudah Memberikan Review</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
						<div class="modal-body">
							{{-- <p class="text-center"><i class="fa fa-thumbs-down text-danger fa-4x"></i></p> --}}
							<div class="mb-3">
								<h6>Anda sudah pernah memberi Review Pada Bengkel ini, Review Hanya Bisa dilakukan Sekali saja pada satu Bengkel</h6>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Keluar</button>
						</div>
				</div>
				</div>
			</div>
			<!-- modal end -->

			<div class="row">
                <div class="card deskripsi col-lg-5 col-10 offset-1 mx-auto d-grid gap-2 mb-4 d-flex align-items-stretch">
                    <h1 class="text-center">DESKRIPSI</h1>
					<p>{{ $bengkel->deskripsi }}</p>
                </div>
    
                <div class=" col-lg-3 mx-auto ">
                    <div class="row d-grid gap-2">
						<div class="col-10 offset-1 card jenis mb-4">
							<h1 class="text-center">JENIS BENGKEL</h1>
							<br>
							@if ($bengkel->jenisbengkel_id == 1)
								<p>Bengkel Motor</p>
							@else
								<p>Bengkel Mobil</p>
							@endif
						</div>
						<div class="col-10 offset-1 card jenis mb-4 d-flex align-items-stretch">
							<h1 class="text-center">LAYANAN JASA</h1>
							<br>
							<p>{{ $bengkel->layananjasa }}</p>
						</div>
					</div>
                </div>
				

				<div class="col-10 offset-1 col-lg-3 card deskripsi d-grid gap-3 mx-auto mb-4 d-flex align-items-stretch">
					<h1 class="text-center">ALAMAT</h1>
							<p>{{ $bengkel->alamat }}</p>
				</div>
				<div class="col-10 offset-1 col-lg-10 offset-lg-1 card review d-grid gap-3 mx-auto">
					<h1 class="text-center">REVIEW</h1>
					@forelse ($allReview as $review)
					<div class="card p-2" style="background-color: whitesmoke;">
						<h5 class="p-2"><span><img src="{{ '../img' }}/{{ $review->User->image }}" alt="" class="img-circle me-2" style="width: 45px; height: 45px;"></span> {{ $review->User->name }}
							@if ($review->rating_id == 1)
								<span class="btn btn-success me-3 ms-3"><i class="fa fa-thumbs-up fa-lg me-3"></i></span>
							@else
							<span class="btn btn-danger me-3 ms-3"><i class="fa fa-thumbs-down fa-lg me-3"></i></span>
							@endif
						</h5>
						
						<p>{{ $review->komentar }}</p>
					</div>
					@empty
						<p class="text-center text-secondary">Bengkel ini masih belum mempunyai Review.</p>
					@endforelse
				</div>
            </div>
        </div>
		<br><br><br><br>
    

        <!-- post page end -->

	<!-- jQuery -->
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/modal.js"></script>
	<!-- jQuery end -->
    
    </body>
</html>