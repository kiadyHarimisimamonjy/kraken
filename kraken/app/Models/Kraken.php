<?php

namespace App\Models;

use App\Models\Pouvoir;
use App\Models\Tentacule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kraken extends Model
{
    use HasFactory;

    protected $fillable=['nom','age','taille','poids'];
    public function tentacules()
    {
        return $this->hasMany(Tentacule::class);
    }
    public function pouvoirs()
    {
        return $this->belongsToMany(Pouvoir::class);
    }
}
