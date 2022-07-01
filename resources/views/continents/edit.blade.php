@extends('continents.layout')
@section('content')
<div class="card">
  <div class="card-header">Nations Page</div>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <div class="card-body">
      
      <form action="{{ url('continents/' .$continents->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$continents->id}}" id="id" />
        <label>Pays</label></br>
        <input type="text" name="name" id="name" value="{{$continents->name}}" class="form-control"></br>
        <label>Capitale</label></br>
        <input type="text" name="capitale" id="capitale" value="{{$continents->capitale}}" class="form-control"></br>
        <label>Superficie</label></br>
        <input type="text" name="superficie" id="superficie" value="{{$continents->superficie}}" class="form-control"></br>
        <label>Président</label></br>
        <input type="text" name="president" id="president" value="{{$continents->president}}" class="form-control"></br>
        <label>Population</label></br>
        <input type="text" name="population" id="population" value="{{$continents->population}}" class="form-control"></br>
        <label>Présentation</label></br>
        <input type="text" name="presentation" id="presentation" value="{{$continents->presentation}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection