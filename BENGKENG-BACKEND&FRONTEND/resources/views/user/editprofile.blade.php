<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>BENGKENG | EDIT PROFILE</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
		{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}
		<link rel="stylesheet" href="../css/editprofile.css" />
	</head>
	<body>
		<!--profil start-->
		<div class="container emp-profile">
			<form action="{{ route('updateprofile') }}" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="row">
					<div class="col-md-3">
						<div class="profile-img">
							<img class="logo" src="{{ '../img/' }}/{{ auth()->user()->image }}" alt="logo user" title="logo user" />
							<br />
							<br />
							<label class="custom-file-upload">
								<div class="mb-3">
									<label for="formFileSm" class="form-label">Klik untuk Masukkan gambar</label>
									<input class="form-control form-control-sm" name="image" id="formFileSm" type="file" accept="image/png, image/jpeg" />
								</div>
							</label>
							<br />
							<small>Mohon gunakan gambar yang ukurannya 1:1 agar menjadi lebih bagus</small>
							<br />
						</div>
					</div>
					<div class="col-md-6">
						<div class="profile-head">
							<div class="form-group mb-3">
								<label for="username" class="teks-kolom">Nama Lengkap:</label>
								<input type="text" class="form-control" id="username" name="name" aria-describedby="emailHelp" placeholder="Masukkan Nama Anda" value="{{ $datauser->name }}" required />
							</div>
							<br />
							<div class="form-group mb-3">
								<label for="tanggal" class="teks-kolom">Tanggal Lahir:</label>
								<input type="date" class="form-control" id="tanggal" name="birth" placeholder="Masukkan tanggal" value="{{ $datauser->birth }}" required />
							</div>
							<br />
							<div class="form-group mb-3">
								<label for="telepon" class="teks-kolom">No. Telepon:</label>
								<input type="number" class="form-control" id="telepon" name="phone" placeholder="Masukkan Nomor HP" value="{{ $datauser->phonenumber }}" required />
							</div>
							<br />
							<div class="form-group mb-3">
								<label for="email" class="teks-kolom">Email:</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{ $datauser->email }}" required />
								<br /><br />
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="tab-content profile-tab" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
									<div class="col-md-12 text-end">
										<a href="{{ route('profile') }}" class="btn btn-grey" id="btn-grey"
											><span><i class="fa fa-reply" aria-hidden="true"></i></span> Kembali</a
										>
										<button class="btn btn-orange" id="btn-orange" type="submit">
											<span><i class="fa fa-sign-in" aria-hidden="true"></i></span>Simpan
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- profil end -->
	</body>
</html>
