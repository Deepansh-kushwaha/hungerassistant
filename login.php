<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'dbconn/dbconn.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
     
    $sql =  "SELECT * FROM `hungry-peoples` WHERE username = '$username' OR email = '$email' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['Passward'])){ 
               
                session_start();
                
                $login = true;
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['ROLE']=$row>'role';
                if($row['role']==1){
                    $_SESSION['ROLE'] = true ;
                }
                else{
                    $_SESSION['ROLE'] = false ;
                }

               $redirect_link=$_REQUEST['page_url'];
               if($redirect_link==""){
                   header("location: .$redirect_link ");

               }
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <title>Login</title>
  </head>
  <body>
    <?php require 'nav/nav.php' ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

<div id="bg"class="container-fluid m-0 p-0 ">
     <div class="container-fluid py-4">
     <h1 class="text-center">Login to our website</h1></div>
     <form class="px-5"action="login.php" method="post">
        <div class="form-group col-md-4">
            <label for="username/email">Username</label>
            <input  type="text"  class="form-control" id="email"  name="username" placeholder="enter username" aria-describedby="emailHelp">
            <span>OR (Enter any one )</span><br>
            <label for="username/email">Email</label>
            <input  type="email"  class="form-control" id="email"  name="email" placeholder="enter email" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group col-md-4">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="enter password">
        </div>
       
         
        <button type="submit" class="btn btn-primary btn-lg">Login</button>
     </form>
     <h2 class="text-center p-5">If not registerd <strong><a href="signup.php"> kindly signup first.</a></strong></h2>
    </div>


    <?php require 'footer/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        .container-fluid h1{
           color: black;
            font-style: oblique;
            font-weight: 900;
        }
        label{
            color:black;
            font-weight: 900;
    font-size: 1.2rem;
        }
        form{
            display: flex;
            flex-direction: column;
            font-size:4vh;
            align-items:center;
        }
        #bg{
           background: url('img/blob.svg') no-repeat center center/cover;
       }
       
    </style>
  </body>
</html>