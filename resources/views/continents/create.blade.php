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
      
      <form action="{{ route('continents.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Pays</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Capitale</label></br>
        <input type="text" name="capitale" id="capitale" class="form-control"></br>
        <label>Superficie</label></br>
        <input type="text" name="superficie" id="superficie" class="form-control"></br>
        <label>Président</label></br>
        <input type="text" name="president" id="president" class="form-control"></br>
        <label>Population</label></br>
        <input type="text" name="population" id="population" class="form-control"></br>
        <label>Présentation</label></br>
        <input type="text" name="presentation" id="presentation" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection