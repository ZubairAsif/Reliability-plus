<!DOCTYPE html>

<head>
    <title> Task 1 </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <style>
       .navbar a {
            color: white;
            background-color: transparent;
            text-decoration: none;
        }

        .navbar a:hover {
        background-color: rgba(66, 183, 227, 255);
        width : 90%;
        color: black;
        }


       
        .navbar a.active{

            color: black;
            text-decoration: underline;
            font-weight: bold;
            background-color: rgba(66, 183, 227, 255);
            width: 92%;
            
        }

        #p2 {
            text-align: center;
            color: aliceblue;
            padding: 50px;
            
        }

                

        /* #div2 {

            width: 1310px;
            height: 300px;
            background-color: brown;
        } */

        /* #div3 {

            width: 300px;
            height: 300px;
            margin-top: -350px;
            margin-left: 870px;
            background-color: rgba(66, 183, 227, 255);
        } */

        #div4 {
            --bs-gutter-x: 0;
            margin-top: -6px;
            background-color: rgba(14, 38, 50, 255);
        }

        #div5 {
            color: white;
        }

        #map {
            width: 1310px;
        }

        #textColor {
            color: aliceblue;
        }

        i {
            color: rgba(66, 183, 227, 255);
        }

        #container {
            position: relative;
        }

        #tag {

            position: absolute;


            background-color: #92AD40;

            color: #FFFFFF;

            width: 300px;
            height: 300px;
        }

        #responsiveForm {
            position: absolute;
            background-color: white;
            margin-left: 50px;
            min-height: 300px;
            height: auto;
            width: 20%;

        }

        #formDiv {

            height: 422px;
            width: 420px;
            margin-right: 190px;

            background-color: rgba(66, 183, 227, 255);

        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            padding-right: var(--bs-gutter-x, 0);
            padding-left: var(--bs-gutter-x, 0);
        }

        @media (min-width: 368px) and (max-width: 667px) {
            body {
                font-size: 140%;
            }

        }

        @media (min-width: 668px) and (max-width: 991px) {
            body {
                font-size: 200%;
            }

            #columnWidth {
                width: 70%;
            }

            #col1 {
                width: 100%;
            }

            #logo{
                height : 190px;
                width: 240px;
               
            }

            .bg-img {
                background-image: url("banner.png");
                min-height: 680px;
            }

            #formDiv {
                height: 650px;
                width: 660px;
                margin-right: 170px;

            }

            .form-control {
                padding: 1.375rem .75rem;
                font-size: 2rem;
                font-weight: 700;
            }

            #footerText {
                margin-top: 50px;
                font-size: 20px;
            }

            #img1 {
                margin-bottom: 30px;
            }

            #responsiveForm {
                margin-left: 55px;
                width: 550px;
            }
            .navbar a{
                margin-left: 40px;
                font-size: 45px;
                text-align: center;
            }
            .navbar a:hover{
                width: 92%;
            }
            

        }

         @media (min-width: 992px) and (max-width: 1119px) {
            #responsiveForm {
                width: 320px;
            }
            

        } 
        
        

        .bg-img {
            /* The image used */
            background-image: url("banner.png");

            /* Control the height of the image */
            height: 460px;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
    </style>

</head>


<body>
    <div class="container-fluid">
        <!-- <header class="page-header">
           

            <div style="--bs-gutter-x: 0rem;" class="row container-fluid" id="topnav">

                <div>
                    <img id="logo" src="logo/logo.png" height="50px" width="80px">
                </div>

                <p id="headerText" class="text-white text-end" style="margin-top : -32px;"><a class="me-5 active" href="task1.html">Home &nbsp;</a> <a class="me-5" href="#">Menu
                        &nbsp;</a> <a class="me-5" href="#">Login &nbsp;</a> <a class="me-5" href="task3.html">register &nbsp;</a> <a class="me-5" href="#">About
                        &nbsp;</a>
                        <a class="me-5" href="#">
                            <i  class="fa fa-search fa-2x"></i>
                        </a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars fa-2x"></i>
                    </a>
                </p>

            </div>
        </header> -->

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <img id="logo" src="logo/logo.png" height="50px" width="80px">
                <button id="navbutton"  class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span  class="fa fa-bars fa-3x text-light"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active  me-3" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link me-3" href="#" tabindex="-1"
                                aria-disabled="true">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3" href="#">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link me-3" href="#" tabindex="-1"
                                aria-disabled="true">Register</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link me-3" href="#" tabindex="-1"
                                aria-disabled="true">About</a>
                        </li>
                    </ul>
                    <form class="d-none d-lg-block ">
                        <div class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success me-2" type="submit">Search</button>
                    </div>
                    </form>
                </div>
            </div>
        </nav>

        <div id="container">

            <div class="bg-img d-flex justify-content-end align-items-center">
                <div id="formDiv">
                    <form class="mt-5 rounded-3" id="responsiveForm" action=""
                        style="padding: 20px; margin-right: 50px; margin-bottom : 80px;">
                        <label class="d-flex justify-content-center fs-5">Login</label>
                        <div class="mb-3">
                            <label for="name" class="form-label"> Name:</label>
                            <input type="text" name="name" class="form-control" id="name" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <input type="submit" name="submit"
                                style="background-color: rgba(66,183,227,255); color: black;"
                                class="form-control btn btn-primary" value="Sign In" />
                        </div>
                        <p class="d-flex justify-content-center">Lost your password?</p>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                    </form>
                </div>
            </div>
        </div>






        <div class="row" style="--bs-gutter-x : 0;">

            <div id="col1" class="col-md-6" style="background-color:  rgba(66,183,227,255);">
                <p id="p2"> Stimulate your mind as you test your typing speed with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available</p>
            </div>
            <div id="col1" class="col-md-6" style="background-color: rgba(14,38,50,255);">
                <p id="p2"> Stimulate your mind as you test your typing speed with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available. Stimulate your mind as you test your typing speed
                    with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available.</p>
            </div>

        </div>

        <div class="">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.1315841140627!2d74.40832901500829!3d31.52054575428752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190f7df22c3fe7%3A0x8dd7ffda40aa6b03!2sAllama%20Iqbal%20International%20Airport!5e0!3m2!1sen!2s!4v1618907910487!5m2!1sen!2s"
                style="border:0;" width="100%" height="500px" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div id="div4" class="row container-fluid">

            <div id="columnWidth" class="col-md-4 col-sm-6 " style="padding: 30px;">
                <p id="textColor" style="color: white;"><b>Our History &nbsp
                        Our Biography &nbsp
                        Our Skills</b></p>

                <p id="textColor">Stimulate your mind as you test your typing speed with this standard English paragraph
                    typing test. Watch your typing speed and accuracy increase as you learn about a variety of new
                    topics! Over 40 typing test selections available.</p>

                <div class="row">
                    <!-- <div class="col-md-3">
                        </div> -->
                    <div class="col-md-4" id="textColor">

                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew


                    </div>
                    <div class="col-md-4" id="textColor">
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew </br>
                        <i class="fa fa-check-square-o"></i> wewewew
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>


            <div class="row">
                <div>
                    <p id="footerText" class="text-center mt-5" style=" color: rgba(66,183,227,255);">Solstice Solution
                        2021 | All rights
                        reserved

                    </p>
                </div>
                <div class="text-end" style="margin-top : -50px;">
                    <img id="img1" src="img1.png" height="40px" width="40px">
                    <img id="img1" src="img2.png" height="40px" width="40px">
                    <img id="img1" src="img3.png" height="40px" width="40px">
                </div>

            </div>



        </div>






    </div>

</body>


</html>