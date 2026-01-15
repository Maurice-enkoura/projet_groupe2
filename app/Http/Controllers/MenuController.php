<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Afficher la liste des menus
     */
    public function index(): View
    {
        $menus = Menu::where('est_disponible', true)
            ->with(['plats' => function ($query) {
                $query->where('est_disponible', true);
            }])
            ->latest()
            ->paginate(9);
            
        return view('menus.index', compact('menus'));
    }

    /**
     * Afficher un menu spécifique
     */
    public function show(Menu $menu): View
    {
        $menu->load(['plats' => function ($query) {
            $query->where('est_disponible', true);
        }]);
        
        return view('menus.show', compact('menu'));
    }
}