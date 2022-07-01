@extends('produits.layout')
@section('content')
<div class="card">
  <div class="card-header">Produits Page</div>
  <div class="card-body">
      
      <form action="{{ route('produits.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Produits d'exportation</label></br>
        <input type="text" name="produit" id="produit" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection