<x-layouts.admin title="Editar serviço | Beauty Booking">

    <div class="mb-4">
        <h1 class="fw-bold">Editar serviço</h1>
        <p class="text-muted">
            Altera os dados do serviço selecionado.
        </p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            <form method="POST" action="{{ route('admin.services.update', $service) }}">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>

                    <input type="text" id="name" name="name" value="{{ old('name', $service->name) }}"
                        class="form-control @error('name') is-invalid @enderror" required>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>

                    <textarea id="description" name="description" rows="4"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $service->description) }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Preço (€)</label>

                        <input type="number" id="price" name="price" value="{{ old('price', $service->price) }}"
                            step="0.01" min="0.01" class="form-control @error('price') is-invalid @enderror"
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
                            value="{{ old('duration_minutes', $service->duration_minutes) }}" min="5"
                            max="1440" class="form-control @error('duration_minutes') is-invalid @enderror"
                            required>

                        @error('duration_minutes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-check mb-4">
                    <input type="hidden" name="is_active" value="0">

                    <input type="checkbox" id="is_active" name="is_active" value="1" class="form-check-input"
                        @checked(old('is_active', $service->is_active))>

                    <label for="is_active" class="form-check-label">
                        Serviço ativo
                    </label>
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-dark">
                        Guardar alterações
                    </button>

                    <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">
                        Cancelar
                    </a>

                </div>

            </form>

        </div>
    </div>

</x-layouts.admin>
