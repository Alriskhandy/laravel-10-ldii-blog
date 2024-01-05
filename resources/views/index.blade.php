<x-main-layout>
    @include('partials.hero')
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <!-- Kolom Sidebar -->
                <div class="col-md-4">
                    @include('partials.sidebar')
                </div>

                <!-- Kolom Blog -->
                <div class="col-md-8 px-3 entries">
                    <div class="mb-5">
                        <div class="_img-wrapper _main-post-img">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                        </div>
                        <h3 class="mt-4">Bahas Program Kerja 2024, LDII Lanjutkan Pengabdian Bangsa</h3>
                        <div class="d-flex">
                            <p class="me-2">By Admin</p>
                            <span class="me-3">| 30 December 2023</span>
                            <span>Comment : 20</span>
                        </div>
                        <div class="_post-body mb-2">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At alias corporis laboriosam
                                quidem tempore qui maxime quis voluptatum a! Voluptates magni dolorem inventore, odio
                                corporis quas optio nam adipisci ea. Natus, deleniti exercitationem. Excepturi nisi,
                                error, ex deserunt laborum, at est odit porro doloribus a quo. Quae natus voluptatum ad?
                            <p>
                        </div>
                        <button class="btn btn-primary">Selengkapnya</button>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="_img-wrapper _post-img">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <h6 class="mt-3">Bahas Program Kerja 2024, LDII Lanjutkan Pengabdian Bangsa</h6>
                            <div class="text-sm d-flex">
                                <span style="color: #00923f"><i class="fa-regular fa-calendar-days"></i></span>
                                <p class="ms-2">30 Desember 2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="_img-wrapper _post-img">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <h6 class="mt-3">Bahas Program Kerja 2024, LDII Lanjutkan Pengabdian Bangsa</h6>
                            <div class="text-sm d-flex">
                                <span style="color: #00923f"><i class="fa-regular fa-calendar-days"></i></span>
                                <p class="ms-2">30 Desember 2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="_img-wrapper _post-img">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <h6 class="mt-3">Bahas Program Kerja 2024, LDII Lanjutkan Pengabdian Bangsa</h6>
                            <div class="text-sm d-flex">
                                <span style="color: #00923f"><i class="fa-regular fa-calendar-days"></i></span>
                                <p class="ms-2">30 Desember 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="_img-wrapper _post-img">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <h6 class="mt-3">Bahas Program Kerja 2024, LDII Lanjutkan Pengabdian Bangsa</h6>
                            <div class="text-sm d-flex">
                                <span style="color: #00923f"><i class="fa-regular fa-calendar-days"></i></span>
                                <p class="ms-2">30 Desember 2023</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="_img-wrapper _post-img">
                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <h6 class="mt-3">Bahas Program Kerja 2024, LDII Lanjutkan Pengabdian Bangsa</h6>
                            <div class="text-sm d-flex">
                                <span style="color: #00923f"><i class="fa-regular fa-calendar-days"></i></span>
                                <p class="ms-2">30 Desember 2023</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-main-layout>