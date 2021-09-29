<?php
include "../controller/conf.php";

	//collect posted data from javascript
	$email = mysqli_real_escape_string($con,$_POST['email']);  
	$phone = mysqli_real_escape_string($con,$_POST['phone']);  
	$fullad = mysqli_real_escape_string($con,$_POST['fulladd']);  
	$country = mysqli_real_escape_string($con,$_POST['country']);  
	$state = mysqli_real_escape_string($con,$_POST['state']);  
	$lga = mysqli_real_escape_string($con,$_POST['lga']);  
   
    $acctnum = $_SESSION['uniqueid'];
    $uip =  $_SERVER['REMOTE_ADDR'];
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    
    
    $sql= "UPDATE hkusers 
    SET invemail = '$email' ,
     phonenumber = '$phone' ,
     fulladress = '$fullad' ,
     country = '$country' ,
     `state` = '$state' ,
     lga = '$lga' 
    where userid = '$acctnum' ";
    if(mysqli_query($con, $sql)){
    

    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
     VALUES ('$acctnum','$url', 'Contact Info Modification', 1, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="fas fa-check-double"></i></div>
               <div class="alert-body">
                   <div class="alert-title">Success</div>
                   <button class="close" data-dismiss="alert">
                             <span>&times;</span>
                           </button>
                   Successfully updated Your Contact Information records
                </div>
       </div>';
        }
        else{
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
     VALUES ('$acctnum','$url', 'Contact Info Modification', 0, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="
            far fa-hand-paper"></i></div>
            <div class="alert-body">
              <div class="alert-title">Danger</div>
              Unable to Modify Contact information. Try again!
            </div>
          </div>';
        }

?>