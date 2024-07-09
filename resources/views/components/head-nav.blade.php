<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <h5 class="sitename">PT SECURITIES CROWD FUNDING INDONESIA</h5>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a wire:navigate href="/home" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                <li class="dropdown"><a href="#"
                        class="{{ Route::is('about') || Route::is('syarat-ketentuan') ? 'active' : '' }}"><span>Tentang</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a wire:navigate href="/about">Tentang Kami</a></li>
                        <li><a wire:navigate href="/syarat-ketentuan">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Risiko</a></li>
                    </ul>
                </li>
                <li><a wire:navigate href="/contact" class="{{ Route::is('contact') ? 'active' : '' }}">Hubungi Kami</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-login" href="#about">Login</a>
        <a class="btn-register" href="#about">Register</a>


    </div>
</header>
