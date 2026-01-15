<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Plat;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CommandeController extends Controller
{
    use AuthorizesRequests;

    /**
     * Afficher les commandes de l'utilisateur
     */
    public function index(): View
    {
        /** @var User $user */
        $user = Auth::user();

        $commandes = $user->commandes()
            ->with('plat')
            ->latest()
            ->paginate(10);

        return view('commandes.index', compact('commandes'));
    }

    /**
     * Afficher le formulaire de création de commande
     */
    public function create(Request $request): View
    {
        $platId = $request->query('plat_id');
        $plat = null;

        if ($platId) {
            $plat = Plat::where('est_disponible', true)
                ->where('stock', '>', 0)
                ->findOrFail($platId);
        }

        $plats = Plat::where('est_disponible', true)
            ->where('stock', '>', 0)
            ->get();

        return view('commandes.create', compact('plats', 'plat'));
    }

    /**
     * Enregistrer une nouvelle commande
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'plat_id' => 'required|exists:plats,id',
            'quantite' => 'required|integer|min:1|max:10',
            'notes' => 'nullable|string|max:500',
        ]);

        $plat = Plat::findOrFail($validated['plat_id']);

        if ($plat->stock < $validated['quantite']) {
            return back()->withErrors([
                'quantite' => 'Stock insuffisant. Disponible : ' . $plat->stock,
            ]);
        }

        Commande::create([
            'user_id' => Auth::id(),
            'plat_id' => $validated['plat_id'],
            'quantite' => $validated['quantite'],
            'prix_unitaire' => $plat->prix,
            'total' => $plat->prix * $validated['quantite'],
            'statut' => 'en_attente',
            'notes' => $validated['notes'] ?? null,
        ]);

        $plat->decrement('stock', $validated['quantite']);

        return redirect()->route('commandes.index')
            ->with('success', 'Commande passée avec succès !');
    }

    /**
     * Afficher les détails d'une commande
     */
    public function show(Commande $commande): View
    {
        $this->authorize('view', $commande);

        return view('commandes.show', compact('commande'));
    }

    /**
     * Annuler une commande
     */
    public function cancel(Commande $commande): RedirectResponse
    {
        $this->authorize('update', $commande);

        if ($commande->statut !== 'en_attente') {
            return back()->with('error', 'Seules les commandes en attente peuvent être annulées.');
        }

        $commande->plat->increment('stock', $commande->quantite);
        $commande->update(['statut' => 'annulee']);

        return redirect()->route('commandes.index')
            ->with('success', 'Commande annulée avec succès.');
    }
}