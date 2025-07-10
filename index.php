<?php
session_start();

if (isset($_POST['btn'])){
   $email = $_POST['mail'];
   $pswd = $_POST['pswd'];
   include 'config.php';
$query = "SELECT * FROM user_data WHERE Email = '$email' AND Pswd = '$pswd'";
$res = mysqli_query($conn, $query) or die('Query Failed');
if ($res) {
    $_SESSION['email'] = $email;
    $_SESSION['pasword'] = $pswd;
    header('location:profil.php');
} else {
    echo '<script>alert("Invalid password or email");</script>';
}
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container_fluid bg-dark">
        <section>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <div class="row  m-auto bg-dark main d-flex justifiy-content-center align-items-center position-absolute">
               <div class="col-lg-10 col-md-7 col-sm-10 m-auto">
                <h1 class="text-center txt mt-3">Login</h1>
                <div class="col-lg-8 m-auto pt-2 pb-2">
                    <form method="post">
                  <label class="txt">Email Id</label>
                  <input type="text" placeholder="enter your email Id" required class="form-control" name="mail">
                  </div>
                  <div class="col-lg-8 m-auto pt-2 pb-2">
                  <label class="txt">Password</label>
                  <input type="password" placeholder="enter your password" required class="form-control" name="pswd">
                  </div>               
                 <button class="btn btn1 d-flex m-auto mt-4 "  name="btn">Login</button>
                 <p class="txt text-center mb-5 mt-3 fs-5">Don't have an account? <a class="txt" href="signup.php">Create new account</a></p>              
                 </form>
               </div>
            </div>
        </section>
    </div>
</body>
</html>