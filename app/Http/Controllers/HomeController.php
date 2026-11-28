<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = Service::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('pages.home', compact('services'));
    }
}
