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

		@include('partials.navbar')

        <!-- post page start -->

        <div class="container-fluid">
            <div class="row">
                <div class="gambar text-center">
                    <img src="../img/gambar bengkel.jpg" class="col-lg-12" alt="">
                </div>
            </div>
            <br>

            <div class="col-lg-12">
                <div class="card harga">
                    <div class="row">
						<h1 class=" col-lg-6 col-md-7 col-5 offset-lg-1"><strong><b>Bengkel Udin</b></strong></h1>
						<span class="col-lg-2 col-5 col-md-3 offset-lg-1">
							<button type="button" data-bs-toggle="modal" data-bs-target="#modalReviewBagus" data-bs-whatever="Anda Menyukai Bengkel ini" class="btn btn-outline-success me-3"><i class=" fa fa-thumbs-up fa-lg me-3"></i><span class="">500</span></button>
							<button type="button" data-bs-toggle="modal" data-bs-target="#modalReviewJelek" class="btn btn-outline-danger"><i class=" fa fa-thumbs-down fa-lg me-3"></i><span class="">15</span></button>
						</span>
                    <img src="../img/WhatsApp.svg.webp" class=" col-lg-2 col-md-2 col-1" id="wa">
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
					<div class="modal-body">
						<p class="text-center"><i class="fa fa-thumbs-up text-success fa-4x"></i></p>
					<form action="">
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Berikan Komen (bisa dilewati)</label>
							<textarea class="form-control" id="message-text" placeholder="Jelaskan Kenapa Anda Menyukai Bengkel ini"></textarea>
						  </div>
					</form>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Keluar</button>
					<button type="button" class="btn btn-primary" id="tombolModal">Kirim</button>
					</div>
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
					<div class="modal-body">
					<form action="">
						<p class="text-center"><i class="fa fa-thumbs-down text-danger fa-4x"></i></p>
						<div class="mb-3">
							<label for="message-text" class="col-form-label">Berikan Komen (bisa dilewati)</label>
							<textarea class="form-control" id="message-text" placeholder="Jelaskan Kenapa Anda Tidak Menyukai Bengkel ini"></textarea>
						  </div>
					</form>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Keluar</button>
					<button type="button" class="btn btn-primary" id="tombolModal">Kirim</button>
					</div>
				</div>
				</div>
			</div>
			<!-- modal end -->

			<div class="row">
                <div class="card deskripsi col-lg-5 col-10 offset-1 mx-auto d-grid gap-2 mb-4">
                    <h1>DESKRIPSI</h1>
					<br>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, ut totam. Sunt ipsum, alias quia, aspernatur id placeat perferendis corrupti aperiam magni omnis hic veniam, quaerat ipsa. Culpa, eaque pariatur!
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, ut totam. Sunt ipsum, alias quia, aspernatur id placeat perferendis corrupti aperiam magni omnis hic veniam, quaerat ipsa. Culpa, eaque pariatur!
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, ut totam. Sunt ipsum, alias quia, aspernatur id placeat perferendis corrupti aperiam magni omnis hic veniam, quaerat ipsa. Culpa, eaque pariatur!
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, ut totam. Sunt ipsum, alias quia, aspernatur id placeat perferendis corrupti aperiam magni omnis hic veniam, quaerat ipsa. Culpa, eaque pariatur!
                </div>
    
                <div class="justify-content-start col-lg-3 mx-auto">
                    <div class="row d-grid gap-2">
						<div class="col-10 offset-1 card jenis mb-4">
							<h1 class="text-center">JENIS BENGKEL</h1>
							<br>
							<p>Bengkel Motor</p>
						</div>
						<div class="col-10 offset-1 card jenis mb-4">
							<h1 class="text-center">LAYANAN JASA</h1>
							<br>
							<p>Bengkel Motor</p>
						</div>
					</div>
                </div>
				

				<div class="col-10 offset-1 col-lg-3 card deskripsi d-grid gap-3 mx-auto mb-4">
					<h1 class="text-center">LOKASI</h1>
							<p>Jalan Antah Berantah Komplek tanpa Nama Kelurahan Suka Korupsi Kota Hantu</p>
				</div>
				<div class="col-10 offset-1 col-lg-10 offset-lg-1 card deskripsi d-grid gap-3 mx-auto">
					<h1 class="text-center">REVIEW</h1>
					<div class="card p-2" style="background-color: whitesmoke;">
						<h5 class="p-2"><span><img src="../img/person-circle.svg" alt="" class="img-circle me-2" style="width: 45px; height: 45px;"></span> Nama<span class="btn btn-success me-3 ms-3"><i class="fa fa-thumbs-up fa-lg me-3"></i></span></h5>
						
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quibusdam recusandae tempore commodi rem doloribus quidem odio quo eos autem nostrum architecto laudantium, aperiam ea ab dolor iure tenetur velit.</p>
					</div>
					<div class="card p-2" style="background-color: whitesmoke;">
						<h5 class="p-2"><span><img src="../img/person-circle.svg" alt="" class="img-circle me-2" style="width: 45px; height: 45px;"></span> Nama<span class="btn btn-danger me-3 ms-3"><i class="fa fa-thumbs-down fa-lg me-3"></i></span></h5>
						
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quibusdam recusandae tempore commodi rem doloribus quidem odio quo eos autem nostrum architecto laudantium, aperiam ea ab dolor iure tenetur velit.</p>
					</div>
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