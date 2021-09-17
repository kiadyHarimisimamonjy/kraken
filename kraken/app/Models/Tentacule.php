<?php

namespace App\Models;

use App\Models\Kraken;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tentacule extends Model
{
    use HasFactory;

    protected $fillable=['nom','PV','FOR','DEX','CON','kraken_id'];
    public function kraken()
    {
        return $this->belongsTo(Kraken::class);
    }
}
