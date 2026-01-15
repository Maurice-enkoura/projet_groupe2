<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\View\View;

class PlatController extends Controller
{
    /**
     * Afficher la liste des plats
     */
    public function index(): View
    {
        $plats = Plat::where('est_disponible', true)
            ->with('menu')
            ->latest()
            ->paginate(12);
            
        return view('plats.index', compact('plats'));
    }

    /**
     * Afficher un plat spécifique
     */
    public function show(Plat $plat): View
    {
        $plat->load('menu');
        return view('plats.show', compact('plat'));
    }
}
