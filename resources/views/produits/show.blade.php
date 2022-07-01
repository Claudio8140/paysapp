@extends('produits.layout')
@section('content')
<div class="card">
  <div class="card-header">Produits Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-text">Produits d'exportation : {{ $produits->produit }}</p>
  </div>
      
    </hr>
  
  </div>
</div>