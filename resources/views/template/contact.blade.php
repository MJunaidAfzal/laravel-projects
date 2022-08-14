<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
@include('files.style');

</head>
<body>

    <style>
           .contact{
            background-image: url(assets/img/vecteezy_white-background-with-blue-geometric-and-white-line-pattern_7677104.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 700px;
        }
    </style>
    
    @include('template.nav');


<div class="container-fluid">
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                <h1  style="margin-top: 80px; font-size:50px;color: #3f96e8;"><b> CONTACT US </b></h1>
                <p class="mt-3"><b>PLEASE FILL YOUR FORM</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 mt-5">
                            <input  class="form-control p-4" style=" background-color: lightgrey;" type="text" placeholder="ENTER YOUR NAME">
                        </div>
                        <div class="col-md-3 mt-5">
                            <input class="form-control p-4" style="background-color: lightgrey;" type="text" placeholder="ENTER YOUR LAST NAME">
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3 mt-3">
                            <input  class="form-control p-4" style=" background-color: lightgrey;" type="text" placeholder="ENTER YOUR E-MAIL">
                        </div>
                        <div class="col-md-3 mt-3">
                            <input class="form-control p-4" style="background-color: lightgrey;" type="number" placeholder="ENTER YOUR NUMBER">
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 mt-3">
                            <textarea style=" background-color: lightgrey;" class="form-control" name="message" id="message" cols="30" rows="7" placeholder="ENTER YOUR MESSAGE"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
            <button type="submit" style="font-size: 20px;" class="mt-5 btn btn-primary pt-3 pb-3 pl-5 pr-5 "><b> SEND MESSAGE</b></button>
        </div>
                </div>
            </div>
          </div>
                

        
@include('template.footer');


@include('files.script');
</body>
</html>