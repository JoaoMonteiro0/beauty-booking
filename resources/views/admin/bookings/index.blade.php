<x-layouts.admin title="Marcações | Beauty Booking">

    <div class="mb-4">
        <h1 class="fw-bold">Marcações</h1>
        <p class="text-muted">
            Consulta e acompanha os pedidos dos clientes.
        </p>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">

            @forelse ($bookings as $booking)
                <div class="border-bottom py-3">

                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">

                        <div>
                            <h5 class="fw-bold mb-1">
                                {{ $booking->client_name }}
                            </h5>

                            <p class="text-muted mb-1">
                                {{ $booking->service->name }}
                            </p>

                            <small class="text-muted d-block">
                                {{ $booking->client_email }}
                            </small>

                            <small class="text-muted d-block">
                                {{ $booking->client_phone }}
                            </small>
                        </div>

                        <div class="text-end">

                            <div class="fw-bold">
                                {{ $booking->starts_at->format('d/m/Y H:i') }}
                            </div>

                            <div class="text-muted small">
                                {{ $booking->duration_minutes }} minutos
                            </div>

                            <div class="fw-bold mt-1">
                                {{ number_format((float) $booking->price, 2, ',', '.') }} €
                            </div>

                            @switch($booking->status)
                                @case('pending')
                                    <span class="badge bg-warning text-dark">
                                        Pendente
                                    </span>
                                @break

                                @case('confirmed')
                                    <span class="badge bg-success">
                                        Confirmada
                                    </span>
                                @break

                                @case('cancelled')
                                    <span class="badge bg-danger">
                                        Cancelada
                                    </span>
                                @break

                                @case('completed')
                                    <span class="badge bg-secondary">
                                        Concluída
                                    </span>
                                @break
                            @endswitch

                        </div>

                    </div>

                    @if ($booking->notes)
                        <p class="text-muted small mt-2 mb-0">
                            <strong>Observações:</strong>
                            {{ $booking->notes }}
                        </p>
                    @endif

                </div>

                @empty

                    <div class="text-center py-5">
                        <h5>Ainda não existem marcações.</h5>

                        <p class="text-muted mb-0">
                            As marcações submetidas pelos clientes aparecerão aqui.
                        </p>
                    </div>
                @endforelse

            </div>
        </div>

    </x-layouts.admin>
