<?php
$sdate = "1981-11-04";
$edate = "2013-09-04";

$date_diff = abs(strtotime($edate) - strtotime($sdate));

$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days", $years, $months, $days);
printf("\n");
?>