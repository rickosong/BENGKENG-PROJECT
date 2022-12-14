<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
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
					<a class="nav-link active" href="{{ route('semuabengkel') }}">Semua Bengkel</a>
				</li>
				<form class="d-flex" role="search" action="{{ route('caribengkel') }}" method="POST">
					@csrf
					<input class="form-control-sm me-2" name="cari" type="search" placeholder="Cari Bengkel atau Jasa" aria-label="Search" style="height: 42px">
					<button class="btn btn-outline-success" type="submit" style="height: 42px"  id="btn-search">Cari</button>
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