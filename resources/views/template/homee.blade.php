<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
@include('files.style');
    

</head>
<body>
    <style>
        .img{
            background-image: url(assets/img/man.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 700px;
        }
    </style>
    @include('template.nav');

    
    <div class="container-fluid">
        <div class="img">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div style="margin-top:150px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-6 ">
                        <h3>MED CENTER HEALTH</h3>
                        <h1 class="mt-3" style="font-size:60px;color: #3f96e8;"><b> HIGHEST QUALITY </b></h1>
                        <p style="margin-top: 50px; color: grey; font-size:18px;">To learn more about our clinical programs, <br> browse our list of medical services <br> alphabetically or search by keyword in the box <br> below.</p>
                        <button style="font-size: 20px;" class="mt-2 btn btn-outline-primary pt-3 pb-3 pl-5 pr-5 ">Contact-Us</button>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div style="background-color:#3f96e8;" class="container p-5">
        <div class="row">
            <div  class="col-md-2">
                <img src="{{asset('assets/img/04.png')}}" alt="04">
            </div>
            <div class="col-md-4">
                <h4 class="mt-3" style="color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b> MEDICAL CARE </b></h4>
                <p style="margin-top: 20px; color: white;font-size: 13px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla <br> pariatur. Excepteur sint occaecat cupidatat non <br> proident, sunt</p>
            </div>
            <div  class="col-md-2">
            <img src="{{asset('assets/img/05.png')}}" alt="05">
             
            </div>
            <div class="col-md-4">
                <h4 class="mt-3" style="color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><b> CARE PROGRAMS </b></h4>
                <p style="margin-top: 20px; color: white;font-size: 13px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla <br> pariatur. Excepteur sint occaecat cupidatat non <br> proident, sunt</p>
            </div>
        </div>
        </div>
      </div>
        
    @include('template.footer');


@include('files.script');

</body>
</html>