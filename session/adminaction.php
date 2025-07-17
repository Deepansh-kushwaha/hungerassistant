<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $reg = $_POST['region'];
    $mtime = $_POST['mealtime'];
    $mtype = $_POST['mealtype'];
    $l1 = $_POST['getrecepies'];
    $l2 = $_POST['orderfood'];

    $filename = $_FILES["userfile"]["name"];
    $tempname = $_FILES["userfile"]["tmp_name"];
    $folder = "cart/".$filename;
    
    if($name!="" && $filename!=""){
        move_uploaded_file($tempname, $folder);
        $query = "INSERT INTO `products`( `image`, `name`, `region`, `get-recepies`, `orderfood`, `mealtime`, `mealtype`) 
        VALUES ('$folder','$name','$reg','$l1','$l2','$mtime','$mtype')";
        $data = mysqli_query($conn , $query);
        if($data){
            echo "Data inserted ";
            
        }
    } 
    else{
        echo " name or image are required";
    }   

}

?>