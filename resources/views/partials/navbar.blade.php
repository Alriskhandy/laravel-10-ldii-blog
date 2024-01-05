<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo LDII" style="margin-top: -10px;">
            <h1 class="logo" style="margin-left: 10px; color: #0a6f3e;">{{ __('DPW LDII MALUT') }}</h1>
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('sejarah') }}">Sejarah LDII</a></li>
                        <li><a href="{{ route('sejarah') }}">Visi & Misi</a></li>
                        <li><a href="{{ route('sejarah') }}">Tentang LDII</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('sejarah') }}">Struktur Organisasi</a></li>
                <li class="dropdown"><a href="#"><span>Kategori Artikel</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('dakwah') }}">Dakwah</a></li>
                        <li><a href="{{ route('dakwah') }}">Opini</a></li>
                        <li><a href="{{ route('dakwah') }}">Lintas Daerah</a></li>
                        <li><a href="{{ route('dakwah') }}">Organisasi</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('kontak') }}">Kontak</a></li>
                <li class="dropdown"><a href="#"><span>Lain-lain</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>