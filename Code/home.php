<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="FOLLOW, INDEX">

    <title>Online Hospital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <!--        1st nav ends   -->

    <div class="container-fluid custom_top">
        <div class="row cover_img">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="pro_icon">
                    <img src="img/doctorologo.jpg" alt="">
                </div>


            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                  <nav class="global-header__nav global-nav visually-hidden js-global-nav" role="navigation">
                        <ul class="global-nav_list">
                            <li class="global-nav__item"><a class="global-nav_link" href="Hospital.html" target="_top">Which hospital you are looking for?? </a></li>
             
                        </ul>
                    </nav>


            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">



            </div>


        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light custom_menu">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse custom_navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item custom_nav active">
                        <a class="nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="Hospital.html">Doctor Profile</a>
                    </li>

                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="Surgeon.html">Surgeon</a>
                    </li>

                    <li class="nav-item custom_nav">
                        <a class="nav-link " href="about.html">About</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>



    <!--        2nd nav ends  -->

    <div class="main" style="background-color: white;">
        <div class="page-intro--red" style="">
            <div class="container page-intro--red">
                <div class="wrapper">
                    <div class="page-intro__content">
                        <h1 id="page-intro" class="page-intro_title">Emergency Doctor!</h1>

                        <br>
                        <div class="lead-text page-intro__text">
                            <p>To get instant Doctor Serial click the button</p>
                        </div>

                        <a class="page-intro__btn btn" href="booking.php" target="_top">Book Now</a>
                    </div>
                </div>
            </div>
        </div>







        <div data-container="true">
            <div class="row clearfix" sty>
                <div class="col-md-10 offset-1">
                    <div class="row">
                        <div class="col-md-3 column" style="    margin-left: 138px;">
                            <div>


                                <div class="join_team text-center">
                                    <h3>Want To join in Our team</h3>
                                    <div class="appointment-pod__text" data-mh="appointment-block-text">
                                        <p><span>If you are completely expert in medical</span></p>
                                    </div>
                                    <a class="btn custom_btn" target="_top">Register now</a>
                                </div>



                            </div>
                        </div>



                        <div class="col-md-3 column">
                            <div>

                                <div class="join_team text-center">
                                    <h3>Which Department You want?</h3>
                                    <div class="text">
                                        <form action="seedoctorSearch.php" class="signup_form" method="post">
                                            <input class="custom_input" name="department" type="text" />

                                            <input name="submit-location" style="margin:20px 0px;" class="btn custom_btn" type="submit" value="Search">
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>



                        <div class="col-md-3 column">
                            <div>

                                <div class="join_team text-center">
                                    <h3>Search Doctor's Name?</h3>
                                    <div class="text">
                                        <form action="seedoctorSearch.php" class="signup_form" method="post">
                                            <input class="custom_input" name="name" type="text" />

                                            <input name="submit-search" style="margin:20px 0px;" class="btn custom_btn" type="submit" value="Search">
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
