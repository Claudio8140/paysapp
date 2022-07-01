@extends('continents.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Nations</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('continents.create') }}" class="btn btn-success btn-sm" title="Add New Continent">
                            <i class="fa fa-plus" aria-hidden="true">Add New</i> 
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pays</th>
                                        <th>Capitale</th>
                                        <th>Superficie</th>
                                        <th>Président</th>
                                        <th>Population</th>
                                        <th>Présentation</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($continents as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->capitale }}</td>
                                        <td>{{ $item->superficie }}</td>
                                        <td>{{ $item->president }}</td>
                                        <td>{{ $item->population }}</td>
                                        <td>{{ $item->presentation }}</td>
                                        <td>
                                            <a href="{{ url('/continents/' . $item->id) }}" title="View Continent"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/continents/' . $item->id . '/edit') }}" title="Edit Continent"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/continents' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Continent" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-left:15px">{{ $continents->links() }}</div>
    
@endsection
