use Illuminate\Support\Facades\Route;
<x-layouts.app title="Início | Beauty Booking">

    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">

                    <span class="hero-subtitle">
                        O teu momento de beleza
                    </span>

                    <h1 class="display-3 fw-bold mt-3">
                        Realça a tua beleza.
                        <br>
                        Cuida de ti.
                    </h1>

                    <p class="lead mt-4">
                        Descobre um espaço pensado para o teu bem-estar,
                        onde cada detalhe faz a diferença.
                    </p>

                    <a href="#booking" class="btn btn-light rounded-pill px-5 py-3 mt-3">
                        Marcar agora
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container py-lg-5">

            <div class="row align-items-center g-5">

                <!-- Text -->
                <div class="col-lg-6">

                    <span class="text-uppercase about-subtitle">
                        Sobre nós
                    </span>

                    <h2 class="display-5 fw-bold mt-3 mb-4">
                        Beleza, cuidado e bem-estar em cada detalhe.
                    </h2>

                    <p class="text-muted">
                        Acreditamos que cada pessoa merece um momento
                        dedicado a si própria.
                    </p>

                    <p class="text-muted">
                        No nosso espaço, combinamos profissionalismo,
                        atenção ao detalhe e um ambiente acolhedor
                        para proporcionar uma experiência única.
                    </p>

                    <a href="#services" class="btn btn-dark rounded-pill px-4 mt-3">
                        Conhecer serviços
                    </a>

                </div>

                <!-- Image -->
                <div class="col-lg-6">

                    <img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=1000&q=85"
                        alt="Interior de um espaço de beleza" class="img-fluid rounded-4 about-image">

                </div>

            </div>

        </div>
    </section>


    <section id="services" class="py-5 services-section">
        <div class="container py-lg-5">

            <!-- Title -->
            <div class="text-center mb-5">
                <span class="text-uppercase about-subtitle">
                    Os nossos serviços
                </span>

                <h2 class="display-5 fw-bold mt-3">
                    Cuida de ti
                </h2>

                <p class="text-muted mt-3">
                    Descobre os nossos serviços e encontra o momento ideal para ti.
                </p>
            </div>

            <!-- services -->
            <div class="row g-4">

                <!-- service 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0">

                        <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=800&q=85"
                            class="card-img-top" alt="Manicure">

                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">
                                Manicure
                            </h5>

                            <p class="card-text text-muted">
                                Cuida das tuas mãos com um serviço profissional e personalizado.
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="fw-bold">Desde 15€</span>

                                <a href="#booking" class="btn btn-outline-dark rounded-pill">
                                    Marcar
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- service 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0">

                        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=85"
                            class="card-img-top" alt="Cabeleireiro">

                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">
                                Cabeleireiro
                            </h5>

                            <p class="card-text text-muted">
                                Realça o teu estilo com cuidados e tratamentos para o cabelo.
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="fw-bold">Desde 25€</span>

                                <a href="#booking" class="btn btn-outline-dark rounded-pill">
                                    Marcar
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- service 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card h-100 border-0">

                        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=85"
                            class="card-img-top" alt="Tratamento facial">

                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold">
                                Tratamentos faciais
                            </h5>

                            <p class="card-text text-muted">
                                Momentos de cuidado para revitalizar e cuidar da tua pele.
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <span class="fw-bold">Desde 30€</span>

                                <a href="#booking" class="btn btn-outline-dark rounded-pill">
                                    Marcar
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="gallery" class="py-5 gallery-section">
        <div class="container py-lg-5">

            <div class="text-center mb-5">
                <span class="text-uppercase about-subtitle">
                    O nosso trabalho
                </span>

                <h2 class="display-5 fw-bold mt-3">
                    Galeria
                </h2>

                <p class="text-muted mt-3">
                    Alguns momentos e trabalhos realizados no nosso espaço.
                </p>
            </div>

            <div class="row g-3">

                <div class="col-6 col-md-4">
                    <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=800&q=85"
                        alt="Trabalho de manicure" class="img-fluid gallery-image">
                </div>

                <div class="col-6 col-md-4">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=85"
                        alt="Espaço de cabeleireiro" class="img-fluid gallery-image">
                </div>

                <div class="col-6 col-md-4">
                    <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=85"
                        alt="Tratamento de beleza" class="img-fluid gallery-image">
                </div>

                <div class="col-6 col-md-4">
                    <img src="https://images.unsplash.com/photo-1610992015732-2449b76344bc?auto=format&fit=crop&w=800&q=85"
                        alt="Cuidados de unhas" class="img-fluid gallery-image">
                </div>

                <div class="col-6 col-md-4">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=85"
                        alt="Cuidados de beleza" class="img-fluid gallery-image">
                </div>

                <div class="col-6 col-md-4">
                    <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=800&q=85"
                        alt="Maquilhagem" class="img-fluid gallery-image">
                </div>

            </div>

        </div>
    </section>

    <section id="booking" class="py-5 booking-section">
        <div class="container py-lg-5">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <span class="text-uppercase about-subtitle">
                        Marca a tua visita
                    </span>

                    <h2 class="display-5 fw-bold mt-3">
                        O teu momento começa aqui.
                    </h2>

                    <p class="text-muted mt-4">
                        Escolhe o serviço e o horário que melhor se adapta
                        a ti. Trataremos do resto.
                    </p>

                </div>

                <div class="col-lg-7">

                    <div class="booking-card p-4 p-lg-5">

                        <h3 class="fw-bold mb-4">
                            Fazer marcação
                        </h3>

                        <form>

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="name" class="form-label">
                                        Nome completo
                                    </label>

                                    <input type="text" id="name" class="form-control"
                                        placeholder="O teu nome">
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">
                                        Telemóvel
                                    </label>

                                    <input type="tel" id="phone" class="form-control"
                                        placeholder="912 345 678">
                                </div>

                                <div class="col-12">
                                    <label for="service" class="form-label">
                                        Serviço
                                    </label>

                                    <select id="service" class="form-select">
                                        <option selected disabled>
                                            Escolhe um serviço
                                        </option>

                                        <option>Manicure</option>
                                        <option>Cabeleireiro</option>
                                        <option>Tratamentos faciais</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="date" class="form-label">
                                        Data
                                    </label>

                                    <input type="date" id="date" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="time" class="form-label">
                                        Hora pretendida
                                    </label>

                                    <select id="time" class="form-select">
                                        <option selected disabled>
                                            Escolhe um horário
                                        </option>

                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                        <option>16:00</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label for="notes" class="form-label">
                                        Observações (opcional)
                                    </label>

                                    <textarea id="notes" class="form-control" rows="3" placeholder="Alguma informação adicional?"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark rounded-pill w-100 py-3">
                                        Solicitar marcação
                                    </button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section id="contacts" class="py-5 contacts-section">
        <div class="container py-lg-5">

            <div class="text-center mb-5">
                <span class="text-uppercase about-subtitle">
                    Estamos aqui para ti
                </span>

                <h2 class="display-5 fw-bold mt-3">
                    Entra em contacto
                </h2>

                <p class="text-muted mt-3">
                    Tens alguma dúvida? Estamos disponíveis para te ajudar.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="contact-card text-center p-4 h-100">
                        <div class="contact-icon">📍</div>
                        <h5 class="fw-bold mt-3">Morada</h5>
                        <p class="text-muted mb-0">
                            Rua Exemplo, Coimbra
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-card text-center p-4 h-100">
                        <div class="contact-icon">📞</div>
                        <h5 class="fw-bold mt-3">Telefone</h5>
                        <p class="text-muted mb-0">
                            912 345 678
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-card text-center p-4 h-100">
                        <div class="contact-icon">✉️</div>
                        <h5 class="fw-bold mt-3">Email</h5>
                        <p class="text-muted mb-0">
                            contacto@beautybooking.pt
                        </p>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5">
                <p class="text-muted">
                    Preferes falar connosco diretamente?
                </p>

                <a href="https://wa.me/351912345678" target="_blank" rel="noopener noreferrer"
                    class="btn btn-dark rounded-pill px-5 py-3">
                    Falar pelo WhatsApp
                </a>
            </div>

        </div>
    </section>

</x-layouts.app>
