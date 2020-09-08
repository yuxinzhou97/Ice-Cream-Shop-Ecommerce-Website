<?php 
  $current = "birthday cake";
  include("/home3/theyuxin/public_html/api/visited.php");
/*if(isset($_COOKIE['LastFive']))
{ 
    $id = 'Birthday Cake';
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
    $id = 'Birthday Cake';
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
<h1>Birthday Cake Ice Cream</h1>
</div>

<img src="https://theyuxinzhou.com/products/birthdaycake/birthdaycake.jpg" alt="theyuxinzhou.com" class="center"  width="450" height="400">
<p style="font-size:18px"  ><i>Price: $7.99/pint</i></p>
<p>All of the best parts of a birthday party pack themselves into one delectable pint of Birthday Cake ice cream. 
A nostalgic twist with rainbow sprinkles and shortbread chunks, you’ll enjoy every bite without having to sing 
Happy Birthday.</p>

<p><b>Ingredients</b></p>
<p>Buttermilk, Cream, Sugar, Corn Syrup, Frosting Ribbon [Sugar, Water, High Fructose Corn Syrup, Food Starch - Modified, 
Titanium Dioxide (Color), Natural And Artificial Flavors, Salt, Potassium Sorbate (Preservative), Blue 1], Cookie Freckles 
(Sugar, Coconut Oil, Buttermilk Powder, Natural Flavor, Titanium Dioxide, Yellow 6 Lake, Yellow 5 Lake, Blue 1 Lake, Soy 
Lecithin), Cream Cheese (Cultured Pasteurized Milk And Cream, Salt, Enzymes), Skim Milk, Contains Less Than 2% Of Whey, 
Natural Flavor, Corn Starch - Modified, Mono And Diglycerides, Cellulose Gum, Guar Gum, Carrageenan, Titanium Dioxide And 
Annatto (Color), Salt.</p>
<img src="https://theyuxinzhou.com/products/birthdaycake/nutrition.png" alt="theyuxinzhou.com" width="400" height="600">


<?php 
    include_once("/home3/theyuxin/public_html/api/review.php");
?>
 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>




</body>
</html>