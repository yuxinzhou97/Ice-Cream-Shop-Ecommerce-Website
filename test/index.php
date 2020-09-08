<!DOCTYPE html>
<html>
<body>

<?php
  $fn = fopen("/home3/theyuxin/public_html/contacts/names.txt","r");
  
  while(! feof($fn))  {
	$result = fgets($fn);
	echo $result;
  }

  fclose($fn);
?>

</body>
</html>
