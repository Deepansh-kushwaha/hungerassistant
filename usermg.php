<<?php
require 'dbconn/dbconn.php';
session_start();

if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) && (isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == true)) {
  $loggedin = true;
  $admin = true;
  $_SESSION['loggedin'] = true;
  $_SESSION['ROLE'] = true;
} else {
  header("location: login.php");
}


?>


<?php 
$id = $_GET['id'];
$ro = $_GET['rl'];

if($ro != 'ad'){
    $sql = "UPDATE `hungry-peoples` SET `role`='1' WHERE Sno = $id";
$sqlrun = mysqli_query($conn , $sql);

header('location:admin.php?rid=ad');
 
}else{
    $sql = "UPDATE `hungry-peoples` SET `role`='0' WHERE Sno = $id";
    $sqlrun = mysqli_query($conn , $sql);
header('location:admin.php?rid=ur');
  die;
}


?>