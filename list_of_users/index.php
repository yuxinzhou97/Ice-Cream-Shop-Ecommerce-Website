<!DOCTYPE html>
<html>
<body>

<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://theyuxinzhou.com/my_users/');
curl_exec ($ch);
echo "<br>";
?>


<h1>POKESHOP</h1>

<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.feiyucai.info/pokeshop/users.php');
curl_exec ($ch);
?>	    

		
	</body>
</html>
