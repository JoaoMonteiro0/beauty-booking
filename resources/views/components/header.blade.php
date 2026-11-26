<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">

            <!-- logo -->
            <a class="navbar-brand fw-bold site-brand" href="{{ route('home') }}">
                Beauty Booking
            </a>

            <!-- menu mobile -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- nav -->
            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav mx-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link site-nav-link" href="{{ route('home') }}">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link site-nav-link" href="#about">Sobre</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link site-nav-link" href="#services">Serviços</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link site-nav-link" href="#gallery">Galeria</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link site-nav-link" href="#contacts">Contactos</a>
                    </li>
                </ul>

                <!-- btn booking -->
                <a href="#booking" class="btn btn-dark rounded-pill px-4 ms-lg-3 mt-3 mt-lg-0">
                    Marcar agora
                </a>

            </div>
        </div>
    </nav>
</header>
