<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Plat;
use Illuminate\Database\Eloquent\Relations\HasMany; 

class Menu extends Model
{
     use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'est_disponible',
        'image'
    ];

    protected $casts = [
        'prix' => 'decimal:2',
        'est_disponible' => 'boolean'
    ];

    public function plats(): HasMany
    {
        return $this->hasMany(Plat::class);
    }
}
