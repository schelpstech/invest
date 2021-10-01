<?php
include "../controller/conf.php";

if(!empty($_GET['ref'])) {
    $txref = $_GET["ref"];  
    //validate transaction ref
	$sql = "SELECT * FROM `hktransaction` WHERE tref  = '$txref'";
			$result=mysqli_query($con,$sql);
             $row=mysqli_fetch_array($result);
                        $userid = "$row[userid]";
                        $payable = "$row[payable]";
                        $duration = "$row[duration]";
                        $slot = "$row[slots]";
                $principal = $payable - ($slot * 20);
                $startinv = date("Y-m-d");


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/".$txref."/verify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer {{FLWSECK-d3af03e26260d8f241a336984a0b60bc-X}}"
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$resp = json_decode($response, true);

$paymentstatus = $resp['data']['status'];
$transref = $resp['data']['tx_ref'];
$chargeamount = $resp['data']['amount'];

if (($paymentstatus == "success") && ($transref == $txref)  && ($chargeamount == $payable)) {
    
    $sql= "UPDATE `hktransaction` SET paystatus = 1 WHERE tref  = '$txref'";
		if(mysqli_query($con, $sql)){
		}
        $sql= "INSERT INTO  `hkinvest` 
        (userid, payref, duration, slots, principal, `start`, `status`)  
     VALUES ('$userid','$txref' ,'$duration', '$slots', '$principal','$startinv', 1)";
		if(mysqli_query($con, $sql)){	


        $_SESSION['tref'] = $txref;
          header("Location: ../pages/payreceipt.php");
    }
}
else{
    $sql= "UPDATE `hktransaction` SET paystatus = 2 WHERE tref  = '$txref'";
		if(mysqli_query($con, $sql)){
		}

$_SESSION['acctinfo'] =  $feedback = ' 
<div class="alert alert-warning alert-has-icon">
     <div class="alert-icon"><i class="
     far fa-hand-paper"></i></div>
        <div class="alert-body">
            <div class="alert-title">Ooops!</div>
            <button class="close" data-dismiss="alert">
                      <span>&times;</span>
                    </button>
           Sorry! Your Payment Failed. Do try again!'.$txref.'
         </div>
</div>';
          header("Location: ../pages/pricing.php");
    }
}
else{
    $sql= "UPDATE `hktransaction` SET status = 2 WHERE tref  = '$txref'";
		if(mysqli_query($con, $sql)){
		}

$_SESSION['acctinfo'] =  $feedback = ' 
<div class="alert alert-warning alert-has-icon">
     <div class="alert-icon"><i class="
     far fa-hand-paper"></i></div>
        <div class="alert-body">
            <div class="alert-title">Ooops!</div>
            <button class="close" data-dismiss="alert">
                      <span>&times;</span>
                    </button>
           Sorry! Your Payment record was not found
         </div>
</div>';
          header("Location: ../pages/pricing.php");
    }