<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('img/BENGKENG PROJECT.png') }}" type="image/x-icon">
		<title>BENGKENG | PENGATURAN</title>

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} " />
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
		<!-- iCheck -->
		<link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
		<!-- JQVMap -->
		<link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}" />
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}" />
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
		<!-- Daterange picker -->
		<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}" />
		<!-- summernote -->
		<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" />
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Preloader -->
			{{-- <div class="preloader flex-column justify-content-center align-items-center">
				<img class="animation__shake" src="{{ asset('img/BENGKENG PROJECT BLACK.png') }}" alt="AdminLTELogo" height="60" width="60" />
			</div> --}}

			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #263571;">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
					</li>
					<!-- <li class="nav-item d-none d-sm-inline-block">
						<a href="index3.html" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Contact</a>
					</li> -->
				</ul>

				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Navbar Search -->
					<!-- <li class="nav-item">
						<a class="nav-link" data-widget="navbar-search" href="#" role="button">
							<i class="fas fa-search" style="color: white;"></i>
						</a>
						<div class="navbar-search-block">
							<form class="form-inline">
								<div class="input-group input-group-sm">
									<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
									<div class="input-group-append">
										<button class="btn btn-navbar" type="submit">
											<i class="fas fa-search"></i>
										</button>
										<button class="btn btn-navbar" type="button" data-widget="navbar-search">
											<i class="fas fa-times"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li> -->

					<!-- Notifications Dropdown Menu -->
					<!-- <li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">
							<i class="far fa-bell" style="color: white;"></i>
							<span class="badge badge-warning navbar-badge">15</span>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<span class="dropdown-item dropdown-header">15 Notifications</span>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-envelope mr-2"></i> 4 new messages
								<span class="float-right text-muted text-sm">3 mins</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-users mr-2"></i> 8 friend requests
								<span class="float-right text-muted text-sm">12 hours</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-file mr-2"></i> 3 new reports
								<span class="float-right text-muted text-sm">2 days</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
						</div>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt" style="color: white;"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
							<i class="fas fa-th-large" style="color: white;"></i>
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			@include('partials.sidebar')

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0">Pengaturan Bengkel</h1>
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Pengaturan Bengkel</li>
								</ol>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /.content-header -->

				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<!-- Small boxes (Stat box) -->
						<!-- /.row -->
						<!-- Main row -->
						<div class="row">
							<!-- Left col -->
							<section class="col-lg-12 connectedSortable">
                                <div class="card card-primary">
                                    <div class="card-header">
                                      <h3 class="card-title">Form Profil Bengkel</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="{{ route('updatesettings', $bengkel->id) }}" method="POST" enctype="multipart/form-data">
										@csrf
										@method('PUT')
                                      <div class="card-body">
										@if (session()->has('success'))
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>{{ session('success') }}</strong>
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										  </div>
										@endif
										@if (session()->has('error'))
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>{{ session('error') }}</strong>
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										  </div>
										@endif
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Nama Bengkel</label>
                                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Bengkel" name="name" value="{{ $bengkel ->namabengkel }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi Bengkel</label>
                                            <textarea class="form-control" rows="3" name="deskripsi" placeholder="Masukkan Deskripsi" required>{{ $bengkel->deskripsi }}</textarea>
                                          </div>
                                        <div class="form-group">
                                            <label>Alamat Bengkel</label>
                                            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat Bengkel">{{ $bengkel->alamat }}</textarea>
                                          </div>
                                        <div class="form-group">
                                            <label>Layanan Jasa</label>
                                            <textarea class="form-control" rows="3" name="layananjasa" placeholder="Masukkan Layanan Jasa yang Anda Sediakan">{{ $bengkel->layananjasa }}</textarea>
                                          </div>
										  <div class="form-group">
											<label for="exampleInputEmail1">Nomor WA</label>
											<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor WA" name="phone" value="{{ $bengkel->phonenumber }}" required>
										  </div>
                                          <div class="form-group col-5">
                                            <label>Jenis Bengkel</label>
                                            <select name="jenisbengkel" class="form-control">
												<option selected="true" disabled="disabled" value="">---</option>
												@foreach ($allJenisBengkel as $jenisbengkel)
                                              	<option value="{{ $jenisbengkel->id }}">{{ $jenisbengkel->jenis_bengkel }}</option>
												@endforeach
                                            </select>
                                          </div>
										@if ($bengkel->jenisbengkel_id == 1)
										<span class="bg-info p-2" style="border-radius: 5px;">Jenis Bengkel : Bengkel Motor</span>
										@else
										<span class="bg-info p-2" style="border-radius: 5px;">Jenis Bengkel : Bengkel Mobil</span>
										@endif
										  <br><br>
                                          <div class="form-group col-5">
                                            <label>Status Keaktifan Bengkel</label>
                                            <select name="status" class="form-control">
                                            	<option selected="true" disabled="disabled" value="">---</option>
												@foreach ($allStatus as $status)
                                            	<option value="{{ $status->id }}">{{ $status->statusbengkel }}</option>
												@endforeach
                                            </select>
										</div>
										<small>Status Keaktifan Bengkel menandakan Waktu Kerja Bengkel, Jika anda Sedang Berlibur, silahkan ubah statusnya ke "Tidak Aktif"</small>
										<br><br>
										@if ($bengkel->status_id == 1)
										<span class="bg-success p-2" style="border-radius: 5px;">Status Bengkel : Aktif</span>
										@else
										<span class="bg-danger p-2" style="border-radius: 5px;">Status Bengkel : Tidak Aktif</span>
										@endif
										<br><br>
                                        <div class="form-group">
                                            <label for="">Upload Gambar</label>
                                            <div class="custom-file">
                                              <input type="file" name="image" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
										<div class="form-group">
											<!-- Maps -->
											<div class="container maps">
												<div class="ratio ratio-4x3">
													<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.219741083949!2d114.5797416143369!3d-3.2956885420470527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de423a80d47ba6b%3A0x8f5abfaddfe5a2d7!2sPoliteknik%20Negeri%20Banjarmasin!5e0!3m2!1sid!2sid!4v1664202111369!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
												</div>
											</div>
											<label for="exampleInputEmail1"></label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lokasi Berupa Latitude dan Longitude" name="maps" value="{{ $bengkel->maps }}">
										  </div>
                                      </div>
                                      <!-- /.card-body -->
                      

											<div class="card-footer row justify-content-end">
												<div class="card-footer col-6 row justify-content-end">
													<button type="submit" class="btn btn-primary">Ubah</button>
												  </div>
									</form>
												<form action="{{ route('deletesettings', $bengkel->id) }}" method="post">
													@csrf
													@method('DELETE')
													<button style="margin-top: 12px" type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data anda?')">Hapus</button>
												</form>
										  	</div>
                                  </div>
							</section>
							<!-- /.Left col -->
						</div>
						<!-- /.row (main row) -->
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				<strong>Copyright &copy; 2022 BENGKENG</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block"><b>Melayani Anda Dengan Sepenuh Hati</b></div>
			</footer>

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="{{ asset('plugins/jquery/jquery.min.js') }}s"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge("uibutton", $.ui.button);
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- ChartJS -->
		<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
		<!-- Sparkline -->
		<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
		<!-- JQVMap -->
		<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}" ></script>
		<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></sc>
		// <!-- daterangepicker -->
		 <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
		<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
		// <!-- Tempusdominus Bootstrap 4 -->
		<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
		// <!-- Summernote -->
		<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
		// <!-- overlayScrollbars -->
		<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
		// <!-- AdminLTE App -->
		<script src="{{ asset('dist/js/adminlte.js') }}"></script>
		// <!-- AdminLTE for demo purposes -->
		<script src="{{ asset('dist/js/demo.js') }}"></script>
		// <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
		<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
        <script>
            $(function () {
              bsCustomFileInput.init();
            });
            </script>
    <script type="application/javascript">
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });
    </script>
	</body>
</html>
