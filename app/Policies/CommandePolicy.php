<?php

namespace App\Policies;

use App\Models\Commande;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommandePolicy
{
    use HandlesAuthorization;

    /**
     * Vérifier si l'utilisateur peut voir la commande
     */
    public function view(User $user, Commande $commande): bool
    {
        return $user->id === $commande->user_id || $user->isAdmin();
    }

    /**
     * Vérifier si l'utilisateur peut modifier la commande
     */
    public function update(User $user, Commande $commande): bool
    {
        // L'utilisateur ne peut modifier que ses propres commandes en attente
        return $user->id === $commande->user_id 
            && $commande->statut === 'en_attente';
    }

    /**
     * Vérifier si l'utilisateur peut supprimer la commande
     */
    public function delete(User $user, Commande $commande): bool
    {
        // Seul l'admin peut supprimer
        return $user->isAdmin();
    }
}