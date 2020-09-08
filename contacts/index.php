
<!DOCTYPE html>
<html>
    
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


<p><i> </i></p>
<p><a  href="http://theyuxinzhou.com/">BACK TO HOME</a></p>

<div style="text-align:center">
<h1>SWEET TOOTH ICE CREAM SHOP</h1>
<br>
<h2>CONTACTS</h2>
<?php
$file = fopen("/home3/theyuxin/public_html/contacts/names.txt","r");
  while(! feof($file))  {
	$line = fgets($file);
	echo $line;
	echo "<br>";
  }
fclose($fn);
?>
</div>


 <?php 
    include_once("/home3/theyuxin/public_html/files/styled_footer.html");
?>

</body>
</html>
