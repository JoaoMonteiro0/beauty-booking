<x-layouts.admin title="Login | Backoffice Beauty Booking">

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">

                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4 p-md-5">

                            <div class="text-center mb-4">
                                <h1 class="h3 fw-bold">Bem-vindo de volta</h1>
                                <p class="text-muted">
                                    Inicia sessão para gerir as tuas marcações.
                                </p>
                            </div>

                            <form method="POST" action="{{ route('login.store') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        Email
                                    </label>

                                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="exemplo@email.com" autocomplete="email" required autofocus>

                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        Palavra-passe
                                    </label>

                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="A tua palavra-passe" autocomplete="current-password" required>

                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-check mb-4">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">

                                    <label for="remember" class="form-check-label">
                                        Manter sessão iniciada
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-dark w-100 py-2">
                                    Iniciar sessão
                                </button>
                            </form>
                            <div class="text-center mt-4">
                                <p class="mb-0 text-muted">
                                    Acesso reservado à administração.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</x-layouts.admin>
