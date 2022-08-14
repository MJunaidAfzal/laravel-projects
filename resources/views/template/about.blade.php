<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
@include('files.style');

</head>
<body>
    
<style>
    .img1{
            background-image: url(assets/img/he.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 700px;
            
        }
</style>

    @include('template.nav');


<div class="container-fluid">
            <div class="img1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div style="margin-top:150px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="col-md-6 ">
                            <h3>MED CENTER HEALTH</h3>
                            <h1 class="mt-3" style="font-size:60px;color:black;"><b> HEALTH CARE SERVICES </b></h1>
                            <p style="margin-top: 50px; color: black; font-size:18px;">To learn more about our clinical programs, <br> browse our list of medical services <br> alphabetically or search by keyword in the box <br> below.</p>
                            <button style="font-size: 20px;" class="mt-2 btn btn-outline-dark pt-3 pb-3 pl-5 pr-5 ">LEARN MORE</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div style="color: white; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; background-color:#3f96e8 ; height:720px;margin-top: 100px; " class="container-fluid">
            <div class="container">
                <div class="row">
                    <div style="margin-top:100px ;" class="col-md-12">
                        <div  class="text-center">
                            <h1><b> WE LIVE AND BREATHE OUR VALUES </b></h1>
                        </div>
                        </div>

                        
                    <div style="margin-top:100px; color: white;font-size: 20px;" class="col-md-4">
                        <p><b>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</b></p>
                    </div>
                    <div style="margin-top:100px; color: white;font-size: 20px;" class="col-md-4">
                        <p><b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</b></p>
                    </div>
                    <div style="margin-top:100px; color: white;font-size: 20px;" class="col-md-4">
                        <p><b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</b></p>
                    </div>
                
            </div>
            <div class="text-center">
            <button style="font-size: 20px;" class="mt-5 btn btn-outline-light pt-3 pb-3 pl-5 pr-5 ">LEARN MORE</button>
        </div>
               
                
            </div>
          </div>

          <div style="margin-top: 100px;" class="container">
            <div class="text-center">
                <h1 class="mt-3" style=" font-size:50px;color: #3f96e8;">MEET THE TEAM</h1>
            </div>
          </div>

          <div style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; margin-top: 200px; background-color:#3f96e8 ; height:150px;" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div style="margin-top: -150px; background-color:#f2f2f2;height: 450px;border: 3px black groove;border-radius: 20px;" class="col-md-4">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/01.png')}}" alt="01">
                            <h5 class="mt-3" ><b> DR.ADAM JONSON </b></h5>
                            <p class="mt-4"><b>Sample text. Click to select the text box. Click again or double click to start editing the text.</b></p>
                            <h5 class="mt-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">CHEIF OPERATING OFFICER</h5>
                        </div>
                    </div>

                    <div style="margin-top: -150px; background-color:#f2f2f2;height: 450px;border: 3px black groove;border-radius: 20px;" class="col-md-4">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/03.png')}}" alt="03">
                            <h5 class="mt-3" ><b> DR.SIMON LARSON </b></h5>
                            <p class="mt-4"><b>Sample text. Click to select the text box. Click again or double click to start editing the text.</b></p>
                            <h5 class="mt-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">RELATIONSHIP MANAGER</h5>
                        </div>
                    </div>

                    <div style="margin-top: -150px; background-color:#f2f2f2;height: 450px;border: 3px black groove;border-radius: 20px;" class="col-md-4">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/02.png')}}" alt="02">
                            <h5 class="mt-3" ><b> DR.MARRY HODSON </b></h5>
                            <p class="mt-4"><b>Sample text. Click to select the text box. Click again or double click to start editing the text.</b></p>
                            <h5 class="mt-4" style="font-family:Verdana, Geneva, Tahoma, sans-serif ;">DIRECTER OF MARKETING</h5>
                        </div>
                    </div>

                </div>
            </div>
          </div>

          <div style="background-color:#3f96e8;height: 900px; margin-top: 250px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="text-center">
                <h1 class="mt-3" style=" font-size:40px;color: white;"><b> READ WHAT OUR CUSTOMER SAY </b></h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top:50px; background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/6.png')}}" alt="6">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> CELIA ALMEDA </b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>CEO MAILCHARM</p>
                        </div>
                    </div>

                    <div style="margin-top:50px; background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/7.png')}}" alt="7">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> FRANK KENNY </b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>FINANCIAL DIRECTOR</p>
                        </div>
                    </div>

                    <div style=" background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/8.png')}}" alt="8">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> PHOEBE NELSON</b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>SALES MANAGER</p>
                        </div>
                    </div>

                    <div style=" background-color:white; border: 2px black groove; height:350px; border-radius:30px" class="col-md-6">
                        <div class="text-center">
                        <img style="margin-top:20px;" src="{{asset('assets/img/9.png')}}" alt="9">
                            <h5 class="mt-2" style="color:#3f96e8;"><b> JENNY ROBERTS </b></h5>
                            <p class="mt-3"><b>Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl. Enim nunc faucibus a pellentesque sit amet. Sed turpis tincidunt id aliquet risus feugiat in ante metus.</b></p>
                            <p>OFFICE MANAGER</p>
                        </div>
                    </div>
                </div>
            </div>
          </div>


            
@include('template.footer');


@include('files.script');
</body>
</html>