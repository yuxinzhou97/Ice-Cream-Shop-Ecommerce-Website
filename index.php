<!DOCTYPE html>
<html>
<title>SWEET TOOTH ICE CREAM SHOP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("https://theyuxinzhou.com/products/hp.jpg");
  min-height: 90%;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="https://theyuxinzhou.com" class="w3-bar-item w3-button">HOME</a>
    <a href="https://theyuxinzhou.com/about" class="w3-bar-item w3-button">ABOUT</a>
    <a  href="https://theyuxinzhou.com/products" class="w3-bar-item w3-button">PRODUCTS</a>
    <a href="https://theyuxinzhou.com/news" class="w3-bar-item w3-button">NEWS</a>
    <a  href="https://theyuxinzhou.com/contacts" class="w3-bar-item w3-button">CONTACTS</a>
    <a  href="https://theyuxinzhou.com/user" class="w3-bar-item w3-button">USER</a>
    <a  href="https://theyuxinzhou.com/secure" class="w3-bar-item w3-button">SECURE</a>
    <a  href="https://theyuxinzhou.com/list_of_users" class="w3-bar-item w3-button">LIST OF USERS DISPLAYED</a>
    <a  href="https://theyuxinzhou.com/marketplace" class="w3-bar-item w3-button">MARKET PLACE</a>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    
    <a  href="https://theyuxinzhou.com/api/register.php" class="w3-bar-item w3-button">SIGN UP</a>
    <a  href="https://theyuxinzhou.com/api/login.php" class="w3-bar-item w3-button">LOG IN</a>
    
  </div>
</div>

      


  
 <! --w3-grayscale-min>
<!-- Header with image -->
<header class="bgimg w3-display-container" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge">Open from 11am to 8pm</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-medium" style="font-size:120px">SWEET TOOTH<br>ICE CREAM SHOP</span>
    <span class="w3-text-white w3-hide-large w3-hide-large" style="font-size:120px"><b>SWEET TOOTH<br>ICE CREAM SHOP</b></span>
    <p><a href="https://theyuxinzhou.com/products" class="w3-button w3-xxlarge w3-black">Thurday happy hour - buy two medium ice cream cones get one free. Bring your friends!</a></p>
  </div>
</header>



<!-- Image of location/map -->
<!--w3-greyscale-->
<img src="https://theyuxinzhou.com/products/hp_icecream2.png" class="w3-image" style="width:100%;" id="hpimg2">


<!-- Footer -->
 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>


</body>
</html>