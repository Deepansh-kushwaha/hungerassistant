

      <?php
      require 'session/ssr.php';
       
      require 'dbconn/dbconn.php';
      $redirect_link= $_REQUEST['page_url'];
      

error_reporting(0);

      ?>      

          <?php
            $c_id = $_SESSION['email'];
            $p_id = $_GET['id'];



            $existSql = "SELECT * FROM `wishlist` WHERE pid = '$p_id' AND  cid = '$c_id'";
            $result = mysqli_query($conn, $existSql); 
            $numExistRows = mysqli_num_rows($result);
            if($numExistRows == 1){
         
                
                    header("location: wishlist.php?id=already ");
            }
              else{
               $query ="INSERT INTO `wishlist`( `pid`, `cid`) VALUES ('$p_id','$c_id')";

            if(mysqli_query($conn, $query)){
              
                  header("location: wishlist.php?id=added ");
              
            }
        } 

          ?>



<?php


  