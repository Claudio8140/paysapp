@extends('produits.layout')
@section('content')
<div class="card">
  <div class="card-header">Produits Page</div>
  <div class="card-body">
      
      <form action="{{ url('produits/' .$produits->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$produits->id}}" id="id" />
        <label>Produits d'exportation</label></br>
        <input type="text" name="produit" id="produit" value="{{$produits->produit}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection