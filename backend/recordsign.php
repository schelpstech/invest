<?php
include "../controller/conf.php";

	//collect posted data from javascript
	$fullname = mysqli_real_escape_string($con,$_POST['fullname']);  
	$relationship = mysqli_real_escape_string($con,$_POST['relationship']);  
	$address = mysqli_real_escape_string($con,$_POST['address']);  
	$phone = mysqli_real_escape_string($con,$_POST['signphone']); 
   
    $acctnum = $_SESSION['uniqueid'];
    $uip =  $_SERVER['REMOTE_ADDR'];
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    
    //check if record exist in hksignificant table

    $sql = "SELECT count('userid') FROM `hksignificant` WHERE userid  = '$acctnum'";
			$result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $count = "$row[0]";

        if($count == 1){


    $sql= "UPDATE `hksignificant` 
    SET fullname = '$fullname' ,
     `address` = '$address' ,
     relationship = '$relationship' ,
     phonenumber = '$phone'  
    where userid = '$acctnum' ";
    if(mysqli_query($con, $sql)){
    

    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
     VALUES ('$acctnum','$url', 'Significant Other Modification', 1, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="fas fa-check-double"></i></div>
               <div class="alert-body">
                   <div class="alert-title">Success</div>
                   <button class="close" data-dismiss="alert">
                             <span>&times;</span>
                           </button>
                   Successfully updated Your Significant other information
                </div>
       </div>';
        }
        else{
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
     VALUES ('$acctnum','$url', 'Significant Other Modification', 0, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="
            far fa-hand-paper"></i></div>
            <div class="alert-body">
              <div class="alert-title">Danger</div>
              Unable to Modify Significant other information. Try again!
            </div>
          </div>';
        }
        }
        else{
            $sql= "INSERT INTO `hksignificant` 
           ( fullname, `address`,  relationship, phonenumber, userid )
           VALUES ('$fullname' , '$address' ,'$relationship' , '$phone' ,'$acctnum') ";
            if(mysqli_query($con, $sql)){
                //record activity
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
             VALUES ('$acctnum','$url', 'Significant Other Recording', 1, '$uip')";
                if(mysqli_query($con, $sql)){
                }
                    echo '<div class="alert alert-success alert-has-icon">
                    <div class="alert-icon"><i class="fas fa-check-double"></i></div>
                       <div class="alert-body">
                           <div class="alert-title">Success</div>
                           <button class="close" data-dismiss="alert">
                                     <span>&times;</span>
                                   </button>
                           Successfully added Your Significant other information
                        </div>
               </div>';
                }
                else{
                    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
             VALUES ('$acctnum','$url', 'Significant Other Recording', 0, '$uip')";
                if(mysqli_query($con, $sql)){
                }
                    echo '<div class="alert alert-danger alert-has-icon">
                    <div class="alert-icon"><i class="
                    far fa-hand-paper"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Danger</div>
                      Unable to add Significant other information. Try again!
                    </div>
                  </div>';
                }
            
        }

?>