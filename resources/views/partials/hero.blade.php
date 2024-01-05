<div id="carouselExampleDark" class="carousel slide caroudel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('assets/img/hero-bg.jpg') }}" class="d-block w-100"
            style="object-fit: cover; height: 600px;" alt="...">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-none d-md-block" style="z-index: 99;">
                <a href="#"  class="px-2 text-white" style="background-color: #ED8D0F;">Dakwah</a>
                <h2 class="mt-2">Judul Pertama</h2>
                <p>By Admin</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('assets/img/hero-bg.jpg') }}" class="d-block w-100"
                style="object-fit: cover; height: 600px;" alt="...">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-none d-md-block" style="z-index: 99;">
                <a href="#"  class="px-2 text-white" style="background-color: #ED8D0F;">Dakwah</a>
                <h2 class="mt-2">Judul Kedua</h2>
                <p>By Admin</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/img/hero-bg.jpg') }}" class="d-block w-100"
                style="object-fit: cover; height: 600px;" alt="...">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-none d-md-block" style="z-index: 99;">
                <a href="#"  class="px-2 text-white" style="background-color: #ED8D0F;">Dakwah</a>
                <h2 class="mt-2">Judul Ketiga</h2>
                <p>By Admin</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="z-index: 99;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="z-index: 99;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>