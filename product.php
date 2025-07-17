<?php 
require 'dbconn/dbconn.php';
include 'session/ss.php';
error_reporting(0);
?>

<?php 
$id =$_GET['id'];
if($id == 'jkb'){
    $query = "SELECT * FROM products WHERE region='jammu-kashmir' AND mealtime='Breakfast'";
}
elseif($id == 'jkl'){
    $query = "SELECT * FROM products WHERE region='jammu-kashmir' AND mealtime='Lunch'"; 
}
elseif($id == 'jkd'){
    $query = "SELECT * FROM products WHERE region='jammu-kashmir' AND mealtime='Diner'"; 
}

// westbengal
elseif($id == 'wbb'){
    $query = "SELECT * FROM products WHERE region='west-bengal' AND mealtime='Breakfast'"; 
}
elseif($id == 'wbl'){
    $query = "SELECT * FROM products WHERE region='west-bengal' AND mealtime='Lunch'"; 
}
elseif($id == 'wbd'){
    $query = "SELECT * FROM products WHERE region='west-bengal' AND mealtime='Diner'"; 
}

// orissa
elseif($id == 'orb'){
    $query = "SELECT * FROM products WHERE region='orissa' AND mealtime='Breakfast'"; 
}
elseif($id == 'orl'){
    $query = "SELECT * FROM products WHERE region='orissa' AND mealtime='Lunch'"; 
}
elseif($id == 'ord'){
    $query = "SELECT * FROM products WHERE region='orissa' AND mealtime='Diner'"; 
}

// bihar
elseif($id == 'bhb'){
    $query = "SELECT * FROM products WHERE region='bihar' AND mealtime='Breakfast'"; 
}
elseif($id == 'bhl'){
    $query = "SELECT * FROM products WHERE region='bihar' AND mealtime='Lunch'"; 
}
elseif($id == 'bhd'){
    $query = "SELECT * FROM products WHERE region='bihar' AND mealtime='Diner'"; 
}

// chattisgarh
elseif($id == 'chtb'){
    $query = "SELECT * FROM products WHERE region='chattisgarh' AND mealtime='Breakfast'"; 
}
elseif($id == 'chtl'){
    $query = "SELECT * FROM products WHERE region='chattisgarh' AND mealtime='Lunch'"; 
}
elseif($id == 'chtd'){
    $query = "SELECT * FROM products WHERE region='chattisgarh' AND mealtime='Diner'"; 
}

// tamil nadu
elseif($id == 'tnb'){
    $query = "SELECT * FROM products WHERE region='tamil-nadu' AND mealtime='Breakfast'"; 
}
elseif($id == 'tnl'){
    $query = "SELECT * FROM products WHERE region='tamil-nadu' AND mealtime='Lunch'"; 
}
elseif($id == 'tnd'){
    $query = "SELECT * FROM products WHERE region='tamil-nadu' AND mealtime='Diner'"; 
}

// madhya-pradesh
elseif($id == 'mpb'){
    $query = "SELECT * FROM products WHERE region='madhya-pradesh' AND mealtime='Breakfast'"; 
}
elseif($id == 'mpl'){
    $query = "SELECT * FROM products WHERE region='madhya-pradesh' AND mealtime='Lunch'"; 
}
elseif($id == 'mpd'){
    $query = "SELECT * FROM products WHERE region='madhya-pradesh' AND mealtime='Diner'"; 
}

// gujrat
elseif($id == 'gub'){
    $query = "SELECT * FROM products WHERE region='gujrat' AND mealtime='Breakfast'"; 
}
elseif($id == 'gul'){
    $query = "SELECT * FROM products WHERE region='gujrat' AND mealtime='Lunch'"; 
}
elseif($id == 'gud'){
    $query = "SELECT * FROM products WHERE region='gujrat' AND mealtime='Diner'"; 
}

// goa
elseif($id == 'gob'){
    $query = "SELECT * FROM products WHERE region='goa' AND mealtime='Breakfast'"; 
}
elseif($id == 'gol'){
    $query = "SELECT * FROM products WHERE region='goa' AND mealtime='Lunch'"; 
}
elseif($id == 'god'){
    $query = "SELECT * FROM products WHERE region='goa' AND mealtime='Diner'"; 
}

// arunachal-pradesh
elseif($id == 'apb'){
    $query = "SELECT * FROM products WHERE region='arunachal-pradesh' AND mealtime='Breakfast'"; 
}
elseif($id == 'apl'){
    $query = "SELECT * FROM products WHERE region='arunachal-pradesh' AND mealtime='Lunch'"; 
}
elseif($id == 'apd'){
    $query = "SELECT * FROM products WHERE region='arunachal-pradesh' AND mealtime='Diner'"; 
}

// haryana
elseif($id == 'hrb'){
    $query = "SELECT * FROM products WHERE region='haryana' AND mealtime='Breakfast'"; 
}
elseif($id == 'hrl'){
    $query = "SELECT * FROM products WHERE region='haryana' AND mealtime='Lunch'"; 
}
elseif($id == 'hrd'){
    $query = "SELECT * FROM products WHERE region='haryana' AND mealtime='Diner'"; 
}

// chandigarh
elseif($id == 'chb'){
    $query = "SELECT * FROM products WHERE region='chandigarh' AND mealtime='Breakfast'"; 
}
elseif($id == 'chl'){
    $query = "SELECT * FROM products WHERE region='chandigarh' AND mealtime='Lunch'"; 
}
elseif($id == 'chd'){
    $query = "SELECT * FROM products WHERE region='chandigarh' AND mealtime='Diner'"; 
}

// himanchal-pradesh
elseif($id == 'hpb'){
    $query = "SELECT * FROM products WHERE region='himanchal-pradesh' AND mealtime='Breakfast'"; 
}
elseif($id == 'hpl'){
    $query = "SELECT * FROM products WHERE region='himanchal-pradesh' AND mealtime='Lunch'"; 
}
elseif($id == 'hpd'){
    $query = "SELECT * FROM products WHERE region='himanchal-pradesh' AND mealtime='Diner'"; 
}

// kerala
elseif($id == 'klb'){
    $query = "SELECT * FROM products WHERE region='kerala' AND mealtime='Breakfast'"; 
}
elseif($id == 'kll'){
    $query = "SELECT * FROM products WHERE region='kerala' AND mealtime='Lunch'"; 
}
elseif($id == 'kld'){
    $query = "SELECT * FROM products WHERE region='kerala' AND mealtime='Diner'"; 
}

// karnataka
elseif($id == 'krb'){
    $query = "SELECT * FROM products WHERE region='karnataka' AND mealtime='Breakfast'"; 
}
elseif($id == 'krl'){
    $query = "SELECT * FROM products WHERE region='karnataka' AND mealtime='Lunch'"; 
}
elseif($id == 'krd'){
    $query = "SELECT * FROM products WHERE region='karnataka' AND mealtime='Diner'"; 
}

// maharashtra
elseif($id == 'mhb'){
    $query = "SELECT * FROM products WHERE region='maharashtra' AND mealtime='Breakfast'"; 
}
elseif($id == 'mhl'){
    $query = "SELECT * FROM products WHERE region='maharashtra' AND mealtime='Lunch'"; 
}
elseif($id == 'mhd'){
    $query = "SELECT * FROM products WHERE region='maharashtra' AND mealtime='Diner'"; 
}

// assam
elseif($id == 'asb'){
    $query = "SELECT * FROM products WHERE region='assam' AND mealtime='Breakfast'"; 
}
elseif($id == 'asl'){
    $query = "SELECT * FROM products WHERE region='assam' AND mealtime='Lunch'"; 
}
elseif($id == 'asd'){
    $query = "SELECT * FROM products WHERE region='assam' AND mealtime='Diner'"; 
}

// andhara-pradesh
elseif($id == 'anpb'){
    $query = "SELECT * FROM products WHERE region='andhara-pradesh' AND mealtime='Breakfast'"; 
}
elseif($id == 'anpl'){
    $query = "SELECT * FROM products WHERE region='andhara-pradesh' AND mealtime='Lunch'"; 
}
elseif($id == 'anpd'){
    $query = "SELECT * FROM products WHERE region='andhara-pradesh' AND mealtime='Diner'"; 
}

// punjab
elseif($id == 'pub'){
    $query = "SELECT * FROM products WHERE region='punjab' AND mealtime='Breakfast'"; 
}
elseif($id == 'pul'){
    $query = "SELECT * FROM products WHERE region='punjab' AND mealtime='Lunch'"; 
}
elseif($id == 'pud'){
    $query = "SELECT * FROM products WHERE region='punjab' AND mealtime='Diner'"; 
}

// rajasthan
elseif($id == 'rab'){
    $query = "SELECT * FROM products WHERE region='rajasthan' AND mealtime='Breakfast'"; 
}
elseif($id == 'ral'){
    $query = "SELECT * FROM products WHERE region='rajasthan' AND mealtime='Lunch'"; 
}
elseif($id == 'rad'){
    $query = "SELECT * FROM products WHERE region='rajasthan' AND mealtime='Diner'"; 
}

// uttarpradesh
elseif($id == 'upb'){
    $query = "SELECT * FROM products WHERE region='uttarpradesh' AND mealtime='Breakfast'"; 
}
elseif($id == 'upl'){
    $query = "SELECT * FROM products WHERE region='uttarpradesh' AND mealtime='Lunch'"; 
}
elseif($id == 'upd'){
    $query = "SELECT * FROM products WHERE region='uttarpradesh' AND mealtime='Diner'"; 
}

// uttaranchal
elseif($id == 'utb'){
    $query = "SELECT * FROM products WHERE region='uttaranchal' AND mealtime='Breakfast'"; 
}
elseif($id == 'utl'){
    $query = "SELECT * FROM products WHERE region='uttaranchal' AND mealtime='Lunch'"; 
}
elseif($id == 'utd'){
    $query = "SELECT * FROM products WHERE region='uttaranchal' AND mealtime='Diner'"; 
}

// jharkhand
elseif($id == 'jhb'){
    $query = "SELECT * FROM products WHERE region='jharkhand' AND mealtime='Breakfast'"; 
}
elseif($id == 'jhl'){
    $query = "SELECT * FROM products WHERE region='jharkhand' AND mealtime='Lunch'"; 
}
elseif($id == 'jhd'){
    $query = "SELECT * FROM products WHERE region='jharkhand' AND mealtime='Diner'"; 
}
else{
    $query = "SELECT * FROM products"; 
    
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

    <title>products</title>
</head>

<body>
    <?php require 'nav/nav.php' ?>
    <div id="hero" class="container-fluid d-flex justify-content-center align-items-center p-0">
        <div class="container d-flex justify-content-center align-items-center">
            <h1 class="text-center">Delicious Food items  !yummy </h1>
        </div>
    </div>
    <div id="card" class="container my-5">
        <div class="row">
        
            <?php




$query1run = mysqli_query($conn, $query);

$num = mysqli_num_rows($query1run);

while($product = mysqli_fetch_array($query1run)){
   ?>

        
        <div class="col-sm-12 col-md-4 col-lg-4">
        <div id="shade" class="card mb-4 border rounded">
            
            <img class="card-img-top img-fluid img" 
            alt="<?php echo $product['name'] ?> img " style="height: 287px; width: 100%; display: block;"
            src="<?php echo $product['image'] ?>" data-holder-rendered="true">
        
            <div class="card-body">
                <a href="wish.php?id=<?php echo  $product['id']?>&?page_url=<?php echo $redirect_link_var?>" id="wish" class="text-center"  ><em class="fas fa-heart"></em></a>
               <h4 class="text-center cart-title my-2"><?php  echo $product['name']  ?></h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="container  d-flex justify-content-center align-items-center ">
                        <button type="button" class=" btn btn-warning   m-1 rounded btn-sm "> <a style="text-decoration:none; color:black;" href="<?php echo $product['get-recepies']?>"> Get Recepies </a> </button>
                        <button type="button" class=" btn btn-danger  m-1 rounded btn-sm "> <a style="text-decoration:none; color:black;" href="<?php echo $product['orderfood']?>"> Order Now </a> </button>
                    </div>
                </div>
            </div>
            <div class="bottom"></div>
        </div>
    </div>



<?php


     }




?>
</div>

        
    </div>

<?php require 'footer/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <style>
        * {
            margin: 0;
            padding: 0;
        }
#hero{
    background: url('img/cart.jpg') no-repeat center;
    height: 300px;
}
#hero h1{
    color: #e0f542;
    text-shadow: -4px 2px black;
    text-decoration: underline;
    font-style: oblique;
    font-weight: 900;
}

#wish{
    top: 0%;
    position: absolute;
    right: 1%;
    opacity: 0.8;
    background-color: #383736;
    height: 1.7rem ;
    width: 1.7rem;
    color: #ff3333;
}


.bottom{
    height: 6px;
    background-color: #77e2e1;
}


       
    </style>
</body>

</html>