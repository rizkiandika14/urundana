<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Arsha Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('components.css')

</head>

<body class="index-page">
    @include('components.head-nav')


    <main class="main">

        <!-- About Section -->
        <section id="about" class="about section dark-background">

            <!-- Section Title -->
            <div class="container section-title mt-5" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            CrowdDana adalah sebuah platform yang menghubungkan investor dan pemilik usaha. Di platform
                            ini, investor dapat investasi ke proyek bisnis yang ditawarkan dengan modal yang rendah.
                            Investor akan dapat kepemilikan dalam bentuk saham yang bisa diperjual belikan di platform.
                            Kami mempermudah investor dengan investasi menguntungkan, modal investasi kecil, likuiditas,
                            dan biaya transaksi yang rendah.
                        </p>
                        <p>Visi:
                            <li>Meningkatkan perekonomian Indonesia dengan
                                meningkatkan industri bisnis di Indonesia.</li>
                            <li>Meningkatkan peluang investasi bagi investor.</li>
                        </p>
                        <p>Misi:
                            <li>Mengadakan layanan urun dana bagi pelaku industri bisnis di Indonesia.</li>
                            <li>Membuka kesempatan kepada semua masyarakat Indonesia untuk berinvestasi melalui platform
                                CrowdDana, yang menghubungkan pemilik bisnis dan investor.</li>
                        </p>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('template') }}/assets/img/hero-img.png" class="img-fluid animated"
                            alt="">
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

    </main>
    @include('components.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('components.js')
</body>

</html>
