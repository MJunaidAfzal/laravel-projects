<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    @include('files.style')
</head>
<body>


        <nav style="background-color:#3f96e8;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="navbar navbar-dark ">
        <a class="navbar-brand" href="{{route('index')}}"><img style="height:50px;width:50px;" src="{{asset('assets/img/images.png')}}" alt="images"></a>
        <button class="bg-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('homee')}}"><b> Home </b></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('about')}}"><b> About </b></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('services')}}"><b> Services</b></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('contact')}}"><b> Contact </b></a>
              </li>
          </ul>
        </div>
      </nav>
      
    @include('files.script')



</body>
</html>