<?php
    // error_reporting(0);
    session_start();
    include("/home3/theyuxin/public_html/files/db_config.php");
    

    
    
    function getViewedProductsNordicHouse($data) {
        $url = "http://www.xiaoshuixin.com/api/user_viewed_products.php";
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

    function getViewedProductsSweetTooth($data) {
        $url = "http://theyuxinzhou.com/api/user_viewed_products.php";
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

    function getViewedProductsMiaoTravel($data) {
      $url = "http://www.miaoxiaogu.com/user_viewed_products.php";
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

    function getViewedProductsSuResort($data) {
      $url = "http://suyuan.website/api/user_viewed_products.php";
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

    function build_table($website, $arr) {
      echo "<div class='col-8 offset-md-2'>";
      echo "<p class='h5 text-muted' style='text-align: center;'>Viewed products in " . $website . "</p><br>";
      echo "<table class='table table-bordered'>";
      echo "<thead class='thead-light'>";
      echo "<tr><th>Product/Service name</th><th>Product/Service link</th></tr>";
      echo "</thead>";

      foreach ($arr as $k => $v) {
        echo "<tr>";
        echo "<td>" . $k . "</td>";
        echo "<td><a href='http://$v'>$v</a></td>";
        echo "</tr>";
      }
      echo "</table>";
      echo "</div>";
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
    
  
    
    
    
    <?php
      if ($_SESSION["log_in"]) {
        if ($_SESSION["user_email"] == null) {
          echo "<p class='h4 mt-3 text-muted' style='text-align: center;'>Please log in first!</p><br>";
          return;
        }
        echo "<p class='h4 mt-3 text-muted' style='text-align:center;'>Show all viewed products</p><br>";
        $email = $_SESSION["user_email"];
        $data = array(
          "email" => $email
        );




        // Call each of memeber company's API
        // Nordic House
        $response = json_decode(getViewedProductsNordicHouse($data));
        if ($response->status == "success") {
          $str = $response->data;
          build_table("Nordic House", unserialize($str));
        } else if ($response->status == "fail") {
          echo "<p class='h5 ml-5 pt-1 text-muted' style='text-align: center;'>Failed to fetch Nordic House</p><br>";
        }

        // Miao Travel
        $response = json_decode(getViewedProductsMiaoTravel($data));
        if ($response->status == "success") {
          $str = $response->data;
          build_table("Miao Travel", unserialize($str));
        } else if ($response->status == "fail") {
          echo "<p class='h5 ml-5 pt-1 text-muted' style='text-align: center;'>Failed to fetch Miao Travel</p><br>";
        }

        // Sweet Tooth
        $response = json_decode(getViewedProductsSweetTooth($data));
        if ($response->status == "success") {
          $str = $response->data;
          build_table("Sweet Tooth", unserialize($str));
        } else if ($response->status == "fail") {
          echo "<p class='h5 ml-5 pt-1 text-muted' style='text-align: center;'>Failed to fetch Sweet Tooth</p><br>";
        }

        // Su Resort
        $response = json_decode(getViewedProductsSuResort($data));
        if ($response->status == "success") {
          $str = $response->data;
          build_table("Su Resort", unserialize($str));
        } else if ($response->status == "fail") {
          echo "<p class='h5 ml-5 pt-1 text-muted' style='text-align: center;'>Failed to fetch Su Resort</p><br>";
        }




        
        
      } else {
        echo "<p class='h4 mt-3 text-muted' style='text-align: center;'>Please log in first!</p><br>";
      }
    ?>





  
   <?php 
        include_once("/home3/theyuxin/public_html/files/styled_footer.html");
    ?>

  
  
  </body>
</html>