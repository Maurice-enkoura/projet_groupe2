<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'menu_id',
        'est_disponible',
        'stock',
        'categorie',
        'image'
    ];

    protected $casts = [
        'prix' => 'decimal:2',
        'est_disponible' => 'boolean',
        'stock' => 'integer'
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }

    // Méthode utilitaire pour vérifier la disponibilité
    public function estEnStock(): bool
    {
        return $this->est_disponible && $this->stock > 0;
    }
}