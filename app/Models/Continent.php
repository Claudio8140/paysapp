<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'capitale', 'superficie', 'president', 'population', 'presentation'];

    public function produit ()
    {
        return $this->hasOne('App\Produit');
    }
}
