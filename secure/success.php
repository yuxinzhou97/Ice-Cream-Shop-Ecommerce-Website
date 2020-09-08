
<?php
    session_start();
    if (isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] == true) {
        
        echo "<h2>Security</h2>";
        echo "<br>";
        echo "Current Users<br>";
        echo "<br>";
        echo "Lynden Griffith<br>";
        echo "Evie Healy<br>";
        echo "Aniya Poole<br>";
        echo "Grady Norris<br>";
        echo "Nala Calhoun<br>";
        echo "Daniele Leon<br>";
   }
    else{
        header("Location: http://theyuxinzhou.com/secure/");
      
    }
?>

<!DOCTYPE HTML>
<html>
<body>

 

</body>
</html>