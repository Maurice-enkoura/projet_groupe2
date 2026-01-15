<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Plat;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Page d'accueil (visiteur)
     */
   public function index()
{
    $menus = Menu::where('est_disponible', true)->get();

    $plats = Plat::where('est_disponible', true)
        ->inRandomOrder()
        ->limit(6)
        ->get();

    return view('home', compact('menus', 'plats'));
}

}
