<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    // use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['produit'];
    public function continent ()
    {
        return $this->belongsTo('App\Continent');
    }
}
