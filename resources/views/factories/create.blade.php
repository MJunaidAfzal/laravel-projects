@extends('layout.scaffold')
@section('content')

<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color:lightgrey;
    }

</style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('factories.index')}}" class="btn btn-warning btn-lg float-right"><b>VIEW ALL</b></a>
            </div>
        </div>
    </div>

    @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div style="background-color:grey;" class=" card-header text-center text-light p-3">
                       <h3><b> ADD NEW CAR </b></h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('factories.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <label for=""><b>Name</b></label>
                             <input style="border: groove 2px gold;" type="text" name="name" id="" class="p-4 form-control" value="{{old('name')}}">
                            <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                            </div>
                            <div class="col-md-6">
                            <label for=""><b>Price</b></label>
                             <input style="border: groove 2px gold;" type="text" name="price" id="" class="p-4 form-control" value="{{old('price')}}"  >
                            <small class="text-danger">@error('price')  {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                            <label for=""><b>Year</b></label>
                             <input style="border: groove 2px gold;" type="number" name="year" id="" class="p-4 form-control"  value="{{old('year')}}" >
                            <small class="text-danger">@error('year')  {{$message}} @enderror</small>
                            </div>
                            <div class="col-md-6 mt-3">
                            <label for=""><b>Speed</b></label>
                             <input style="border: groove 2px gold;" type="number" name="speed" id="" class="p-4 form-control" value="{{old('speed')}}"  >
                            <small class="text-danger">@error('speed')  {{$message}} @enderror</small>

                            </div>
                            <div class="col-md-12 mt-3">
                        <label for=""><b>Status</b></label>
                            <select class="form-control " style="border: groove 2px gold;" name="status" id="" >
                                <option value="" >Please Select</option>
                                <option value="1" @if(old("status") == 1 ) selected @endif>Active</option>
                                <option value="0" @if(old("status") == 0 ) selected @endif>Deactive</option>
                            </select>
                            <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                            </div>
                            <div class="col-md-12 mt-4">
                               <button type="submit"class="btn btn-info btn-lg float-right btn-block"> <b>ADD NEW DATA</b> </button>  
                         </div>
                        </div>
                        </form>

                    
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection