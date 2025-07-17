

      <?php
      require 'session/ssr.php';
       
      require 'dbconn/dbconn.php';
      

error_reporting(0);

      ?>      
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>wish list</title>
  </head>
  <body>
      <?php require 'nav/nav.php' ?>




      <div id="hero" class="container-fluid d-flex justify-content-center align-items-center p-0">
        <div class="container d-flex justify-content-center align-items-center">
            <h1 class="text-center">Your Food Items</h1>
        </div>
    </div>

    <?php
    $id = $_GET['id'];
      if($id == 'already'){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Great!</strong>  Item already exist
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
    $id = $_GET['id'];
      if($id == 'added'){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Great!</strong>  Item Added
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
      

    ?>

    <div id="card" class="container my-5">
        
    <div class="row">

<?php

$cid = $_SESSION['email'];

$query1 = "SELECT * FROM wishlist JOIN products on products.id = wishlist.pid and wishlist.cid = '$cid'";

$query1run = mysqli_query($conn, $query1);

$num = mysqli_num_rows($query1run);

if($num > 0){
     while($product = mysqli_fetch_array($query1run)){
        ?>
        <div class="col-sm-12 col-md-4 col-lg-4">
        <div id="shade" class="card mb-4 box-shadow rounded">
            
            <img class="card-img-top img-fluid" 
            alt="<?php echo $product['name'] ?> img " style="height: 287px; width: auto; display: block;"
            src="<?php echo $product['image']  ?>" data-holder-rendered="true">
        
            <div class="card-body">
                <a href="delete.php?id=<?php echo $product['pid']; ?>"id="remove" class="text-center"  ><em class="fas fa-trash-alt"></em></a>
               <h4 class="text-center cart-title my-2"><?php  echo $product['name']  ?></h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="container text-center">
                        <button type="button" class=" btn btn-warning  m-1 rounded btn-sm "> <a style="text-decoration:none; color:black;" href="<?php echo $product['get-recepies']?>"> Get Recepies </a> </button>
                        <button type="button" class=" btn btn-danger m-1 rounded btn-sm "> <a style="text-decoration:none; color:black;" href="<?php echo $product['orderfood']?>"> Order Now </a> </button>
                    </div>
                </div>
            </div>
            <div class="bottom"></div>
        </div>
    </div>

<?php

     }
}
else{
    $showerr= "Your wishlist is so empty and to light ";
}



?>
</div>

        
    </div>

    <div class="col-sm-12 col-md-6 col-lg-7">
<?php
    if($showerr){
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error!</strong>  '. $showerr.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
    </div>

    <?php require 'footer/footer.php' ?>
    <?php require 'footer/btt.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
#hero h1{
    color: #e0f542;
    text-shadow: -4px 2px black;
    text-decoration: underline;
    font-style: oblique;
    font-weight: 900;
}

#remove{
    top: 0%;
    position: absolute;
    right: 1%;
    opacity: 0.9;
    background-color: #383736;
    font-size: large;
    height: 1.7rem ;
    width: 1.7rem;
    color: #e6e6e6;
}


.bottom{
    height: 6px;
    background-color: #77e2e1;
}
    </style>
  </body>
</html>