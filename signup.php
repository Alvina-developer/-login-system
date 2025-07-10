<!--php -->
<?php
session_start();
if (isset($_POST['btn'])){

    $a = $_POST['uname'];
    $b = $_POST['email'];
    $c = $_POST['dob'];
    $d = $_POST['gender'];
    $e = $_POST['phn'];
    $f = $_POST['pswd']; 
    $g = $_FILES['img'];


    $p_name = $_FILES['img']['name'];
                 $p_size = $_FILES['img']['size'];
                 $p_tmp_name = $_FILES['img']['tmp_name'];
                 $p_type = $_FILES['img']['type'];
                 move_uploaded_file($p_tmp_name, 'assets/img/' . $p_name);



 include 'config.php';
 $query = "INSERT INTO user_data (User_name, Email, DOB, Gender, Phone, Pswd, Img) 
 VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$p_name')";


$res = mysqli_query($conn, $query) or die('Query Failed');
        
if($res){
    $_SESSION['User_name'] = $a;
    header('Location: thank.php');
}


}

?>

<!--php-->
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
                <div class="col-lg-10  col-md-7 col-sm-10 m-auto p-5  shadow">
                   <h1 class="text-center hd mt-3">Registration Form</h1>
                   <h3 class="text-center hd"> Sign up</h3>
                  <form  method="post" enctype="multipart/form-data">
                  <div class="row ">
                    <div class="col-lg-6  pt-2 pb-2">
                    <label class="txt ">Username</label>
                    <input type="text" placeholder="enter your username" required class="form-control" name="uname">
                    
                    </div> 
                  <div class="col-lg-6 pt-2 pb-2">
                  <label class="txt">Email ID</label>
                  <input type="email" placeholder="enter your email Id" required class="form-control" name="email">
                  </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6  pt-2 pb-2">
                    <label class="txt ">Date Of Birth</label>
                    <input type="date" placeholder="enter your date of birth" required class="form-control" name="dob">
                    </div> 
                  <div class="col-lg-6  pt-2 pb-2">
                    <label class="txt">Gender</label>
                  <select  required class="form-control " name="gender">
                                    <option class="">select your gender</option>
                                    <option  class="text-dark">Male</option>
                                    <option  class="text-dark">Female</option>
                                </select>
                  </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6  pt-2 pb-2">
                    <label class="txt ">Phone no</label>
                    <input type="text" placeholder="enter your phone no" required class="form-control" name="phn">
                    </div> 
                  <div class="col-lg-6  pt-2 pb-2">
                  <label class="txt">Password</label>
                  <input type="password" placeholder="enter your password" required class="form-control" name="pswd">
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-12  pt-2 pb-2">
                        <label class="txt"> Upload your profile pic</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                </div>
                  
                 
                      <button class="btn1 btn text-light  d-flex m-auto mt-3 ps-5 pe-5" name="btn"> Sign Up</button>
                      <p class="txt text-center">Already have an account?  <a href="index.php" class="text-light txt fs-5">Login</a></p>
                  </form>






                </div>
            </div>
        </section>
    </div>
</body>
</html>