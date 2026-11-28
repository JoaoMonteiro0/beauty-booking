<footer class="site-footer">
    <div class="container py-5">

        <div class="row g-4">

            <div class="col-lg-5">
                <h3 class="fw-bold">Beauty Booking</h3>

                <p class="footer-text mt-3">
                    O teu espaço de beleza e bem-estar.
                    Momentos de cuidado pensados para ti.
                </p>
            </div>

            <div class="col-6 col-lg-3">
                <h5 class="fw-bold mb-3">Navegação</h5>

                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('home') }}">Início</a></li>
                    <li><a href="#about">Sobre nós</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#gallery">Galeria</a></li>
                    <li><a href="#contacts">Contactos</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-4">
                <h5 class="fw-bold mb-3">Contactos</h5>

                <p class="footer-text">912 345 678</p>
                <p class="footer-text">contacto@beautybooking.pt</p>

                <a href="#booking" class="btn btn-outline-light rounded-pill px-4">
                    Marcar agora
                </a>
            </div>

        </div>

        <hr class="footer-divider my-4">

        <div class="text-center footer-text">
            &copy; {{ date('Y') }} Beauty Booking.
            Todos os direitos reservados.
        </div>

    </div>
</footer>