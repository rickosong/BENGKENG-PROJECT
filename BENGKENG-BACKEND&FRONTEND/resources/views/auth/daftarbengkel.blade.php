<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/daftarbengkel.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		<title>BENGKENG | DAFTAR BENGKEL</title>
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
					<form class="form-container" action="{{ route('buatbengkel') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group mb-3">
							<div class="text-center">
								<img src="../img/BENGKENG PROJECT.png" style="width: 100px; height: 100px" alt="" />
							</div>
							<h2>DAFTAR BENGKEL</h2>
							<!-- <br /><br /> -->
							@if(session()->has('daftarError'))
								<div class="alert alert-danger" role="alert">
							  		{{ session('daftarError') }}
								</div>
							@endif
							<label for="text" class="teks-kolom">Nama Bengkel :</label>
							<input type="text" class="form-control" id="text" name="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Bengkel" value="{{ old('name') }}" required />
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="deskripsi" class="teks-kolom">Deskripsi Bengkel :</label>
							<br />
							<textarea class="col-12" name="deskripsi" id="deskripsi" cols="46" rows="3" style="border-radius: 10px" placeholder="Masukkan Deskripsi Bengkel" value="{{ old('deskripsi') }}" required></textarea>
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="alamat" class="teks-kolom">Alamat Bengkel :</label>
							<textarea class="col-12" name="alamat" id="alamat" cols="46" rows="3" style="border-radius: 10px" placeholder="Masukkan Alamat Bengkel" value="{{ old('alamat') }}" required></textarea>
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="layanan" class="teks-kolom">layanan Jasa :</label>
							<textarea class="col-12" name="layanan" id="layanan" cols="46" rows="3" style="border-radius: 10px"  placeholder="Layanan Jasa yang disediakan" value="{{ old('layanan') }}" required></textarea>
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="jenis" class="teks-kolom">jenis Bengkel :</label>
							<select name="jenis" id="jenis" class="form-control">
								<option selected="true" disabled="disabled" value="">---</option>
								@foreach ($allJenisBengkel as $jenisbengkel)
								<option value="{{ $jenisbengkel->id }}">{{ $jenisbengkel->jenis_bengkel }}</option>
								@endforeach
							</select>
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="number" class="teks-kolom">Nomor HP :</label>
							<div class="input-group">
								<span class="input-group-text">62</span>
								<input type="number" class="form-control" id="number" name="phone"  placeholder="Masukkan Nomor HP Anda" required value="{{ old('phone') }}" />
							</div>
						</div>
						<br />
						<div class="form-group mb-3">
							<label for="formFileSm" class="form-label teks-kolom">Gambar Bengkel</label>
								<input class="form-control form-control-sm" name="image" id="formFileSm" type="file" placeholder="Klik untuk masukkan gambar" accept="image/png, image/jpeg" />
						</div>
						<br />
						<div class="form-group mb-3">
							<!-- <label for="alamat" class="teks-kolom"></label> -->
							<div class="container maps">
								<div class="ratio ratio-16x9 col-12">
									<iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.219741083949!2d114.5797416143369!3d-3.2956885420470527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a80d47ba6b%3A0x8f5abfaddfe5a2d7!2sPoliteknik%20Negeri%20Banjarmasin!5e0!3m2!1sid!2sid!4v1664202111369!5m2!1sid!2sid"
										width="600"
										height="450"
										style="border: 0"
										allowfullscreen=""
										loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"
									></iframe>
								</div>
							</div>
							<br />
							<input type="text" class="form-control" id="email" name="maps" aria-describedby="emailHelp" placeholder="Maps (Logitude dan latitude)" value="{{ old('maps') }}" />
						</div>
						<br />
						<div class="d-grid gap-2">
							<button class="btn tombol" id="tombol" type="submit">Daftar</button>
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
