<?php 
  if(isset($_COOKIE['previously_visited'])) {
    $previously_visited_cookie = $_COOKIE['previously_visited'];
    $previously_visited = unserialize($previously_visited_cookie);
  } else {
    $previously_visited = array();
  }

  // not found in the previously visited array
  if (!in_array($current, $previously_visited)) {
    if (sizeof($previously_visited) >= 5) {
      array_splice($previously_visited, 4, 1);
      array_splice($previously_visited, 0, 0, $current);
    } else {
      array_splice($previously_visited, 0, 0, $current);
    }
  } else {
    $index = array_search($current, $previously_visited);
    if ($index != 0) {
      array_splice($previously_visited, $index, 1);
      array_splice($previously_visited, 0, 0, $current);
    }
  }

  $previously_visited_cookie = serialize($previously_visited);
  $expire=time()+60*60*24*30;
  
  setcookie('previously_visited', $previously_visited_cookie, $expire, '/');
  
    if(isset($_COOKIE['LastFive']))
    { 
        
        $data = json_decode($_COOKIE['LastFive'], true);
        $data[] = $current;
        $id_list = array_unique($data);
        if(count($id_list)>5)
        {
            array_shift($id_list);
        }
        setcookie('LastFive',json_encode($id_list), $expire,'/'); 
    } 
    else
    {
        
        $id_list[] = $current;
        setcookie('LastFive',json_encode($id_list),$expire,'/'); 
    }
      
  
  
  
  
  
  //setcookie('previously_visited', $previously_visited_cookie, $expire);

  // 
  // most visited products
  // 
  if(isset($_COOKIE['most_visited'])) {
    $most_visited_cookie = $_COOKIE['most_visited'];
    $most_visited = unserialize($most_visited_cookie);
    
  } else {
    $most_visited = array();
  }

  // found in the most visited array
  if (array_key_exists($current, $most_visited)) {
    $value = $most_visited[$current];
    $most_visited[$current] = $value + 1;
  } else {
    $most_visited[$current] = 1;
  }

  $most_visited_cookie = serialize($most_visited);
  $expire=time()+60*60*24*30;
  setcookie('most_visited', $most_visited_cookie, $expire, '/');
  //setcookie('most_visited', $most_visited_cookie, $expire);

  //
  // (team project)Tracking of where the user has visited within the market place
  //
  function updateUserViewedProducts($db, $email, $str) {
    $sql = "UPDATE users SET viewed_products = '" . $str . "' WHERE email = '" . $email . "'";
    $res = mysqli_query($db, $sql); 
  }
  session_start();
    include("/home3/theyuxin/public_html/files/db_config.php");
  // user logged in
  if ($_SESSION["log_in"]) {
    if ($_SESSION["user_email"] == null) {
      return;
    }
    $email = $_SESSION["user_email"];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($db, $sql);  
    $row = mysqli_fetch_assoc($res);

    $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    if ($row["viewed_products"] == null) {
      $arr = array();
      $arr[$current] = $url;
      $str = serialize($arr);
      updateUserViewedProducts($db, $email, $str);
    } else {
      $arr = unserialize($row["viewed_products"]);
      if (!key_exists($current, $arr)) {
        $arr[$current] = $url;
        $str = serialize($arr);
        updateUserViewedProducts($db, $email, $str);
      }
    }  
  }

  //
  // count product viewed
  //
  $sql = "SELECT * FROM products WHERE product_name = '$current'";
  $res = mysqli_query($db, $sql); 
  $num = mysqli_num_rows($res);
  $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  if ($num == 0) {
    $sql = "INSERT INTO products (product_name, viewed, link) 
          VALUES ('$current', 1, '$url')";
    $res = mysqli_query($db, $sql);  
  } else if ($num == 1) {
    $row = mysqli_fetch_assoc($res);
    $count = $row["viewed"];
    $count = $count + 1;
    $sql = "UPDATE products set viewed = $count WHERE product_name = '$current'";
    $res = mysqli_query($db, $sql);
  }
?>