<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DISCUSS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('/template/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                @auth
                    <h6 class="mb-0">{{ Auth::user()->name }} ({{ Auth::user()->profile->umur }} Tahun)</h6>
                    <span>Member</span> 
                @endauth
                @guest
                    <h6 class="mb-0">Guest</h6>
                @endguest
            </div>
        </div>
        <div class="navbar-nav w-100">
            @guest
                <a href="/login" class="nav-item nav-link text-center bg-primary text-white">Login</a>
            @endguest
            <a href="/" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Issues</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="/category" class="dropdown-item">Kategori</a>
                        <a href="/pertanyaan" class="dropdown-item">Pertanyaan</a>
                    </div>
                </div>
            @endauth

        </div>
    </nav>
</div>