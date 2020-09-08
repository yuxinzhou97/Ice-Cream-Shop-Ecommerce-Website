<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sample Database</title>
    </head>
    
        <h1>
            Sweet Tooth Ice Cream Shop
        </h1>

        <h3 style = "font-family: arial color: blue">
            Search user information from our database:
        </h3>

<?php
	if (isset($_POST['submit'])) {

        $hostname = "localhost";
        $dbname = "theyuxin_user_creation";
        $username = "theyuxin_54321";
        $password =  "5432154321";
        
        $connection = mysqli_connect ($hostname,$username, $password, $dbname);
		if (!$connection)
            die("Could not connect to database");
            
		$q = $connection->real_escape_string($_POST['q']);
		$column = $connection->real_escape_string($_POST['column']);

        $query = "SELECT * FROM user_information WHERE $column = '".$q."'";
	
		$result = mysqli_query($connection, $query) ;
		
//$query2 = "SELECT count(*) FROM user_information WHERE $column LIKE '%".$q."%'";
$query2 = "SELECT count(*) FROM user_information WHERE $column = '".$q."'";		$count = mysqli_query($connection, $query2) ;
		
	}	

?>

    
    <table border = "1" cellpadding = "3" cellspacing = "2"
        style = "backgroud-color: #ADD8E6">
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Home Phone</th>
    <th>Cell Phone</th>
   </tr>
		
<?php		
if( $count > 0)
{
			    for ( $counter = 0;
                $row = mysqli_fetch_row( $result );
                $counter++ ){   
                print( "<tr>" );
                foreach ( $row as $key => $value )
                    print( "<td>$value</td>" );
                    
                print( "</tr>" );
                }
}

?>		
		
    </table>
    

<html>
	<head>
		<title>PHP Search Form</title>
	</head>
	<body>
		<form method="post" action="index.php">
			<input type="text" name="q" placeholder="Search...">
			<select name="column">
				<option value="FirstName">First Name</option>
				<option value="LastName">Last Name</option>
				<option value="Email">Email</option>
				<option value="HomePhone">Home Phone</option>
				<option value="CellPhone">Cell Phone</option>
			</select>
			<input type="submit" name="submit" value="Find">
		</form>
		
	<h5> Please email comments to support@sweettooth.com</h5>
    <h5> Sweet Tooth Ice Cream Shop, Inc.</h5>	
		
	</body>
</html>


    
    

