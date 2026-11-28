<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        abort_unless($request->user()?->role === 'admin', 403);

        $services = Service::orderBy('name')->get();

        return view('admin.services.index', [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        abort_unless($request->user()?->role === 'admin', 403);

        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        abort_unless($request->user()?->role === 'admin', 403);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'price' => ['required', 'numeric', 'decimal:0,2', 'min:0.01', 'max:999999.99'],
            'duration_minutes' => ['required', 'integer', 'min:5', 'max:1440'],
            'is_active' => ['required', 'boolean'],
        ]);

        Service::create($validated);

        return to_route('admin.services.index')
            ->with('success', 'Serviço criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Service $service): View
    {
        abort_unless($request->user()?->role === 'admin', 403);

        return view('admin.services.edit', [
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service): RedirectResponse
    {
        abort_unless($request->user()?->role === 'admin', 403);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:2000'],
            'price' => ['required', 'numeric', 'decimal:0,2', 'min:0.01', 'max:999999.99'],
            'duration_minutes' => ['required', 'integer', 'min:5', 'max:1440'],
            'is_active' => ['required', 'boolean'],
        ]);

        $service->update($validated);

        return to_route('admin.services.index')
            ->with('success', 'Serviço atualizado com sucesso!');
    }

    public function toggleStatus(Request $request, Service $service): RedirectResponse
    {
        abort_unless($request->user()?->role === 'admin', 403);

        $service->update([
            'is_active' => !$service->is_active,
        ]);

        $message = $service->is_active
            ? 'Serviço ativado com sucesso!'
            : 'Serviço desativado com sucesso!';

        return to_route('admin.services.index')
            ->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
