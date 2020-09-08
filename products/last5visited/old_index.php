<!DOCTYPE html>
<html>
<body>

<p><h2>The Last Five Visited Products Are:</h2></p>

<?php
if(!isset($_COOKIE['LastFive'])) 
{
    echo "Cookie is not set!";
} 
else {
    
    $data = json_decode($_COOKIE['LastFive'], true);
    
    foreach($data as $value) 
    {
        
        echo "$value<br>";
        
        
    }
    
    
    /*
    foreach($data as $value) 
    {
        
        echo "$value<br>";
        
        
    }
    
    
    echo "<pre>";
    print_r($data); 
    echo "</pre>";
    
    
    foreach($data as $result) 
    {
        
        echo "$result<br>";
        
        //echo $result['type'].'<br>';
    }
    */
    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    
   // echo "Value is: " . $_COOKIE['LastFive'];
}
?>



</body>
</html>