<?php
include "../controller/conf.php";

	//collect posted data from javascript
	$acctnumber = mysqli_real_escape_string($con,$_POST['acctnum']);  
	$acct = mysqli_real_escape_string($con,$_POST['acct']);  
	$bank = mysqli_real_escape_string($con,$_POST['bank']);  
   
    $acctnum = $_SESSION['uniqueid'];
    $uip =  $_SERVER['REMOTE_ADDR'];
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    
    //check if record exist in hksignificant table

    $sql = "SELECT count('userid') FROM `hkacctinfo` WHERE userid  = '$acctnum'";
			$result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $count = "$row[0]";

        if($count == 1){


    $sql= "UPDATE `hkacctinfo`
    SET acctbank = '$bank' ,
     `acctname` = '$acct' ,
     acctnum = '$acctnumber'  
    where userid = '$acctnum' ";
    if(mysqli_query($con, $sql)){
    

    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
     VALUES ('$acctnum','$url', 'Withdrawal Account Details', 1, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="fas fa-check-double"></i></div>
               <div class="alert-body">
                   <div class="alert-title">Success</div>
                   <button class="close" data-dismiss="alert">
                             <span>&times;</span>
                           </button>
                   Successfully updated your withdrawal account details
                </div>
       </div>';
        }
        else{
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
     VALUES ('$acctnum','$url', 'Withdrawal Account Details Modification', 0, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo '<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="
            far fa-hand-paper"></i></div>
            <div class="alert-body">
              <div class="alert-title">Danger</div>
              Unable to Modify your withdrawal account details. Try again!
            </div>
          </div>';
        }
        }
        else{
            $sql= "INSERT INTO `hkacctinfo` 
           ( acctbank, acctname, acctnum, userid )
           VALUES ('$bank' , '$acct' ,'$acctnumber', '$acctnum') ";
            if(mysqli_query($con, $sql)){
                //record activity
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
             VALUES ('$acctnum','$url', 'Withdrawal Account Details', 1, '$uip')";
                if(mysqli_query($con, $sql)){
                }
                    echo '<div class="alert alert-success alert-has-icon">
                    <div class="alert-icon"><i class="fas fa-check-double"></i></div>
                       <div class="alert-body">
                           <div class="alert-title">Success</div>
                           <button class="close" data-dismiss="alert">
                                     <span>&times;</span>
                                   </button>
                           Successfully added your withdrawal account details
                        </div>
               </div>';
                }
                else{
                    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
             VALUES ('$acctnum','$url', 'Withdrawal Account Details', 0, '$uip')";
                if(mysqli_query($con, $sql)){
                }
                    echo '<div class="alert alert-danger alert-has-icon">
                    <div class="alert-icon"><i class="
                    far fa-hand-paper"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Danger</div>
                      Unable to add your withdrawal account details. Try again!
                    </div>
                  </div>';
                }
            
        }

?>