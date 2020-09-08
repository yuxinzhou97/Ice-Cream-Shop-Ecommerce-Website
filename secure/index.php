<?php
    session_start();

   $username = "admin";
   $password = "1234";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == $username && $_POST['password'] == $password )
        {

             $_SESSION['loggedin'] = true;
             header("Location: /secure/success.php");

        }
        else
        {
            $_SESSION['loggedin'] = false;
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

<p><a  href="http://theyuxinzhou.com/">BACK TO HOME</a></p>


<div style="text-align:center">
<p><i> </i></p>

<h1>SWEET TOOTH ICE CREAM SHOP</h2>
<p><i> </i></p>
<h2>SRCURE ADMIN LOGIN</h2>
<p><i> </i></p>
        
    
        <form method="POST" action="">  
        Username:<br/>
        <input type="text" name="username"><br/>
        Password<br/>
        <input type="password" name="password"><br/>
        <input type="submit" value="Login!"/>
        </form>
        
        
</div>




    </body>
</html>



