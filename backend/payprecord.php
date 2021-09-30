<?php
include "../controller/conf.php";

	//collect posted data from javascript
	$payable = mysqli_real_escape_string($con,$_POST['payable']);  
	$duration = mysqli_real_escape_string($con,$_POST['duration']);  
	$numslots = mysqli_real_escape_string($con,$_POST['numslots']);  
	$tref = mysqli_real_escape_string($con,$_POST['tref']);  
	$dateofbirth = mysqli_real_escape_string($con,$_POST['dob']);  
    $acctnum = $_SESSION['uniqueid'];
    $uip =  $_SERVER['REMOTE_ADDR'];
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    $start= date("Y-m-d h:i:s");
   
   
   $sql= "INSERT INTO  `hktransaction` (userid, payable, duration, slots, rectime, tref, paystatus)  
    VALUES ('$acctnum','$payable', '$duration','$numslots','$start','$tref',0)";
    if(mysqli_query($con, $sql)){
    

    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
     VALUES ('$acctnum','$url', 'Payment Initiated', 1, '$uip')";
		if(mysqli_query($con, $sql)){
        }
            echo 'alert("Proceed to Pay")';
        }
        else{
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
     VALUES ('$acctnum','$url', 'Payment Initiated',0, '$uip')";
		if(mysqli_query($con, $sql)){
        }
        echo 'alert("Proceed to Pay")';
        }

?>