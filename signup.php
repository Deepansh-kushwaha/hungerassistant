<?php require 'session/ss.php' ?>

<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconn/dbconn.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];


    // Check whether this username exists
    $existSql = "SELECT * FROM `hungry-peoples` WHERE username = '$username' AND email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {

        $showError = "Username or email Already Exists kindly login";
    } else {
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `hungry-peoples`(`Username`, `Email`, `Phone`, `Passward`, `Time`) VALUES ('$username','$email','$phone','$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
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
    <title>SignUp</title>
</head>

<body>
    <?php require 'nav/nav.php' ?>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

    <div id="bg" class="container-fluid m-0 p-0 ">
        <div class="container-fluid py-4">
            <h1 class="text-center title">Signup To Our Website</h1>
        </div>
        <form class="px-5" action="signup.php" method="post">
            <div class="form-group col-md-4">
                <label for="username">Username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" placeholder="Remember username for login" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group col-md-4">
                <label for="email">email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group col-md-4">
                <label for="phone">Phone Number</label>
                <input type="text" maxlength="11" class="form-control" id="phone" name="phone" placeholder="Phone no" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-md-4">
                <label for="password">Password</label>
                <input type="password" minlength="4" maxlength="23" class="form-control" id="password" name="password" placeholder="password" required>
            </div>
            <div class="form-group col-md-4">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Be sure to type the same password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-md ">SignUp</button>
        </form>

        <h2 class="text-center p-5 "> IF Already registered <strong><a href="login.php"> login</a></strong> </h2>
    </div>
    <?php require 'footer/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <style>
        .container-fluid h1 {
            color: black;
            font-style: oblique;
            font-weight: 900;
        }

        label {
            color: black;
            font-weight: 900;
            font-size: 1.2rem;
        }

        form {
            display: flex;
            flex-direction: column;
            font-size: 4vh;
            align-items: center;
        }

        #bg {
            background: url('img/blob.svg') no-repeat center center/cover;
        }
    </style>


</body>

</html>