<?php
include "../controller/conf.php";

if(!isset($_SESSION['uniqueid'])){
  header('Location: ../index.html');
}

if(isset($_SESSION['uniqueid']) && isset($_SESSION['token'])){
$id = $_SESSION['uniqueid'];
$token = $_SESSION['token'];

$sql ="SELECT * from hklog where email = '$id' and token = '$token'";
$result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  $status = $row['status'];
$yes = 1;
if($yes != $status){ 
header('Location: ../index.html');
}

}
else {
header('Location: ../index.html');
}


$sql ="SELECT * from hkusers where userid = '$id'";
	$result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

   if( $row['firstname'] !== "" ) {
    $fname = $row['firstname'];
}
else {
    $fname = "";
}
if( $row['lastname'] !== "" ) {
    $lname = $row['lastname'];
}
else {
    $lname = "";
}

if( $row['othername'] !== "" ) {
    $oname = $row['othername'];
}
else {
    $oname = "";
}
if( $row['gender'] !== "" ) {
    $gender = $row['gender'];
}
else {
    $gender = "";
}

if( $row['dateofbirth'] !== "" ) {
    $dateofbirth = $row['dateofbirth'];
}
else {
    $dateofbirth = "";
}

if( $row['invemail'] !== "" ) {
    $emailadd = $row['invemail'];
}
else {
    $emailadd = "";
}

if( $row['phonenumber'] !== "" ) {
    $phonenum = $row['phonenumber'];
}
else {
    $phonenum = "";
}
if( $row['fulladress'] !== "" ) {
    $fulladd = $row['fulladress'];
}
else {
    $fulladd = "";
}

if( $row['country'] !== "" ) {
    $country = $row['country'];
}
else {
    $country = "";
}

if( $row['state'] !== "" ) {
    $state = $row['state'];
}
else {
    $state = "";
}

if( $row['lga'] !== "" ) {
    $lga = $row['lga'];
}
else {
    $lga = "";
}
//significant other lookup
$sql ="SELECT * from `hksignificant` where userid = '$id'";
	$result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

   if( !empty($row['fullname'])) {
    $signname = $row['fullname'];
}
else {
    $signname = "";
}

if( !empty($row['relationship'])) {
    $signrelate = $row['relationship'];
}
else {
    $signrelate = "";
}
if( !empty($row['address'])) {
    $signadd= $row['address'];
}
else {
    $signadd = "";
}

if( !empty($row['phonenumber'])) {
    $signphone = $row['phonenumber'];
}
else {
    $signphone = "";
}

//withdrawal l lookup
$sql ="SELECT * from `hkacctinfo` where userid = '$id'";
	$result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

   if( !empty($row['acctbank'])) {
    $acctbank = $row['acctbank'];
}
else {
    $acctbank = "";
}


if( !empty($row['acctnum'])) {
    $num = $row['acctnum'];
}
else {
    $num = "";
}


if( !empty($row['acctname'])) {
    $actname = $row['acctname'];
}
else {
    $actname = "";
}


//withdrawal l lookup
$sql ="SELECT * from `hkfiles` where userid = '$id'";
	$result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

   if( !empty($row['passport'])) {
    $img = $row['passport'];
}
else {
    $img = "auser.jpg";
}

if( !empty($row['identity'])) {
    $idcard = $row['identity'];
}
else {
    $idcard = "";
}


//verification status

if($fname !=="" & $lname !=="" & $oname !=="" & $gender !=="" & $dateofbirth !=="") {
    $a = 20;
}
if($emailadd !=="" & $phonenum !=="" & $fulladd !=="" & $country !=="" & $state !=="" & $lga !=="") {
    $b = 20;
}
if($signname !=="" & $signrelate !=="" & $signadd !=="" & $signphone !=="") {
    $c = 20;
}
if($acctbank !=="" & $actname !=="" & $num !=="") {
    $d = 20;
}
if($img !=="" & $idcard !=="") {
    $e = 20;
}

$profilescore = intval($a) + intval($b)  + intval($c)  + intval($d)  + intval($e) ;
?>
