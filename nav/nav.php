<head>
<meta name="description" content="Get delicious food suggestions for your daily cravings and decide party menu's and much more ...">
    <meta name="keywords" content="food , sweets, breaksfast, lunch, dinner ,what to eat , todays menu, ocassional menus, party menus , recepies , items ,hunger ,assistant ,hungerassistant, hunger assistant, spicy, delicious">
  
  <title>nav</title>
  <script src="https://kit.fontawesome.com/bd8326da67.js" crossorigin="anonymous"></script>
</head>
<?php 
require 'dbconn/dbconn.php';
require 'session/r.php' ;

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
  
    
}
else{
    $loggedin = false;
}
      
 echo '     
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" style="margin: 0;" href="index.php"><div class="container"><img src="favicon.ico" height="5vh" class="img m-0 img-fluid" alt=""></div></a>

<div class=" justify-content-md-center " id="navbarsExample08" style="">
        <ul class="navbar-nav" style="
        flex-direction: row;
    ">
          <li class="nav-item mx-3 active">
            <a class="nav-link" href="index.php?page_url=<?php echo $redirect_link_var?>"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
          </li>
          ';
          
         
         
            
      echo '     <li class="nav-item mx-3 active">
            <a class="nav-link" href="wishlist.php"><i class="fas fa-heart">'; 
             if($loggedin){

              $cid = $_SESSION['username'];
          
              $query1 = "SELECT * FROM wishlist WHERE cid = '$cid'";
              
              $query1run = mysqli_query($conn, $query1);
              
              $num = mysqli_num_rows($query1run);
                  
            echo '<span id="count">'; echo $num; echo ' </span>';}echo '</i></a>
          </li>

     </ul>
      </div>






  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
      <li class="nav-item">
        <a class="nav-link active" href="aboutus.php?page_url=<?php echo $redirect_link_var?>">About</a>
    </li>
      <li class="nav-item">
          <a class="nav-link active " href="contactus.php?page_url=<?php echo $redirect_link_var?>">Contact Us</a>
        </li>
    </ul>
    <form action="cs.php" method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="str" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="mx-2">';
    if(!$loggedin){
        echo'
      <button class="btn btn-warning"><a  style="text-decoration:none; color:black;" href="login.php?page_url=<?php echo $redirect_link_var?>">Login</a></button>
      <button class="btn btn-warning"><a  style="text-decoration:none; color:black;" href="signup.php">Signup</a></button>
      ';
    }
    if($loggedin){
      echo '
      <button class="btn btn-danger"><a  style="text-decoration:none; color:black;" href="logout.php">Logout</a></button>
      
      '; }
    if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']==true ){
      echo '
      <button class="btn btn-danger"><a  style="text-decoration:none; color:black;" href="admin.php">admin</a></button>
      
      '; }
 echo '   </div> 
  
   </div>
</nav>
';
?>
<style>
 #count{
   background: #fc1c1c;
border-radius: 50% ;
padding: 4px;
   position: absolute;
  top: 17px;

 }

 
</style>