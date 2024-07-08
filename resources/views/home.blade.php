<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home - Urun Dana</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('components.css')

</head>

<body class="index-page">
    @include('components.head-nav')


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center"
                        data-aos="zoom-out">
                        <h1>Better Solutions For Your Business</h1>
                        <p>We are team of talented designers making websites with Bootstrap</p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('template') }}/assets/img/hero-img.png" class="img-fluid animated"
                            alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="zoom-in">

                <div class="swiper init-swiper swiper-clients">

                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-1.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-2.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-3.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-4.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-5.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-6.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-7.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ asset('template') }}/assets/img/clients/client-8.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        @include('section.daftar-investasi')

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <img src="{{ asset('template') }}/icon/advantage.png" alt="">
                            <h4 class="stretched-link">Lorem Ipsum</h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <img src="{{ asset('template') }}/icon/advantage-2.png" alt="">
                            <h4 class="stretched-link">Sed ut perspici</h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <img src="{{ asset('template') }}/icon/advantage-3.png" alt="">
                            <h4 class="stretched-link">Magni Dolores</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <img src="{{ asset('template') }}/icon/advantage-4.png" alt="">
                            <h4 class="stretched-link">Nemo Enim</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

    </main>
    @include('components.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('components.js')
</body>

</html>
