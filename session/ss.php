<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
   
    $_SESSION['loggedin'] = true;
      
}
?>