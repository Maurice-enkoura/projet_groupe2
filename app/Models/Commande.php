<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plat_id',
        'quantite',
        'prix_unitaire',
        'total',
        'statut',
        'notes'
    ];

    protected $casts = [
        'quantite' => 'integer',
        'prix_unitaire' => 'decimal:2',
        'total' => 'decimal:2',
        'date_commande' => 'datetime'
    ];

    // Les statuts possibles
    const STATUTS = [
        'en_attente' => 'En attente',
        'confirmee' => 'Confirmée',
        'prete' => 'Prête',
        'livree' => 'Livrée',
        'annulee' => 'Annulée'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function plat(): BelongsTo
    {
        return $this->belongsTo(Plat::class);
    }

    // Méthode pour calculer automatiquement le total
    public static function calculerTotal($prixUnitaire, $quantite): float
    {
        return $prixUnitaire * $quantite;
    }

    // Méthode pour obtenir le statut lisible
    public function getStatutLibelleAttribute(): string
    {
        return self::STATUTS[$this->statut] ?? $this->statut;
    }
}