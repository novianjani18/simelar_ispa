<style>
    .nav-link.active {
        color: #6E9C6B !important;
    }

    .nav-link:hover {
        color: #6E9C6B !important;
    }
</style>

<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">

        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a class="nav-link" href="/">
                    {{-- <i data-feather="home"></i> --}}
                    <span style="font-weight: bold;">BERANDA</span>
                    <!-- <span>HOME</span> -->
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active" href="/peta">
                    {{-- <i data-feather="map"></i> --}}
                    <span style="font-weight: bold;">PETA</span>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="/grafik">
                    {{-- <i data-feather="bar-chart-2"></i> --}}
                   <span style="font-weight: bold;">GRAFIK</span>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="/artikel">
                    {{-- <i data-feather="book"></i> --}}
                   <span style="font-weight: bold;">EDUKASI</span>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" href="/login">
                    {{-- <i data-feather="book"></i> --}}
                   <span style="font-weight: bold;">MASUK</span>
                </a>
            </li>
        </ul>

    </div>
</nav>
