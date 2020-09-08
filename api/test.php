<?php
if(!isset($_COOKIE['previously_visited'])) {
  echo "Cookie named 'previously_visited' is not set!";
} else {
  echo "Cookie is set!<br>";
  $previously_visited_cookie = $_COOKIE['previously_visited'];
  $previously_visited = unserialize($previously_visited_cookie);
  
    foreach ($previously_visited as $element) {
        echo "$element";
        echo " ";
   }
  
 // echo "Value is: " . $_COOKIE['previously_visited'];
}

if(!isset($_COOKIE['most_visited'])) {
  echo "Cookie named 'most_visited'is not set!";
} else {
  echo "Cookie is set!<br>";
  echo "Value is: " . $_COOKIE['most_visited'];
}






?>