<?php 
  $current = "matcha";
  include("/home3/theyuxin/public_html/api/visited.php");
/*if(isset($_COOKIE['LastFive']))
{ 
    $id = 'Matcha';
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
    $id = 'Matcha';
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
<h1>Matcha Ice Cream</h1>
</div>




<img src="https://theyuxinzhou.com/products/matcha/matcha.png" alt="theyuxinzhou.com" class="center" width="450" height="400">
<p style="font-size:18px"  ><i>Price: $7.99/pint</i></p>
<p>We make our green tea ice cream from a highly sought-after Japanese matcha green tea, a ceremonial tea prized 
for its intense yet delicate essence. enjoy its soothing flavor enhanced with the richness of pure, sweet cream.</p>
<p><b>Ingredients</b></p>
<p>Cream, milk, sugar/glucose – fructose, skim milk powder, whey powder, green tea (green tea & matcha powder),
natural flavour, mono & diglycerides, guar gum, xanthan gum, carrageenan, locust bean gum, colour. 
May contain traces of peanuts and nuts.</p>
<img src="https://theyuxinzhou.com/products/matcha/nutrition.png" alt="theyuxinzhou.com" width="400" height="600">





<?php 
    include_once("/home3/theyuxin/public_html/api/review.php");
?>
 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>




</body>
</html>