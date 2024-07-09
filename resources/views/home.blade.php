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
                        <h1>INVESTASI GOTONG ROYONG</h1>
                        <p>Investasi bisnis bersama di aset properti dan dapatkan keuntungan secara berkala. Modal kecil
                            yang terjangkau untuk masyarakat luas.</p>

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

        @include('section.keunggulan')

    </main>
    @include('components.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('components.js')
</body>

</html>
