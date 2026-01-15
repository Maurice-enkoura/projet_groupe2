<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\CommandeController;


/*
|--------------------------------------------------------------------------
| Routes publiques (visiteurs)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/{menu}', [MenuController::class, 'show'])->name('menus.show');
Route::get('/plats', [PlatController::class, 'index'])->name('plats.index');
Route::get('/plats/{plat}', [PlatController::class, 'show'])->name('plats.show');


/*
|--------------------------------------------------------------------------
| Routes pour utilisateurs connectés et vérifiés
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard utilisateur
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    
    // Commandes utilisateur (CRUD partiel)
    Route::resource('commandes', CommandeController::class)->except(['edit', 'destroy']);
    Route::post('/commandes/{commande}/cancel', [CommandeController::class, 'cancel'])->name('commandes.cancel');
});



/*
|--------------------------------------------------------------------------
| Routes qui sont venue avec breeze
|--------------------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/




require __DIR__.'/auth.php';
