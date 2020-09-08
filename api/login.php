<?php
    session_start();
    include("/home3/theyuxin/public_html/files/db_config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $email = $_POST['email'];
        $password = $_POST['password']; 
        
        $sql = "SELECT * FROM users WHERE email = '$email' and pwd = '$password'";
        $res = mysqli_query($db, $sql);        
        $count = mysqli_num_rows($res);
                  
        if ($count == 1) {
            $_SESSION["log_in"] = true;
            $_SESSION["user_email"] = $email;
            header("Location: https://theyuxinzhou.com/products/");
        } else {
            echo "<script>alert('Invalid Username and Password!')</script>";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> SWEET TOOTH ICE CREAM SHOP </title>
</head>
  <body>
      
 <?php 
    include_once("/home3/theyuxin/public_html/files/nav_bar.html");
?> 
    
    

    
    
    <div class="card col-4 offset-md-4 my-5">
        <article class="card-body">
        <!-- <a href="" class="float-right btn btn-outline-secondary">Sign up</a> -->
        <h4 class="card-title mb-4 mt-1">User Sign in</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label>Your email</label>
                    <input name="email" class="form-control" placeholder="Email Address">
                </div> 
                <div class="form-group">
                    <!-- <a class="float-right" href="#">Forgot?</a> -->
                    <label>Your password</label>
                    <input name="password" class="form-control" placeholder="Password" type="password">
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-block"> Login </button>
                </div>                                                          
            </form>
        </article>
    </div> 
    
    
    <div style="text-align:center">
<p><a  href="https://theyuxinzhou.com/fblogin/index.php">I would rather log in through Facebook</a></p>
    
</div>
 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>
