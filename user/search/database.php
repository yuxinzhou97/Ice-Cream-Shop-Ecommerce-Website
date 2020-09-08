<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Search Results</title>
    </head>

<?php
    extract($_POST);
    //mysql_connect( "localhost", "httpd", "")))
    //mysql_connect ("localhost", "cpUsername_dbUsername", "password")
    $query = "SELECT *".$select. "FROM user_information";
    $hostname = "localhost";
    $dbname = "theyuxin_user_creation";
    $username = "theyuxin_54321";
    $password =  "5432154321";
    $database = mysqli_connect ($hostname,$username, $password, $dbname);
    
    if (!$database)
        die("Could not connect to database");
    if( !( $result = mysqli_query($database, $query) )  ) 
    {
        die( mysqli_connect_error() );
    }
?>
    
    <h3 style = "color: blue">
    Search Results</h3>
    
    <table border = "1" cellpadding = "3" cellspacing = "2"
        style = "backgroud-color: #ADD8E6">


<?php
    for ( $counter = 0;
        $row = mysqli_fetch_row( $result );
        $counter++ ){   
        print( "<tr>" );
        foreach ( $row as $key => $value )
            print( "<td>$value</td>" );
            
        print( "</tr>" );
    }
    
    mysqli_close( $database );
?>

    </table>
    <br />Your search yielded <strong>
    <?php print("$counter") ?> results.<br /><br /></strong>
    
    
    <h3> Please email comments to support@sweettooth.com</h3>
    <h2> Sweet Tooth Ice Cream Shop, Inc.</h2>
    
    
</body>
</html>
    