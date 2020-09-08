<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sample Database</title>
    </head>
    
        <h1>
            Sweet Tooth Ice Cream Shop
        </h1>

        <h3 style = "font-family: arial color: blue">
            Users
        </h3>

<?php
	//if (isset($_POST['submit'])) {

        $hostname = "localhost";
        $dbname = "theyuxin_user_creation";
        $username = "theyuxin_54321";
        $password =  "5432154321";
        
        $connection = mysqli_connect ($hostname,$username, $password, $dbname);
		if (!$connection)
            die("Could not connect to database");

	    
	    $query = "SELECT * FROM user_information";
		$result = mysqli_query($connection, $query) ;

?>

    
<table border = "1" cellpadding = "3" cellspacing = "2" style = "backgroud-color: #ADD8E6">
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Home Phone</th>
    <th>Cell Phone</th>
   </tr>
		
<?php		

for ( $counter = 0;$row = mysqli_fetch_row( $result );$counter++ )
{   
    print( "<tr>" );
    foreach ( $row as $key => $value )
        print( "<td>$value</td>" );
        print( "</tr>" );
}


?>		
		
</table>

    

