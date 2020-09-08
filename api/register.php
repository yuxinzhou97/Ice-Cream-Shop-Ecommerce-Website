<?php
    // error_reporting(0);
    session_start();
    include("/home3/theyuxin/public_html/files/db_config.php");

   function createUserNordicHouse($data) {
        $url = "http://www.xiaoshuixin.com/api/create_user.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $response= curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function createUserSweetTooth($data) {
        $url = "http://theyuxinzhou.com/api/create_user.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $response= curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function createUserMiaoTravel($data) {
        $url = "http://www.miaoxiaogu.com/create_user.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $response= curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function createUserSuResort($data) {
        $url = "http://suyuan.website/api/create_user.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $response= curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $home = $_POST['home'];
        $home_phone = $_POST['home_phone'];
        $cell_phone = $_POST['cell_phone'];

        $require = true;
        if ($first_name == "" || $last_name == "") {
            print ("<script>alert('Please fill in First Name and Last Name!')</script>");
            $require = false;
        }

        $data = array (
            "first_name" => $first_name,
            "last_name" => $last_name,
            "password" => $password,
            "email" => $email,
            "home" => $home,
            "home_phone" => $home_phone,
            "cell_phone" => $cell_phone
        );
        $response = array();
        $response = json_decode(createUserSweetTooth($data));
        if ($response->status == "success") {
            $_SESSION["log_in"] = true;
            $_SESSION["user_email"] = $email;
            header("Location: http://theyuxinzhou.com/products/");
        } else if ($response->status == "fail") {
            printf("<script>alert(%s)</script>", $response->message);
        }

        // create user in Nordic House
        $response1 = json_decode(createUserNordicHouse($data));
        if ($response1->status == "fail") {
            printf("<script>alert(%s)</script>", "Create user in Nordic House fails!");
        }
        // create user in Miao Travel
        $response2 = json_decode(createUserMiaoTravel($data));
        if ($response2->status == "fail") {
            printf("<script>alert(%s)</script>", "Create user in Miao Travel fails!");
        }
        // create user in Su Resort
        $response3 = createUserSuResort($data);
        if ($response3->status == "fail") {
            printf("<script>alert(%s)</script>", "Create user in Su Resort fails!");
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
        <h4 class="card-title mb-4 mt-1">Sign up</h4>
            <form action="" method="post">
                <div class="form-group">
                    <label>Your email address</label>
                    <input name="email" class="form-control" placeholder="Email Address">
                </div> 
                <div class="form-group">
                    <label>Your first name</label>
                    <input name="first_name" class="form-control" placeholder="First Name">
                </div> 
                <div class="form-group">
                    <label>Your last name</label>
                    <input name="last_name" class="form-control" placeholder="Last Name">
                </div> 
                <div class="form-group">
                    <label>Your password</label>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div> 
                <div class="form-group">
                    <label>Your home address</label>
                    <input name="home" class="form-control" placeholder="Home Address">
                </div> 
                <div class="form-group">
                    <label>Your home Phone</label>
                    <input name="home_phone" class="form-control" placeholder="Home Phone">
                </div> 
                <div class="form-group">
                    <label>Your cell phone</label>
                    <input name="cell_phone" class="form-control" placeholder="Cell Phone">
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-block"> Sign Up </button>
                </div>                                                          
            </form>
        </article>
    </div> 
    
  
  
  
  
   <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>

  
  
  </body>
</html>