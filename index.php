<?php 
include 'session/ss.php'

?>
<!doctype html>
<html lang="en">

<head>

<script data-ad-client="ca-pub-3602177353300563" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602177353300563"
     crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Get delicious food suggestions for your daily cravings and decide party menu's and much more ...">
    <meta name="keywords" content="food , sweets, breaksfast, lunch, dinner ,what to eat , todays menu, ocassional menus, party menus , recepies , items ,hunger ,assistant ,hungerassistant, hunger assistant, spicy, delicious">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
<link rel="manifest" href="site.webmanifest">
    <title>Hungerassistant.com</title>
</head>

<body>
    <?php require 'nav/nav.php' ?>
    <!-- header -->
    <div id="home" class="container-fluid  d-flex align-items-center justify-content-center ">
        <div class="container text-center">
            <h1 id="h1">Welcome to Hunger Assistant</h1>
            <button class="btn btn-danger border-dark btn-lg my-5"> <a href="#ourservices" style="color: black;"> Eat now </a></button>
        </div>
    </div>

    <!-- services -->
    <div id="ourservices" class="text-center my-3">
        <h1>Our Services</h1>
    </div>

    <div class="container my-2 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm text-center">
                <div class="card rounded my-3" style="width:100%;" >
                    <img class="card-img-top" src="img/thumb (1).png" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Today's Menu</h3>
                        <p class="card-text"> Confused about what to eat today? watch this sapace for multiple region wise cousine. <br>
                Everydays challenges at our home is what to cook & eat, So we have created this space to help you out. </p>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Click here</button>
                        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose Your Meal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <h6>Breakfast</h6>
                <div class="container-fluid">
                   <a href="map1.php"> <img src="img/foottime (2).png" class="img-fluid" alt="breakfast"></a>
                </div>
            </div>
            <div class="col">
            <h6>Lunch</h6>
                <div class="container-fluid">
                   <a href="map2.php"> <img src="img/foottime (3).png" class="img-fluid" alt="lunch"></a>
                </div>
            </div>
            <div class="col">
            <h6>Dinner</h6>
                <div class="container-fluid">
                   <a href="map3.php"> <img src="img/foottime (1).png" class="img-fluid" alt="dinner"></a>
                </div>
            </div>
        </div>
        
      </div>
     
    </div>
  </div>
</div>
<!-- modal end -->
                    </div>
                </div>
            </div>
            <div class="col-sm text-center">
                <div class="card rounded my-3" style="width:100%;" >
                    <img class="card-img-top" src="img/thumb (2).png" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Get Recepies</h3>
                        <p class="card-text">Want to make food , But worried how?
                    don't get stressed , we are here to help you 
                    <br> Just click below to get recepies of delishious dishes
                        </p>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter1">Click here</button>
                        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose Your Meal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <h6>Breakfast Recepies</h6>
                
                <div class="container-fluid">
                   <a href="map1.php"> <img src="img/foottime (2).png" class="img-fluid" alt="breakfast"></a>
                </div>
            </div>
            <div class="col">
            <h6>Lunch Recepies</h6>
                <div class="container-fluid">
                  <a href="map2.php">  <img src="img/foottime (3).png" class="img-fluid" alt="lunch"></a>
                </div>
            </div>
            <div class="col">
            <h6>Dinner Recepies</h6>
                <div class="container-fluid">
                  <a href="map3.php">  <img src="img/foottime (1).png"  class="img-fluid" alt="dinner"></a>
                </div>
            </div>
        </div>
        
      </div>
     
    </div>
  </div>
</div>
<!-- modal end -->
                       
                    </div>
                </div>
            </div>
            <div class="col-sm text-center">
                <div class="card rounded my-3" style="width:100%;" >
                    <img class="card-img-top" src="img/thumb (3).png" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title">Ocassional Menu</h3>
                        <p class="card-text">Watch this space to decide your menu for some special occasions like marraige, birthday party, office parties & events etc.</p>
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModalCenter2">Click here</button>
                        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choose Your plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">
                <h6>Wedding</h6>

                <P>comming soon ..</P>
                <div class="container-fluid">
                    <img src="" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col">
            <h6>Parties</h6>
            <P>comming soon ..</P>
                <div class="container-fluid">
                    <img src="" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col">
            <h6>Small Ocassions</h6>
            <P>comming soon ..</P> 
                <div class="container-fluid">
                    <img src="" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        
      </div>
     
    </div>
  </div>
</div>
<!-- modal end -->
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- feedback -->

<div id="feedback" class="container-fluid">
    <div id="fade">
    <div class="row justify-content-center align-items-center">
        <h1>Feedback</h1>
        <div class="col-md-4 m-5">
        <form action="https://formsubmit.co/hungerassistant@gmail.com" method="POST">
 
 
 <input type="hidden" name="_captcha" value="false">
 <input  type="hidden" name="_template" value="table">
  
 <label for="fname"> <strong> First Name</strong></label>
 <input  class="form-control" type="text" id="fname" name="name" placeholder="Your name.." required>

 <label for="lname"> <strong> Email</strong></label><br>
 <input  class="form-control" type="email" id="email" name="email" placeholder="Your email id" required><br>



 <label for="subject"> <strong> Message</strong></label>
 <textarea  class="form-control"id="subject" name="subject" placeholder="Write something.." style="height:auto"></textarea>

 <input class="btn btn-warning my-2" type="submit" value="Submit">

 <input  type="hidden" name="_next" value="https://hungerassistant.com/">
</form>
        </div>
    </div>
    </div>
</div>

<!-- footer -->
<?php require 'footer/btt.php' ?>
<?Php require 'footer/footer.php' ?>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        #home {
            background: url('bg1.jpg') no-repeat center center/cover;
            height: 500px;
        }
        #feedback{
            background: url('bg.jpg') no-repeat center center/cover;
        }
        #fade::before{
            backdrop-filter: blur(10px) saturate(200%);
        }

        #h1 {
            color: white;
            text-shadow: -4px 2px black;
            font-weight: bolder;
        }
    </style>
</body>

</html>