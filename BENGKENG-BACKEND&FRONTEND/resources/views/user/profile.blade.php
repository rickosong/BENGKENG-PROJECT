<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BENGKENG | PROFILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
	<link rel="shortcut icon" href="../img/BENGKENG PROJECT.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/profile.css" />
  </head>
  <body>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="home.html"><img src="../img/Bengkeng proect navbar.png" alt="SMKN 2 Banjarmasin" title="SMKN 2 Banjarmasin"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item active">
							<a class="nav-link active" id="home" href="home.html">Home</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link active" href="bengkelterdekat.html">Bengkel Terdekat</a>
						</li>
						<form class="d-flex" role="search">
							<input class="form-control me-2" type="search" placeholder="Cari Bengkel atau Jasa" aria-label="Search">
							<button class="btn btn-outline-success" type="submit" id="btn-search">Cari</button>
						  </form>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="rounded-circle" src="../img/person-circle.svg" alt="user photo">
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="daftarbengkel.html"><span><i class="fa fa-user-circle" aria-hidden="true"></i>Buka Bengkel</span> </a></li>
								<li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="profile.html"><span><i class="fa fa-user-circle" aria-hidden="true"></i></span> Profil</a></li>
                                <li><a class="dropdown-item" href="landing.html"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span> Log Out</a></li>
							  </ul>
                        </li>
					</ul>
			</div>
			</div>
		</nav>
		<!-- navbar end -->

     <!--profil start-->
     <div class="container emp-profile">
			<form method="post">
				<div class="row">
					<div class="col-md-3">
						<div class="profile-img">
							<img class="logo" src="../img/person-circle.svg" alt="logo user" title="logo user"/>
							<br>
							<small>Mohon gunakan gambar yang ukurannya 1:1 agar menjadi lebih bagus</small>
							<br>
						</div>
					</div>
					<div class="col-md-6">
						<div class="profile-head">
                            <br><br>
							<h5>Nama Lengkap</h5>
							<hr color="black">
						</div>
					</div>
					<div class="col-md-3 text-end">
						<a class="btn btn-orange" id="btn-orange" href="editprofile.html">Edit Profile</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-8">
						<div class="tab-content profile-tab" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row user-data">
									<div class="col-md-6">
										<label>Nama</label>
									</div>
									<div class="col-md-6">
										<p>Nama Lengkap</p>
									</div>
                                    <br><br>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Tanggal Lahir</label>
									</div>
									<div class="col-md-6">
										<p>{{ auth()->user()->birth }}</p>
									</div>
                                    <br><br>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>No Telepon.</label>
									</div>
									<div class="col-md-6">
										<p>{{ auth()->user()->phonenumber }}</p>
									</div>
                                    <br><br>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Email</label>
									</div>
									<div class="col-md-6">
										<p>{{ auth()->user()->email }}</p>
									</div>
                                    <br><br><br><br><br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	<!-- profil end -->

    <!--javascript-->
    <script src="../js/jquery-3.6.0.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>