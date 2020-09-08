<?php
    // error_reporting(0);
    session_start();
    include("/home3/theyuxin/public_html/files/db_config.php");

    function getTopRatingProductsNordicHouse() {
         $url = "http://www.xiaoshuixin.com/api/get_top_rating_products.php";
       // $url = "http://localhost/CMPE272/API/get_top_rating_products.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(null));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        $response= curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    function getTopRatingProductsSweetTooth() {
      $url = "http://theyuxinzhou.com/api/get_top_rating_products.php";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(null));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

      $response= curl_exec($ch);
      curl_close($ch);
      return $response;
    }

    function getTopRatingProductsMiaoTravel() {
      $url = "http://www.miaoxiaogu.com/get_top_rating_products.php";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(null));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

      $response= curl_exec($ch);
      curl_close($ch);
      return $response;
    }

    function getTopRatingProductsSuResort() {
      $url = "http://suyuan.website/api/get_top_rating_products.php";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(null));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

      $response= curl_exec($ch);
      curl_close($ch);
      return $response;
    }


    function build_table($website, $arr) {
        echo "<div class='col-8 offset-md-2'>";
        echo "<p class='h5 text-muted' style='text-align: center;'>Top 5 rating products in " . $website . "</p><br>";
        echo "<table class='table table-bordered'>";
        echo "<thead class='thead-light'>";
        echo "<tr><th>Product/Service name</th><th>Average ratings</th></tr>";
        echo "</thead>";
        for ($i = 0; $i < count($arr); ++$i) {
            echo "<tr>";
            echo "<td>" . $arr[$i]->product_name . "</td>";
            echo "<td>" . number_format((float)$arr[$i]->ratings, 2, '.', '') . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    

    function build_table_across_group($arr1, $arr2, $arr3, $arr4) {
      $tmp1 = array_merge($arr1, $arr2);
      $tmp2 = array_merge($arr3, $arr4);
      $arr = array_merge($tmp1, $tmp2);
      function cmp($a, $b)
      {
        if ($a->ratings == $b->ratings) {
          return 0;
        }
        return ($a->ratings < $b->ratings) ? 1 : -1;
      }
      usort($arr, "cmp");
      echo "<div class='col-8 offset-md-2'>";
      echo "<table class='table table-bordered'>";
      echo "<thead class='thead-light'>";
      echo "<tr><th>Product/Service name</th><th>Average rating</th></tr>";
      echo "</thead>";
      for ($i = 0; $i < 5; ++$i) {
        echo "<tr>";
        echo "<td>" . $arr[$i]->product_name . "</td>";
        echo "<td>" . number_format((float)$arr[$i]->ratings, 2, '.', '') . "</td>";
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
        echo "<p class='h4 mt-3 text-muted' style='text-align: center;'>Top 5 rating products in each memeber company</p><br>";
        // Call each of memeber company's API
       $response = json_decode(getTopRatingProductsNordicHouse());
        $arr1 = $response->data;
        if ($response->status == "success") {
            build_table("Nordic House", $arr1);
        } else if ($response->status == "fail") {
            echo "<p class='h4 text-muted' style='text-align: center; color:red'>Failed to fetch Nordic House</p><br>";
        }

        //Miao Travel
        $response = json_decode(getTopRatingProductsMiaoTravel());
        $arr2 = $response->data;
        if ($response->status == "success") {
            build_table("Miao Travel", $arr2);
        } else if ($response->status == "fail") {
            echo "<p class='h4 text-muted' style='text-align: center; color:red'>Failed to fetch Miao Travel</p><br>";
        }
        
        
        
        
        
         //Sweet Tooth
         $response = json_decode(getTopRatingProductsSweetTooth());
         $arr3 = $response->data;
         if ($response->status == "success") {
            build_table("Sweet Tooth", $arr3);
         } else if ($response->status == "fail") {
            echo "<p class='h4 text-muted' style='text-align: center; color:red'>Failed to fetch Sweet Tooth</p><br>";
         }

        //Su Resort
         $response = json_decode(getTopRatingProductsSuResort());
         $arr4 = $response->data;
         if ($response->status == "success") {
             build_table("Su Resort", $arr4);
         } else if ($response->status == "fail") {
            echo "<p class='h4 text-muted' style='text-align: center; color:red'>Failed to fetch Sweet Tooth</p><br>";
         }

        echo "<p class='h4 mt-3 text-muted' style='text-align: center;'>Top 5 highest rated products in the whole market place</p><br>";
        build_table_across_group($arr1, $arr2, $arr3, $arr4);
    ?>



    <?php 
        include_once("/home3/theyuxin/public_html/files/styled_footer.html");
    ?>
    


  </body>
</html>