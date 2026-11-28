<x-layouts.admin title="Novo serviço | Beauty Booking">

    <div class="mb-4">
        <h1 class="fw-bold">Novo serviço</h1>
        <p class="text-muted">
            Preenche os dados para adicionar um serviço.
        </p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            <form method="POST" action="{{ route('admin.services.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">
                        Nome do serviço
                    </label>

                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" placeholder="Ex.: Manicure" required>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">
                        Descrição
                    </label>

                    <textarea id="description" name="description" rows="4"
                        class="form-control @error('description') is-invalid @enderror" placeholder="Descrição do serviço...">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">
                            Preço (€)
                        </label>

                        <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01"
                            min="0.01" class="form-control @error('price') is-invalid @enderror" placeholder="15.00"
                            required>

                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="duration_minutes" class="form-label">
                            Duração (minutos)
                        </label>

                        <input type="number" id="duration_minutes" name="duration_minutes"
                            value="{{ old('duration_minutes') }}" min="5" max="1440"
                            class="form-control @error('duration_minutes') is-invalid @enderror" placeholder="45"
                            required>

                        @error('duration_minutes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-check mb-4">
                    <input type="hidden" name="is_active" value="0">

                    <input type="checkbox" id="is_active" name="is_active" value="1" class="form-check-input"
                        @checked(old('is_active', true))>

                    <label for="is_active" class="form-check-label">
                        Serviço ativo
                    </label>
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-dark">
                        Guardar serviço
                    </button>

                    <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>
    </div>

</x-layouts.admin>
