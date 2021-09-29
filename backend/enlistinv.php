<?php
include "../controller/conf.php";

	//collect posted data from javascript
	$invname = mysqli_real_escape_string($con,$_POST['investname']);  
	$invemail = mysqli_real_escape_string($con,$_POST['investemail']); 
	$invphone = mysqli_real_escape_string($con,$_POST['investphone']);
	$invfname = mysqli_real_escape_string($con,$_POST['investfname']);  
	$invpin = mysqli_real_escape_string($con,$_POST['investpin']);

    //encrypt password
    $pin = password_hash($invpin, PASSWORD_BCRYPT);

    if($invfname !== ""){
    //generate userid
    if($invname !== ""){
     if($invemail !== ""){
        if (filter_var($invemail, FILTER_VALIDATE_EMAIL)) {
            if($invphone !== ""){
        if($invpin !== ""){
    function generateRandomString($length = 8) {
        $characters = '01234567898929191929933882';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
             $token = generateRandomString();
$userid = "inv".$token;
    $sql= "INSERT INTO  hkusers 
    (userid, firstname, lastname, passpin, phonenumber,invemail, level)  
    VALUES ('$userid','$invfname', '$invname','$pin','$invphone','$invemail',0)";
    if(mysqli_query($con, $sql)){
      
    $feedback = ' 
    <div class="alert alert-success alert-has-icon">
         <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
                <div class="alert-title">Success</div>
                <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                Investment Account Successfully Created for '.$invname." ".$invfname.'
             </div>
    </div>';

    $_SESSION['acctinfo'] = $feedback;
    header('Location: ../pages/welcome.php');
    }
    else{
      $feedback =  '
        <div class="alert alert-warning alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Error</div>
                        Unable to create investment account
                      </div>
                    </div>';
                    $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
    }
    }
    else{
       
      $feedback = '
        <div class="alert alert-warning alert-has-icon">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Error</div>
                        Password can not be empty
                      </div>
                    </div>';
                    $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
    }
}
else{
  

  $feedback =  '
    <div class="alert alert-warning alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Error</div>
                    Phone number can not be empty
                  </div>
                </div>';
                $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
}
}
else{
  

  $feedback =  '
    <div class="alert alert-warning alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Error</div>
                    <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                    Invalid Email Address
                  </div>
                </div>';
                $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
}
}
else{
  $feedback =  '
    <div class="alert alert-warning alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Error</div>
                Email Address can not be empty
                  </div>
                </div>';
                $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
}
}
else{
  $feedback = '
    <div class="alert alert-warning alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Error</div>
                    Last name can not be empty
                  </div>
                </div>';
                $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
}
}
else{
    $feedback = '
    <div class="alert alert-warning alert-has-icon">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Error</div>
                    <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                   First name can not be empty
                  </div>
                </div>';
                $_SESSION['reginfo'] = $feedback;
                header('Location: ../pages/register.php');
}

?>