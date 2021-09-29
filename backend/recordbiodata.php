<?php
include "../controller/conf.php";

	//collect posted data from javascript
	$firstname = mysqli_real_escape_string($con,$_POST['firstname']);  
	$othername = mysqli_real_escape_string($con,$_POST['othername']);  
	$lastname = mysqli_real_escape_string($con,$_POST['lastname']);  
	$gender = mysqli_real_escape_string($con,$_POST['gender']);  
	$dateofbirth = mysqli_real_escape_string($con,$_POST['dob']);  
    $acctnum = $_SESSION['uniqueid'];
    $uip =  $_SERVER['REMOTE_ADDR'];
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    $sql= "UPDATE hkusers 
    SET firstname = '$firstname' ,
     othername = '$othername' ,
     lastname = '$lastname' ,
     gender = '$gender' ,
     dateofbirth = '$dateofbirth' 
    where userid = '$acctnum' ";
    if(mysqli_query($con, $sql)){
    

    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
     VALUES ('$acctnum','$url', 'Bio-data Modification', 1, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="fas fa-check-double"></i></div>
               <div class="alert-body">
                   <div class="alert-title">Success</div>
                   <button class="close" data-dismiss="alert">
                             <span>&times;</span>
                           </button>
                   Successfully updated Your bio-data records
                </div>
       </div>';
        }
        else{
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
     VALUES ('$acctnum','$url', 'Bio-data Modification',0, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="
            far fa-hand-paper"></i></div>
            <div class="alert-body">
              <div class="alert-title">Error</div>
              Unable to modify bio-data records. Try again!
            </div>
          </div>';
        }

?>