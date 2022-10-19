<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="img/BENGKENG PROJECT.png" alt="BENGKENG Logo" class="brand-image img-circle elevation-0" />
        <span class="brand-text font-weight-light">BENGKENG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @foreach ($bengkelan as $bengkel)
            <div class="image">
                <img src="{{ '../img/' }}/{{ $bengkel->image }}" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $bengkel->namabengkel }}</a>
            </div>
            @endforeach
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class=""></i>
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Rating
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="likes.html" class="nav-link">
                                <i class="far fa-thumbs-up nav-icon"></i>
                                <p>Likes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dislikes.html" class="nav-link">
                                <i class="far fa-thumbs-down nav-icon"></i>
                                <p>Dislikes</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item">
                    <a href="{{ route('dashboardReview') }}" class="nav-link">
                        <i class="nav-icon ion ion-chatbubble"></i>
                        <p>
                            Review Comment
                            <i class=""></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('settings', $bengkel->id) }}" class="nav-link">
                        <i class="nav-icon ion ion-gear-a"></i>
                        <p>
                            Pengaturan Bengkel
                            <i class=""></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon ion ion-log-out"></i>
                        <p>
                            Kembali
                            <i class=""></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>