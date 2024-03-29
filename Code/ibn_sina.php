 
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

$select_sql="SELECT * FROM doctor where Hospital_name='Ibn-Sina'";
    $select_query=$conn->query($select_sql);
   

if ($select_query->num_rows>0){ 


?>




<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ibn Sina Hospital</title>
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
font-weight: bold;">Ibn Sina Hospital</h1>
         
                </div>
            </div>
            
        </div>
        
        <div class="row" style="margin: 40px 0px;">
            
            
            
             <!--                       -->
            
            <div class="col-md-6 col-lg-3">
            

                 <div class="card">
                     <div class="card-header card_custom_header1 text-center">
                     <span>Medicine Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="Doctor_photo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price1.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title text-center mt-3 ">Professor Dr. Md. Lutful Kabir</h4>
                       
                        <div class="card-text text-center">
                           MRCP (UK), FRCP (London).
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
                     <span> Medicine Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Mohammad Zohir Uddin</h4>
                       
                        <div class="card-text text-center">
                         MBBS, FCPS (Medicine), MD (Internal Medicine), FACP (America), FRCP (UK)
                          
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
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">.Professor Dr. Shohael Mahmud Arafat</h4>
                       
                        <div class="card-text text-center">
                          FCPS (Medicine), MRCP (UK)

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
                     <span> Medicine Specialist & Consultant</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr.A.R Khan</h4>
                       
                        <div class="card-text text-center">
						MD, DABFP, FAAFP (USA)

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
                     <span> Medicine and Nephrology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Md. Ayub Ali Chowdhury</h4>
                       
                        <div class="card-text text-center">
                           MBBS, FCPS (Medicine), MD (Nephrology)
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
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr.Ahmed Manadir Hossain</h4>
                       
                        <div class="card-text text-center">
                         MBBS, FCPS (Medicine), D-Card
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
                     <span> Internal Medicine</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Sakina Anwar</h4>
                       
                        <div class="card-text text-center">
                        MBBS, MD
                         
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
                     <span>Gynecology & Obstetrics</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Masuda Begum Ranu</h4>
                       
                        <div class="card-text text-center">
						FCPS (Gynae & Obs), D-Med (UK)
                       
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
                     <span>Gynecology & Obstetrics</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Badrunnesa Begum</h4>
                       
                        <div class="card-text text-center">
                       FCPS, DGO, MCPS (Gynae & Obs)
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
                     <span>Cardiology Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. M. Touhidul Haque</h4>
                       
                        <div class="card-text text-center">
                       MBBS, MD (Cardiology)
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
                     <span>Cardiology Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Col. (Rtd.) Prof.Dr.Zehad Khan</h4>
                       
                        <div class="card-text text-center">
                        MCPS, FCPS, FRCP (Glasgow), FACC (USA) 
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
                     <span>Cardiology Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Md.Monsurul Haque</h4>
                       
                        <div class="card-text text-center">
                     MD (Cardiology), USMLE (USA) 
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
                     <span>Cardiology Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Sufia Jannat</h4>
                       
                        <div class="card-text text-center">
                      FCPS (Medicine),MD (Cardiology),
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
                     <span> Interventional & Clinical Cardiology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. S M. Siddiqur Rahman</h4>
                       
                        <div class="card-text text-center">
                     MBBS (Dhaka), D-Card (D.U) M.D (Cardiology)
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
                     <span>Cardiology & Medicine</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Md. Shafiqur Rahman Patwary</h4>
                       
                        <div class="card-text text-center">
                    MBBS, MD (Cardiology), FCPS (Medicine), MCPS (Medicine),
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
                     <span>Cardiology Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. M.A Baqui</h4>
                       
                        <div class="card-text text-center">
						D-Card FACC (America)
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
                     <span>Specialist in Medicine & Pulmonologist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. Mirza Mohammad Hiron</h4>
                       
                        <div class="card-text text-center">
						MBBS, FCPS (Medicine), MD (Chest), FCCP (USA), FRCP (Ire.), FRCP (Edin), FRCP (Glasgow)
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
                     <span>Chest (Respiratory Medicine) Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Mohammad Rofiqul Islam</h4>
                       
                        <div class="card-text text-center">
						MBBS (DMC), MD (Chest)
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
                     <span>Psychiatry & Psychotherapy</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Jhunu Shamsun Nahar</h4>
                       
                        <div class="card-text text-center">
						FCPS (Psych), IFAPA (USA)
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
                     <span>General & Plastic Surgery</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Tahmina Satter</h4>
                       
                        <div class="card-text text-center">
						 FCPS (Surgery), MS (Plastic Surgery),
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
                     <span>Orthopaedic Surgery (Arthroscopy & Joint Replacement)</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Wakil Ahmed</h4>
                       
                        <div class="card-text text-center">
						 MS (Ortho-Surgery), 2003, NITOR MMEd, 2012, CME

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
                     <span>Spine Surgery( Orthopaedic Spine Surgery)</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Md. Kamrul Ahsan</h4>
                       
                        <div class="card-text text-center">
						D-Ortho (DU) MS (Ortho)

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
                     <span>D-Ortho (DU) MS (Ortho)</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. M. Fakhrul Islam</h4>
                       
                        <div class="card-text text-center">
						MBBS, Ph.D. (Surgery)
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
                     <span>Skin, Allergy & VD Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Zakir Hossain Galib</h4>
                       
                        <div class="card-text text-center">
						MBBS, MD (Dermatology)
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
                     <span> Ear Nose Throat & Head Neck Surgery</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Lt. Colonel (Retd) Prof. Dr. Md. Abdullah Hel Kafi</h4>
                       
                        <div class="card-text text-center">
						 MBBS (Dhaka), MCPS (ENT), FCPS (ENT)
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
                     <span>Diabetes, Hormone & Medicine Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Female_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. Sultana Marufa Shafin</h4>
                       
                        <div class="card-text text-center">
						MBBS, MD (Endocrinology),
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
                     <span>Neonatal – Pediatric Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Professor Dr. Md. Sarwar Ferdous</h4>
                       
                        <div class="card-text text-center">
						MBBS (DMC), MRCP (England), DCH (Ireland), FRCP (Edin).
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
                     <span>Paediatric Asthma, Allergy & Chest Disease Specialist</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. M.S. Khaled</h4>
                       
                        <div class="card-text text-center">
						DCH MD(Pediatric) FCCP (America)
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
    </div>
  
    
</section>

<!--  hospital end-->

  
   <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/main.js"></script>
  
</body>

</html>
