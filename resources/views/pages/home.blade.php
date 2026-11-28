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

                <div class="col-lg-6">

                    <img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=1000&q=85"
                        alt="Interior de um espaço de beleza" class="img-fluid rounded-4 about-image">

                </div>

            </div>

        </div>
    </section>


    <section id="services" class="py-5 services-section">
        <div class="container py-lg-5">

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

            <div class="row g-4">
                @forelse ($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="card service-card h-100 border-0">
                            <div class="card-body p-4">

                                <h5 class="card-title fw-bold">
                                    {{ $service->name }}
                                </h5>

                                <p class="card-text text-muted">
                                    {{ $service->description ?? 'Descobre este serviço no nosso espaço.' }}
                                </p>

                                <div class="d-flex justify-content-between align-items-center mt-4">

                                    <div>
                                        <span class="fw-bold">
                                            {{ number_format((float) $service->price, 2, ',', '.') }} €
                                        </span>

                                        <small class="text-muted d-block">
                                            {{ $service->duration_minutes }} minutos
                                        </small>
                                    </div>

                                    <a href="#booking" class="btn btn-outline-dark rounded-pill">
                                        Marcar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">
                            De momento, não existem serviços disponíveis.
                        </p>
                    </div>
                @endforelse
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

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <h3 class="fw-bold mb-4">
                            Fazer marcação
                        </h3>

                        <form method="POST" action="{{ route('bookings.store') }}">
                            @csrf

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="client_name" class="form-label">
                                        Nome completo
                                    </label>

                                    <input type="text" id="client_name" name="client_name"
                                        value="{{ old('client_name') }}"
                                        class="form-control @error('client_name') is-invalid @enderror"
                                        placeholder="O teu nome" required>

                                    @error('client_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="client_phone" class="form-label">
                                        Telemóvel
                                    </label>

                                    <input type="tel" id="client_phone" name="client_phone"
                                        value="{{ old('client_phone') }}"
                                        class="form-control @error('client_phone') is-invalid @enderror"
                                        placeholder="912 345 678" required>

                                    @error('client_phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="client_email" class="form-label">
                                        Email
                                    </label>

                                    <input type="email" id="client_email" name="client_email"
                                        value="{{ old('client_email') }}"
                                        class="form-control @error('client_email') is-invalid @enderror"
                                        placeholder="exemplo@email.com" required>

                                    @error('client_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="service_id" class="form-label">
                                        Serviço
                                    </label>

                                    <select id="service_id" name="service_id"
                                        class="form-select @error('service_id') is-invalid @enderror" required>
                                        <option value="" disabled @selected(!old('service_id'))>
                                            Escolhe um serviço
                                        </option>

                                        @forelse ($services as $service)
                                            <option value="{{ $service->id }}" @selected(old('service_id') == $service->id)>
                                                {{ $service->name }}
                                                — {{ number_format((float) $service->price, 2, ',', '.') }} €
                                                ({{ $service->duration_minutes }} min)
                                            </option>
                                        @empty
                                            <option value="" disabled>
                                                Não existem serviços disponíveis
                                            </option>
                                        @endforelse
                                    </select>

                                    @error('service_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="starts_at" class="form-label">
                                        Data e hora pretendidas
                                    </label>

                                    <input type="datetime-local" id="starts_at" name="starts_at"
                                        value="{{ old('starts_at') }}" min="{{ now()->format('Y-m-d\TH:i') }}"
                                        class="form-control @error('starts_at') is-invalid @enderror" required>

                                    @error('starts_at')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="notes" class="form-label">
                                        Observações (opcional)
                                    </label>

                                    <textarea id="notes" name="notes" rows="3" class="form-control @error('notes') is-invalid @enderror"
                                        placeholder="Alguma informação adicional?">{{ old('notes') }}</textarea>

                                    @error('notes')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark rounded-pill w-100 py-3"
                                        @disabled($services->isEmpty())>
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
