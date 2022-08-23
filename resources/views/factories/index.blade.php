@extends('layout.scaffold')
@section('content')

<style>
    body{
        background-color:orange;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

    }
    table{
        background-color:white;
        
    }
</style>

   

<div class="container mt-5" >
<div class="container">
      <div class="row">
      <div class="col-md-12">
                <a href="{{route('factories.create')}}" class="btn btn-lg btn-success float-right mb-2"> ADD NEW</a>
        </div>
      </div>
    </div>

    @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert alert-success">{{Session::get('success')}}</div>
        </div>
        @endif
      </div>

<table class="table table-striped table-hover table-bordered">
  <thead  class="bg-dark text-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Year</th>
      <th scope="col">Speed</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($factories as $factory)
    <tr>
        <td  scope="row">{{ $factory->id }}</td>
        <td  scope="row">{{ $factory->name }}</td>
        <td  scope="row">{{ $factory->price }}</td>
        <td  scope="row">{{ $factory->year }}</td>
        <td  scope="row">{{ $factory->speed }}</td>


        <td  scope="row">
            @if($factory->status == 1)
            <span class="badge badge-success">Active</span>
            @else
            <span class="badge badge-danger">Deactive</span>
             @endif
        </td>
        <td  scope="row">
               
        <a href="{{route('factories.edit',$factory->id)}}" class="btn btn-primary btn-sm">  <i class="fa fa-edit"></i>  EDIT </a>
        &nbsp;|&nbsp;
        <a href="{{route('factories.delete',$factory->id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i>  DELETE </a> 

        </td>

    </tr>
    @endforeach

  
  </tbody>
</table>
</div>

@endsection