<?php
    
    /*
    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '123456');
    // define('DB_PASSWORD', '12345678');
    define('DB_DATABASE', 'CMPE272');
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if (!$db) {
        die("connect to MySQL error: " . mysqli_connect_error());
    }
*/


        $hostname = "localhost";
        $dbname = "theyuxin_user_creation";
        $username = "theyuxin_54321";
        $password =  "5432154321";
        
        $db = mysqli_connect ($hostname,$username, $password, $dbname);
		if (!$db)
            die("Could not connect to database");

?>