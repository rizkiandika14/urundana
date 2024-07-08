    <!-- Vendor JS Files -->
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('template') }}/assets/js/main.js"></script>

    <script type="text/javascript">
        document.addEventListener('livewire:initialized', function() {
            document.addEventListener('livewire:navigated', () => {
                initSwiper();
            });
        });

        function initSwiper() {
            document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
                let config = {
                    loop: true,
                    speed: 600,
                    autoplay: {
                        delay: 5000
                    },
                    slidesPerView: "auto",
                    pagination: {
                        el: ".swiper-pagination",
                        type: "bullets",
                        clickable: true
                    }
                }
                if (swiperElement.classList.contains("swiper-tab")) {
                    initSwiperWithCustomPagination(swiperElement, config);
                } else {
                    new Swiper(swiperElement, config);
                }
            });
        }

        window.addEventListener("load", initSwiper);
    </script>

    @livewireScripts
