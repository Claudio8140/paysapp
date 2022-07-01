@extends('continents.layout')
@section('content')
<div class="card">
  <div class="card-header">Nations Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Pays : {{ $continents->name }}</h5>
        <p class="card-text">Capitale : {{ $continents->capitale }}</p>
        <p class="card-text">Superficie : {{ $continents->superficie }}</p>
        <p class="card-text">Président : {{ $continents->president }}</p>
        <p class="card-text">Population : {{ $continents->population }}</p>
        <p class="card-text">Présentation : {{ $continents->presentation }}</p>
  </div>
      
    </hr>
  
  </div>
</div>