 
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

$select_sql="SELECT * FROM doctor where Hospital_name='Birdem'";
    $select_query=$conn->query($select_sql);
   

if ($select_query->num_rows>0){ 


?>





<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Birdem HOSPITAL</title>
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
font-weight: bold;">Birdem Hospital</h1>
         
                </div>
            </div>
            
        </div>
        
        <div class="row" style="margin: 40px 0px;">
            
 
          <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Vascular Surgery</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Dr. SMG Saklayen</h4>
                       
                        <div class="card-text text-center">
                          MBBS, Master of Surgery
Head of the Department 
email: saklayendmc@gmail.com
SPECIALITY:   Cardiovascular and Thoracic Surgery

                        </div>
                   <br><br>
                          
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                     <span><a href="booking.php">Book Now</a></span>                       								<span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
               <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiac Anaesthesiology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Lt. Col. 			(Retd) Dr. Md. Hamidur Rahman</h4>
                       
                        <div class="card-text text-center">
                           MBBS, FCPS
			Head of the Department & Senior Consultant
				email:  hamid@ibrahimcardiac.org.bd



                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="Booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" 			alt="card_logo"> </span>
  		</div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. 			Mohammad Liaquat Ali</h4>
                       
                        <div class="card-text text-center">
                           MBBS, FCPS, MRCP (UK)
Senior Consultant & Professor
email: drliaquat@ibrahimcardiac.org.bd , drliaquat2010@yahoo.com
SPECIALITY:   Interventional Cardiology


                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="Booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. M Maksumul Haq</h4>
                       
                        <div class="card-text text-center">
                       MBBS (DMC), FCPS (BD), FACC (USA), FRCP (Edin)
Head of the Department & Senior Consultant
email: haq@ibrahimcardiac.org.bd

    
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="Booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            
               <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Radiology & Imaging</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">
Prof. Dr. Masoom Siraj
</h4>
                       
                        <div class="card-text text-center">
                       MBBS, FRCS
Head of the Department & Senior Consultant
email: siraj@ibrahimcardiac.org.bd

     

                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                      <span><a href="Booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
              <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiac Surgery</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof. Dr. M. H. Millat</h4>
                       
                        <div class="card-text text-center">
                        MBBS, FRCS (Edin)
Senior Consultant
email: mhmillat@ibrahimcardiac.org.bd
SPECAILTY: Cardiothoracic Surgeon

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="Booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
            <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;">Prof Lt. Col. (Retd) Dr. Md. Rezaul Karim</h4>
                       
                        <div class="card-text text-center">
                      MBBS, FCPS, FRCP, FACC
Senior Consultant
email: reza@ibrahimcardiac.org.bd


 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                        <span><a href="Booking.php">Book Now</a></span>
                       <span class="float-right rightone"></span>
                    </div>
                </div>
            </div>
                
<!--                          -->
            
             <!--                       -->  
            
            
                 <div class="col-md-6 col-lg-3">
                 <div class="card">
                     <div class="card-header card_custom_header2 text-center">
                     <span>Cardiac Anaesthesiology</span><span class="card_img"> <img src="img/card_logo1.png" class="imh-fluid" alt="card_logo"> </span>
  </div>
                    <img class="card-img-top" src="img/Male_Doctor.png">
                    <div class="card-block">
                        <figure class="profile">
                            <img src="img/price2.png" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title2 text-center mt-3 custom_last" style="color: #56d47e !important;"> Dr. Md. Sirajul Islam</h4>
                       
                        <div class="card-text text-center">
                    MBBS (DU), DA (DU), MD (BSMMU)
Professor & Sr. Consultant

 
                        </div>
                    </div>
                    <div class="card-footer text-center">
                       <span class="float-left leftone"></span>
                       <span><a href="Booking.php">Book Now</a></span>
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
                       
                       <span><a href="booking.php">Book Now</a></span>
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
