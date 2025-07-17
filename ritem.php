<?php
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
$sql = "DELETE FROM products WHERE id = '$id'";

if($admin){
$sqlrun = mysqli_query($conn , $sql);

header('location:admin.php?rid=removed');
 
}else{
header('location:admin.php?rid=no');
  die;
}


?>