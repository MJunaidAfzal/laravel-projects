@extends('layout.scaffold')
@section('content')

<style>
    body{
        background-color:lightyellow;
    }
    table{
        background-color:white;
        
    }
</style>

<div class="container mt-5" >
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($factories as $factory)
    <tr>
        <td  scope="row">{{ $factory->id }}</td>
        <td  scope="row">{{ $factory->name }}</td>

        <td  scope="row">
            @if($factory->status == 1)
            <span class="badge badge-success">Active</span>
            @else
            <span class="badge badge-danger">Deactive</span>
             @endif
        </td>
        <td  scope="row">
            <button class="btn btn-primary btn-sm">EDIT</button>
            <button class="btn btn-danger btn-sm">DELETE</button>

        </td>

    </tr>
    @endforeach

  
  </tbody>
</table>
</div>

@endsection