<?php
session_start();
error_reporting(0);
$se_admin=$_SESSION['admin'];
if($se_admin==false){
    header('location:login1.php');
}
unset($_SESSION['admin']);
header('location:login1.php');
?>  
