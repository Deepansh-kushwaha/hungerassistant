<?php 
require 'session/ssr.php';
require 'dbconn/dbconn.php';
$id =$_GET['id'];
$cid = $_SESSION['email'];
    $sql = "DELETE FROM wishlist WHERE pid= '$id' AND  cid = '$cid'";

    if ($conn->query($sql) === TRUE) {
        header("Location: wishlist.php");
     } else {
         echo "Error deleting record: " . $conn->error;
     }
 
     $conn->close();


 ?>