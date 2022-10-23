<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="img/BENGKENG PROJECT.png" type="image/x-icon">
		<title>BENGKENG | DASHBOARD</title>

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
		<!-- JQVMap -->
		<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/adminlte.min.css" />
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
		<!-- Daterange picker -->
		<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
		<!-- summernote -->
		<link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader flex-column justify-content-center align-items-center">
				<img class="animation__shake" src="img/BENGKENG PROJECT BLACK.png" alt="AdminLTELogo" height="60" width="60" />
			</div>

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
								<h1 class="m-0">Dashboard</h1>
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
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
						<div class="row">
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-info">
									<div class="inner">
										<h3>{{ $likesCount }}</h3>

										<p>Likes</p>
									</div>
									<div class="icon">
										<i class="ion ion-thumbsup"></i>
									</div>
									<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-danger">
									<div class="inner">
										<h3>{{ $dislikesCount }}<sup style="font-size: 20px"></sup></h3>

										<p>Dislikes</p>
									</div>
									<div class="icon">
										<i class="ion ion-thumbsdown"></i>
									</div>
									<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-warning">
									<div class="inner">
										<h3>{{ $withCommentCount }}</h3>

										<p>Review Comment</p>
									</div>
									<div class="icon">
										<i class="ion ion-chatbubble"></i>
									</div>
									<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-primary">
									<div class="inner">
										<h3>{{ $viewsBengkel }}</h3>

										<p>Viewers</p>
									</div>
									<div class="icon">
										<i class="ion ion-eye"></i>
									</div>
									<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
								</div>
							</div>
							<!-- ./col -->
						</div>
						<!-- /.row -->
						<!-- Main row -->
						<div class="row">
							<!-- Left col -->
							<section class="col-lg-7 connectedSortable">
								<!-- DIRECT CHAT -->
								<div class="card direct-chat direct-chat-primary">
									<div class="card-header">
										<h3 class="card-title">Review Comment</h3>
										<div class="card-tools">
											<!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
											<button type="button" class="btn btn-tool" data-card-widget="collapse">
												<i class="fas fa-minus"></i>
											</button>
											<!-- <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
												<i class="fas fa-comments"></i>
											</button> -->
											<button type="button" class="btn btn-tool" data-card-widget="remove">
												<i class="fas fa-times"></i>
											</button>
										</div>
									</div>
									<!-- /.card-header -->
									<div class="card-body">
										<!-- Conversations are loaded here -->
										<div class="direct-chat-messages">
											<!-- Message. Default to the left -->
											@forelse ($reviews as $review)
											<div class="direct-chat-msg">
												<div class="direct-chat-infos clearfix">
													<span class="direct-chat-name float-left">{{ $review->User->name }}</span>
													<!-- <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span> -->
												</div>
												<!-- /.direct-chat-infos -->
												<img class="direct-chat-img" src="{{ '../img' }}/{{ $review->User->image }}" alt="message user image" />
												<!-- /.direct-chat-img -->
												@if ($review->rating_id == 1)
												<div class="direct-chat-text bg-success">
													<i class="ion ion-thumbsup"></i>
												@else
												<div class="direct-chat-text bg-danger">
													<i class="ion ion-thumbsdown"></i>
												@endif
													{{ $review->komentar }}
												</div>
												<!-- /.direct-chat-text -->
											</div>
											@empty
												<p class="text-center">masih tidak review yg diberikan</p>
											@endforelse
											<!-- /.direct-chat-msg -->
										</div>
										<!-- /.direct-chat-pane -->
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<a href="{{ route('dashboardReview') }}" class="row justify-content-end">Lihat Selengkapnya</a>
									</div>
								</div>
								<!--/.direct-chat -->
							</section>
							<!-- /.Left col -->
							<!-- right col (We are only adding the ID to make the widgets sortable)-->
							<section class="col-lg-5 connectedSortable">
								<!-- Map card -->
								<div class="card" style="background-color: #000000">
									<!-- <div class="card-body">
										<div id="world-map" style="height: 250px; width: 100%"></div>
									</div> -->
									<!-- /.card-body-->
									<div class="card-footer bg-transparent" style="display: none">
										<div class="row">
											<div class="col-4 text-center">
												<div id="sparkline-1"></div>
												<div class="text-white">Visitors</div>
											</div>
											<!-- ./col -->
											<div class="col-4 text-center">
												<div id="sparkline-2"></div>
												<div class="text-white">Online</div>
											</div>
											<!-- ./col -->
											<div class="col-4 text-center">
												<div id="sparkline-3"></div>
												<div class="text-white">Sales</div>
											</div>
											<!-- ./col -->
										</div>
										<!-- /.row -->
									</div>
								</div>
								<!-- /.card -->

								<!-- Calendar -->
								<div class="card bg-gradient-success" style="height: 300px; width: 100%; margin-top: -16px;">
									<div class="card-header border-0">
										<h3 class="card-title">
											<i class="far fa-calendar-alt"></i>
											Calendar
										</h3>
										<!-- tools card -->
										<div class="card-tools">
											<!-- button with a dropdown -->
											<div class="btn-group">
												<!-- <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
													<i class="fas fa-bars"></i> -->
												</button>
												<!-- <div class="dropdown-menu" role="menu">
													<a href="#" class="dropdown-item">Add new event</a>
													<a href="#" class="dropdown-item">Clear events</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">View calendar</a>
												</div> -->
											</div>
											<button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
												<i class="fas fa-minus"></i>
											</button>
											<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
												<i class="fas fa-times"></i>
											</button>
										</div>
										<!-- /. tools -->
									</div>
									<!-- /.card-header -->
									<div class="card-body pt-0">
										<!--The calendar -->
										<div id="calendar" style="width: 100%"></div>
									</div>
									<!-- /.card-body -->
								</div>
								<!-- /.card -->
							</section>
							<!-- right col -->
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
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge("uibutton", $.ui.button);
		</script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="plugins/moment/moment.min.js"></script>
		<script src="plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="dist/js/pages/dashboard.js"></script>
	</body>
</html>
