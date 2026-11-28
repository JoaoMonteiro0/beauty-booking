<x-layouts.admin title="Serviços | Beauty Booking">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold">Serviços</h1>
            <p class="text-muted mb-0">
                Consulta e gere os serviços disponíveis.
            </p>
        </div>

        <a href="{{ route('admin.services.create') }}" class="btn btn-dark">
            Novo serviço
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @forelse ($services as $service)
                <div class="d-flex justify-content-between align-items-center border-bottom py-3">

                    <div>
                        <h5 class="mb-1">{{ $service->name }}</h5>

                        <p class="text-muted mb-1">
                            {{ $service->description ?? 'Sem descrição' }}
                        </p>

                        <small class="text-muted">
                            {{ $service->duration_minutes }} minutos
                        </small>
                    </div>

                    <div class="text-end">
                        <div class="fw-bold">
                            {{ number_format((float) $service->price, 2, ',', '.') }} €
                        </div>

                        @if ($service->is_active)
                            <span class="badge bg-success">Ativo</span>
                        @else
                            <span class="badge bg-secondary">Inativo</span>
                        @endif

                        <div class="mt-2 d-flex justify-content-end gap-2">

                            <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-outline-dark btn-sm">
                                Editar
                            </a>

                            <form method="POST" action="{{ route('admin.services.toggle-status', $service) }}"
                                onsubmit="return confirm('Pretendes alterar o estado deste serviço?')">

                                @csrf
                                @method('PATCH')

                                <button type="submit"
                                    class="btn btn-sm {{ $service->is_active ? 'btn-outline-danger' : 'btn-outline-success' }}">

                                    {{ $service->is_active ? 'Desativar' : 'Ativar' }}

                                </button>

                            </form>

                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <h5>Ainda não existem serviços.</h5>
                    <p class="text-muted mb-0">
                        Os serviços que criares aparecerão aqui.
                    </p>
                </div>
            @endforelse

        </div>
    </div>

</x-layouts.admin>
