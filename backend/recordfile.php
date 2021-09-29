<?php
include "../controller/conf.php";


$fileTmpPath = $_FILES['passport']['tmp_name'];
$fileName = $_FILES['passport']['name'];
$fileSize = $_FILES['passport']['size'];
$fileType = $_FILES['passport']['type'];
$fileNameCmps = explode(".", $fileName);
$fileExtension = strtolower(end($fileNameCmps));
$acctnum = $_SESSION['uniqueid'];
$uip =  $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
 // sanitize file-name
$neoFileName = "passport-".$acctnum.".jpg";
 
// check if file has one of the following extensions
$allowedfileExtensions = array('jpg','jpeg','png');

if (in_array($fileExtension, $allowedfileExtensions))
{
  // directory in which the uploaded file will be moved
  $uploadFileDir = '../resources/passport/';
  $dest_path = $uploadFileDir . $neoFileName;

  if(move_uploaded_file($fileTmpPath, $dest_path)) 
  {

   

    $sql = "SELECT count('userid') FROM `hkfiles` WHERE userid  = '$acctnum'";
			$result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $count = "$row[0]";

        if($count == 1){


    $sql= "UPDATE `hkfiles`
    SET passport = '$neoFileName' 
   
    where userid = '$acctnum' ";
    if(mysqli_query($con, $sql)){
    

    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
     VALUES ('$acctnum','$url', 'Investor Passport Modified', 1, '$uip')";
		if(mysqli_query($con, $sql)){
        }
        $feedback =  '<div class="alert alert-success alert-has-icon">
            <div class="alert-icon"><i class="fas fa-check-double"></i></div>
               <div class="alert-body">
                   <div class="alert-title">Success</div>
                   <button class="close" data-dismiss="alert">
                             <span>&times;</span>
                           </button>
                   Successfully uploaded passport photograph
                </div>
       </div>';
        }
        else{
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
     VALUES ('$acctnum','$url', 'Investor Passport Modified', 0, '$uip')";
		if(mysqli_query($con, $sql)){
        }
           $feedback = '<div class="alert alert-danger alert-has-icon">
            <div class="alert-icon"><i class="
            far fa-hand-paper"></i></div>
            <div class="alert-body">
              <div class="alert-title">Error</div>
              Unable to passport photograph. Try again!
            </div>
          </div>';
        }
        }
        else{
            $sql= "INSERT INTO `hkfiles` 
           ( passport, userid )
           VALUES ('$neoFileName' , '$acctnum') ";
            if(mysqli_query($con, $sql)){
                //record activity
            $sql= "INSERT INTO  activities (userid, act_page, activity, act_status, ip)  
             VALUES ('$acctnum','$url', 'Investor Passport Modified', 1, '$uip')";
                if(mysqli_query($con, $sql)){
                }
                $feedback = '<div class="alert alert-success alert-has-icon">
                    <div class="alert-icon"><i class="fas fa-check-double"></i></div>
                       <div class="alert-body">
                           <div class="alert-title">Success</div>
                           <button class="close" data-dismiss="alert">
                                     <span>&times;</span>
                                   </button>
                           Successfully uploaded passport photograph
                        </div>
               </div>';
                }
                else{
                    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
             VALUES ('$acctnum','$url', 'Investor Passport Modified', 0, '$uip')";
                if(mysqli_query($con, $sql)){
                }
                $feedback =  '<div class="alert alert-danger alert-has-icon">
                    <div class="alert-icon"><i class="
                    far fa-hand-paper"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Error</div>
                      Unable to upload passport photograph. Try again!
                    </div>
                  </div>';
                }
            
        }
    }
    else{
        $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
 VALUES ('$acctnum','$url', 'Investor Passport Modified', 0, '$uip')";
    if(mysqli_query($con, $sql)){
    }
    $feedback =  '<div class="alert alert-danger alert-has-icon">
        <div class="alert-icon"><i class="
        far fa-hand-paper"></i></div>
        <div class="alert-body">
          <div class="alert-title">Error</div>
          Unable to upload passport photograph due to network error. Try again!
        </div>
      </div>';
    }
}
else{
    $sql= "INSERT INTO  activities (userid, act_page, activity, act_status,ip)  
VALUES ('$acctnum','$url', 'Investor Passport Modified', 0, '$uip')";
if(mysqli_query($con, $sql)){
}
$feedback =  '<div class="alert alert-danger alert-has-icon">
    <div class="alert-icon"><i class="
    far fa-hand-paper"></i></div>
    <div class="alert-body">
      <div class="alert-title">Danger</div>
     Picture format can only be JPG, JPEG or PNG. Try again!
    </div>
  </div>';
}
$_SESSION['acctinfo'] = $feedback;
header("Location: ../pages/profile.php");
?>