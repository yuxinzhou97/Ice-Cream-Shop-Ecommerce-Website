<?php 
  $current = "cookies n creme";
  include("/home3/theyuxin/public_html/api/visited.php");
/*if(isset($_COOKIE['LastFive']))
{ 
    $id = 'Cookies n Creme';
    $data = json_decode($_COOKIE['LastFive'], true);
    $data[] = $id;
    $id_list = array_unique($data);
    if(count($id_list)>5)
    {
        array_shift($id_list);
    }
    setcookie('LastFive',json_encode($id_list), time() + 300,'/'); 
} 
else
{
    $id = 'Cookies n Creme';
    $id_list[] = $id;
    setcookie('LastFive',json_encode($id_list), time() + 300,'/'); 
}
*/
?>



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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> SWEET TOOTH ICE CREAM SHOP </title>
<style>

</style>
</head>    
    
    
<body>
<?php 
    include_once("/home3/theyuxin/public_html/files/nav_bar.html");
?>  

<p><a  href="http://theyuxinzhou.com/products/">BACK TO ALL PRODUCTS</a></p> 


<div style="text-align:center">
<p><i> </i></p>
<h1>SWEET TOOTH ICE CREAM SHOP</h2>
<h2>PRODUCTS</h3>
<p><i> </i></p>
<h1>Cookies N Creme Ice Cream</h1>
</div>



<img src="https://theyuxinzhou.com/products/cookiesncreme/cookiesncreme.jpg" alt="theyuxinzhou.com" class="center" width="450" height="400">
<p style="font-size:18px"  ><i>Price: $7.99/pint</i></p>
<p>This flavor takes dunking chocolate cookies to the next level. We take as many chocolate cookies as possible, 
then we dunk them into our signature. This may be the very best way to eat cookies, if you ask us.</p>
<p><b>Ingredients</b></p>
<p>Buttermilk, Sugar, Whey, Coconut Oil, Bleached Wheat Flour, Corn Syrup, Cream, Wheat Flour, Cocoa, Milk, 
Skim Milk, Contains 1% or Less of Cocoa Butter, Cocoa Processed with Alkali, Unsweetened Chocolate, Oat Fiber, 
Enriched Wheat Flour (Wheat Flour, Niacin, Reduced Iron, Thiamin Mononitrate, Riboflavin, Folic Acid), Canola Oil, 
Food Starch-Modified, Soy Lecithin, Natural & Artificial Flavor, Carob Bean Gum, Cellulose Gum, Carrageenan, Palm 
Oil, Salt, Soybean Oil, Mono & Diglycerides, Corn Starch, Baking Soda, High Fructose Corn Syrup, Ammonium Bicarbonate, 
Caramel Color, Titanium Dioxide for Color. Contains milk, soy, wheat. Contains: milk, egg, almond, coconut</p>

<img src="https://theyuxinzhou.com/products/cookiesncreme/nutrition.png" alt="theyuxinzhou.com" width="400" height="600">


<?php 
    include_once("/home3/theyuxin/public_html/api/review.php");
?>

 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>




</body>
</html>