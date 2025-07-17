<?php

require 'dbconn/dbconn.php';
session_start();

if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) && (isset($_SESSION['ROLE']) && $_SESSION['ROLE'] == true)) {
  $loggedin = true;
  $_SESSION['loggedin'] = true;
  $_SESSION['ROLE'] = true;
  $admin = true;
  $welcome = $_SESSION['username'];
} else {
  header("location: login.php");
}


?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>admin</title>
</head>

<body>
  <?php require 'nav/nav.php' ?>


 


  <div class="col">
    <div id="additem" class="container ">
      <h1 class="text-center ">Add product </h1>
      <form action="" method="POST" enctype="multipart/form-data" class="my-2">

        <label for="image"> Select Image To Upload:</label>
        <input  class="form-control"  type="file" name="userfile" id="file" require /><br>

        <label for="name"> Item  Name:</label>
        <input  class="form-control"  type="text" name="name" id="name" require /><br>

        <label for="region">Choose a Region:</label>
        <select id="cars" name="region" require>
          <option value="west-bengal">west-bengal</option>
          <option value="orissa">orissa</option>
          <option value="bihar">bihar</option>
          <option value="chattisgarh">chhattisgarh</option>
          <option value="tamil-nadu">tamil-nadu</option>
          <option value="madhya-pradesh">madhya-pradesh</option>
          <option value="gujrat">gujrat</option>
          <option value="goa">goa</option>
          <option value="arunachal-pradesh">arunachal-pradesh</option>
          <option value="haryana">haryana</option>
          <option value="chandigarh">chandigarh</option>
          <option value="himanchal-pradesh">himanchal-pradesh</option>
          <option value="jammu-kashmir">jammu-kashmir</option>
          <option value="kerala">kerala</option>
          <option value="karnataka">karnataka</option>
          <option value="maharashtra">maharashtra</option>
          <option value="assam">assam</option>
          <option value="andhara-pradesh">andhara-pradesh</option>
          <option value="punjab">punjab</option>
          <option value="rajasthan">rajasthan</option>
          <option value="uttarpradesh">uttarpradesh</option>
          <option value="uttaranchal">uttaranchal</option>
          <option value="jharkhand">jharkhand</option>
        </select><br>

        <label for="mealtime">Choose a Meal Time:</label>
        <select id="mealtime" name="mealtime" require>
          <option value="Breakfast">Breakfast</option>
          <option value="Lunch">Lunch</option>
          <option value="Diner">Diner</option>
        </select><br>

        <label for="mealtime">Choose a Meal Type:</label>
        <select id="mealtime" name="mealtype" require>
          <option value="sweets">sweets</option>
          <option value="maincourse">maincourse</option>
          <option value="snacks">snacks</option>
        </select><br>
       <label for="l1"> Recepie link:</label><input  class="form-control"  type="text" name="getrecepies" /><br>
       <label for="l2">  Order Food link:</label> <input  class="form-control"  type="text" name="orderfood" /><br>



        <?php
        error_reporting(0);
        if ($_POST["submit"]) {
          $name = $_POST['name'];
          $reg = $_POST['region'];
          $mtime = $_POST['mealtime'];
          $mtype = $_POST['mealtype'];
          $l1 = $_POST['getrecepies'];
          $l2 = $_POST['orderfood'];

          $filename = $_FILES["userfile"]["name"];
          $tempname = $_FILES["userfile"]["tmp_name"];
          $folder = "cart/" . $filename;
          move_uploaded_file($tempname, $folder);

          if ($name != "" && $filename != "") {
            $query = "INSERT INTO `products`( `image`, `name`, `region`, `get-recepies`, `orderfood`, `mealtime`, `mealtype`) 
        VALUES ('$folder','$name','$reg','$l1','$l2','$mtime','$mtype')";
            $data = mysqli_query($conn, $query);
            if ($data) {
              echo 'data inserted enter next data  <br>
            enter next data';
            }
          } else {
            echo " name or image are required";
          }
        }

        ?>


        <input type="submit" value="submit" name="submit" class="btn btn-danger" />
      </form>



    </div>
  </div>
<hr><hr>

<section>
  <div class="col">
    <div id="deleteitem" class="container ">
    <h1 class="text-center ">Remove Product </h1>
<?php
$dprod = "SELECT * FROM products  order by id desc ";

$dprodrun = mysqli_query($conn, $dprod);

$nump = mysqli_num_rows($dprodrun);


?>
        <div id="t1" class="container-fluid">

        <table class="table" >
          <caption>this is a tabel to removing products </caption>
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">Region</th>
      <th scope="col">Details</th>
      <th scope="col">Delete</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
  while ($product = mysqli_fetch_array($dprodrun)) {
      ?>
    <tr>
      <th scope="row"><?php echo $product['id']?></th>
      <td><img src="<?php echo $product['image'] ?>" class="img-fluid" style="height:5vh; width:auto;" alt="<?php echo $product['image'] ?>"></td>
      <td><?php echo $product['name'] ?></td>
      <td><?php echo $product['region'] ?></td>
      <td><details class="btn btn-info">

      <div id="shade" class="card mb-4 box-shadow rounded">
            
            <img class="card-img-top img-fluid" 
            alt="<?php echo $product['name'] ?> img " style="height:auto; width:auto; display: block;"
            src="<?php echo $product['image']  ?>" data-holder-rendered="true">
        
            <div class="card-body">
                <a href="ritem.php?id=<?php echo $product['id']?>" id="remove" class="text-center"  ><em class="fas fa-trash-alt"></em></a>
               <h4 class="text-center cart-title my-2"style="color:black;"><?php  echo $product['name']  ?></h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="container text-center">
                        <button type="button" class=" btn btn-warning  m-1 rounded btn-sm "> <a style="text-decoration:none; color:black;" href="<?php echo $product['get-recepies']?>"> Get Recepies </a> </button>
                        <button type="button" class=" btn btn-danger m-1 rounded btn-sm "> <a style="text-decoration:none; color:black;" href="<?php echo $product['orderfood']?>"> Order Now </a> </button>
                    </div>
                </div>
            </div>
            <div class="bottom"></div>
        </div>

      </details></td>
      <td><a href="ritem.php?id=<?php echo $product['id']?>"><em class="fas fa-trash-alt"></em></a></td>
    </tr>
    <?php
  } ?>
  </tbody>
  <tbody>
    <th scope="col">total items:</th>
    <th scope="col"><?php echo $nump?></th>
</tbody>
        </table>
        </div>

    </div>
  </div>
  </section>

<hr><hr>



<section>
  <div class="col">
    <div id="users" class="container ">
    <h1 class="text-center ">Users Toggle</h1>
<?php
$udet = "SELECT `Sno`, `Username`, `Email`, `Phone`, `role` FROM `hungry-peoples`";

$udetrun = mysqli_query($conn, $udet);

$numu = mysqli_num_rows($udetrun);


?>
        <div id="t1" class="container-fluid">

        <table class="table" >
          <caption>this is a tabel to see users </caption>
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Role</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
  while ($u = mysqli_fetch_array($udetrun)) {
    
    ?>
    <tr>
      <th scope="row"><?php echo $u['Sno']?></th>
      <td><?php echo $u['Username'] ?></td>
      <td><?php echo $u['Email'] ?></td>
      <td><?php echo $u['Phone'] ?></td>
      <td><?php  
if($u['role'] == 1){
  ?>

 <a href="usermg.php?id=<?php echo $u['Sno'] ?> & rl=ad " ><button class="btn-md btn-success rounded border"style="font-style: oblique; font-weight:900;">Admin</button></a>
  <?php
}
    
else{
  ?>
 <a href="usermg.php?id=<?php echo $u['Sno'] ?> & rl=ur " ><button class="btn-md btn-danger rounded border"style="font-style: oblique; font-weight:900;">User</button></a>
  <?php
}
?>    
    </td>

    </tr>
    <?php
  } ?>
  </tbody>
  <tbody>
    <th scope="col">total users:</th>
    <th scope="col"><?php echo $numu?></th>
</tbody>
        </table>
        </div>

    </div>
  </div>
  </section>

<hr><hr>


  <div id="rmenu">
    <div class="dropdown text-center" data-toggle="collapse" data-target="#collapseOne" ><em class="fas fa-chevron-circle-down"></em></div>
    <div class="row collapse" id="collapseOne">
      <ul>
        <li class="btn-lg btn-info my-3" style="color: black; font-weight:900;">WELCOME <?php echo  $_SESSION['username'] ?><span class="sr-only">(current)</span></li>
        <li class="btn-lg btn-info my-3"> <a href="#additem" style="text-decoration: none; color:white; "> ADD Items </a></li>
        <li class="btn-lg btn-info my-3"> <a href="#deleteitem" style="text-decoration: none; color:white; "> Remove items </a></li>
        <li class="btn-lg btn-info my-3"> <a href="#users" style="text-decoration: none; color:white; "> Users </a></li>
      </ul>
    </div>
  </div>







  <?php require 'footer/footer.php' ?>
  <?php require 'footer/btt.php' ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>

  #rmenu{
   
  position: fixed;
  top: 30%;
  left: 10px;
  z-index: 99;
  border: none;
  outline: none;
 
  color: greenyellow;
  cursor: pointer;

  }
  #rmenu .dropdown{
    font-size: 2rem;
  }
  #rmenu ul{
    list-style: none;
  }

  #t1{
    overflow-x: scroll ;
  }
  h1{
    font-weight: bolder;
    color-adjust: black;
  }
  label{
    font-weight: 900;
    font-size: 1.1rem;
  }
</style>

</body>

</html>