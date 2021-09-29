<?php
include "../controller/conf.php";
// logout
session_unset();
session_destroy();

header('Location: ../index.html');
?>