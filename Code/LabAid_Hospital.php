 
 <?php

include "lib/connection.php";
$result ="";
//insert query
if(isset($_POST['add_data'])){
   $Name= $_POST['name'];
   $Department= $_POST['department'];
   $Email= $_POST['email'];
   $Hospital_name= $_POST['hospital_name'];
   $Details= $_POST['details'];
    
    
    $insert_sql= "INSERT INTO doctor(Name,Department,Email,Hospital_name,Details) values ('$Name','$Department','$Email','$Hospital_name','$Details')";
    
    if($conn->query($insert_sql)){
       $result= "Confirmed";
        
    }
    
    else{
           die($conn->error);
    }
    
    
    
    
}

$select_sql="SELECT * FROM doctor where Hospital_name='Labaid'";
    $select_query=$conn->query($select_sql);
   

if ($select_query->num_rows>0){ 


?>



<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>LabAid HOSPITAL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,700|Lato:300,300i,400" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.css">
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
                        <a class="nav-link " href="support.html">Online Support</a>
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

  
<!--  hospital start-->
<section id="hospital"   style="background-image: url(img/background.png);
    background-position: center;
    background-size: cover; 
    background-repeat: no-repeat;">
    <div class="container" style="margin-bottom: 40px;">
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="hospial_content text-center" style="margin-top: 100px;">
                <h1 style="font-size: 30pt;
font-weight: bold;">LabAid Hospital</h1>
         
                </div>
            </div>
            
        </div>
        
        <div class="row" style="margin: 40px 0px;">
            
            
            
             <!--                       -->
            
            <div class="col-md-6 col-lg-3">
            

                 <div class="card">
                     <div class="card-header card_custom_header1 text-center">
                     <span>Emergency</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="Doctor_photo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price1.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title text-center mt-3 ">Dr Anharur Rahman</h4>
                       
                        <div class="card-text text-center">
                           MBBS(D.U) Asst. Registrar
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                     <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>

          <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Medicine Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Asmat Ahmed</h4>
                       
                        <div class="card-text text-center">
                           MBBS, MD (USA)
                          
                        </div>
                   <br><br>
                          
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
               <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Medicine Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Zubayer Ahmed</h4>
                       
                        <div class="card-text text-center">
                           MBBS, MD (Internal Medicine)
Clinical Fellow-Rheumatology &nbsp; Immunology.

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Medicine Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. A.K.M. Shaheen Ahmed</h4>
                       
                        <div class="card-text text-center">
                          FCPS(Medicine),MCPS(Medicine),MBBS Associate Prof.

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiologist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof S M MUSTAFA ZAMAN</h4>
                       
                        <div class="card-text text-center">
                          MBBS, DTCD, MD (Card), Fellow-interventional cardiology (India, Singapore, Bangladesh)
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
               <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiologist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">DR ABU SALIM</h4>
                       
                        <div class="card-text text-center">
                         MBBS, D, CARD, MD(CARDIOLOGY), FESC
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
              <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiologist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Lutfor Rahman</h4>
                       
                        <div class="card-text text-center">
                         MBBS, MS (CTS)
                         SPECIALITY: Cardiac Surgery 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Child Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Md. Abdul Quayum</h4>
                       
                        <div class="card-text text-center">
                        MBBS, BCS(HEALTH) DCH (DU) Holy family red crescent Medical college and Hospital 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Child Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Azmeri Sultana</h4>
                       
                        <div class="card-text text-center">
                       MBBS, DCH ,MCPS,FCPS Associate Professor Child Hospital , Mirpur -2, Dhaka 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
                         <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Gastroenterology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr (Prof. ) Maj Gen Muhammad Rabiul Hossain</h4>
                       
                        <div class="card-text text-center">
                       MBBS,MCPS,FCPS,FRCP(Edin) 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
                <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Gastroenterology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. A.K.M Shamsul Kabir</h4>
                       
                        <div class="card-text text-center">
                       MBBS (DMC), FCPS (Medicine), MD (Hepatology) 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Gastroenterology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. ABM Shafiullah</h4>
                       
                        <div class="card-text text-center">
                      MBBS,MD(GASTRO) 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Nephrology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. (Dr.) Asia Khanam</h4>
                       
                        <div class="card-text text-center">
                      MBBS, MD(Nephrology) 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
              <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Nephrology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Md Anwarul Hoque Faraji</h4>
                       
                        <div class="card-text text-center">
                     MBBS, BCS, MD (Nephrology)
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Diabetology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Asso. Prof. Dr. Indrajit Prashad</h4>
                       
                        <div class="card-text text-center">
                    MBBS, FCPS(Med), MD(Endocrinology), MACE(USA)
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Diabetology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. A.K.M. Shaheen Ahmed</h4>
                       
                        <div class="card-text text-center">
                   FCPS (Medicine), MCPS (Medicine), MBBS Associate Prof., Medicine BIRDEM & Ibrahim Medical College
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Diabetology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">DR. ANISUR RAHMAN</h4>
                       
                        <div class="card-text text-center">
                  MBBS, DIH, DEM, MACE
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                    <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Thyroid and Hormone Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Md. Hafizur Rahman</h4>
                       
                        <div class="card-text text-center">
                  MBBS, DEM, MD (EM), MACE (USA)
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>ENT (Ear, Nose &nbsp; Throat)</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. K. M. Mamun Murshed</h4>
                       
                        <div class="card-text text-center">
                  MBBS, PGDND, DLO
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>ENT (Ear, Nose & Throat)</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. KA Faisal</h4>
                       
                        <div class="card-text text-center">
                  MBBS,DLO
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>ENT (Ear, Nose & Throat)</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. M Muinul Hafiz</h4>
                       
                        <div class="card-text text-center">
                  MBBS, DAND, DLO, MS (ENT), FACS(USA), FICS
Specialty: Head & Neck Surgeon 

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Burn Plastic & Cosmetic Surgery</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Foara Tasnim Palmy</h4>
                       
                        <div class="card-text text-center">
                  Plastic, Reconstructive & Cosmetic Surgeon MBBS (DMC), MS (Plastic Surgery) 

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
              <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Skin & VD</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">DR. MD. ABUL KASHEM CHOWDHURY</h4>
                       
                        <div class="card-text text-center">
                  MBBS, DDV (DU), FCPS (SKIN & VD) 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Skin & VD</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Ismail Hossain</h4>
                       
                        <div class="card-text text-center">
                 MBBS, FCGP, DDV 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Nutrition & Dietetics</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Dilara Makhbul</h4>
                       
                        <div class="card-text text-center">
                MBBS 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Nutrition & Dietetics</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Kamrunnaher</h4>
                       
                        <div class="card-text text-center">
                MBBS 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Nutrition & Dietetics</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Salma Pervin</h4>
                       
                        <div class="card-text text-center">
                MBBS 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Family Physician</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr Shahidur Rahman</h4>
                       
                        <div class="card-text text-center">
                MBBS, FCPS 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="#">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
          
            <?php while($data=$select_query->fetch_assoc()){ ?>
             <div class="col-md-6 col-lg-3">
                 <div class="card">
                    <div class="card-header card_custom_header2 text-center">
                     <span><?php echo $data['Department']; ?></span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;"><?php echo $data['Name']; ?></h4>
                       
                        <div class="card-text text-center">
                      <?php echo $data['Email']; ?>
                        </div>
                         <div class="card-text text-center">
                  <?php echo $data['Details']; ?>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       
                       <span><a href="booking.html">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                    
                </div>
                  
            </div>
               <?php } ?>
                    <?php } else{  } ?> 
                
          
        
        </div>
    </div>
  
    
</section>

<!--  hospital end-->

  
   <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
  
</body>

</html>
