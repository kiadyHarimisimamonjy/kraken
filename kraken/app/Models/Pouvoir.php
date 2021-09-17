<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pouvoir extends Model
{
    use HasFactory;
    protected $fillable=['id'];

    public function krakens()
    {

        return $this->belongsToMany(Kraken::class);
    }
}
