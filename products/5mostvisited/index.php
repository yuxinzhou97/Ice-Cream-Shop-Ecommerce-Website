<!doctype html>
<html lang="en">
  <head>
    <script>
      function imageClick(url) {
        window.location = url;
      }
    </script>
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



<p><i> </i></p>
<p><a  href="http://theyuxinzhou.com/products">BACK TO ALL PRODUCTS</a></p>
<h1>SWEET TOOTH ICE CREAM SHOP</h1>
<br>
<h2>FIVE MOST VISITED PRODUCTS</h2>



      <div class="row justify-content-md-center" style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        <p class="h4  ml-5 pt-1 text-muted">SWEET TOOTH<br></p>
      </div>
      <style>
        hr{
          border: 0;
          height: 1px;
          background-image: linear-gradient(to right, rgba(70,70,70,0), rgba(70,70,70,0.75), rgba(70,70,70,0));
          -webkit-margin-before: 0.6em;
          -webkit-margin-after: 0.6em;
          -webkit-margin-start: auto;
          -webkit-margin-end: auto;
          }
     </style>
      <hr/>
 <?php 
            if(isset($_COOKIE['most_visited'])) {
                $most_visited_cookie = $_COOKIE['most_visited'];
                $most_visited = unserialize($most_visited_cookie);
                arsort($most_visited);
                $output = array_slice($most_visited, 0, 5);
                echo "<div class='col-8 offset-md-2 my-5'>";
                echo "<table class='table text-center table-bordered'><thead class='thead-light'><tr>";
                echo "<th>Five most visited products</th>";
                echo "</tr></thead>";
                foreach (array_keys($output) as $element) {
                    echo "<tr><td>$element</td></tr>";
                }
                echo "</table>";
                echo "</div>";
            } 
?>
            
      <!-- </div> -->

            
<?php
echo "<br>";
?>

 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>
  </body>
</html>