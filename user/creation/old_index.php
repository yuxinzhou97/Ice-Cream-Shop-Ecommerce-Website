
<?php

if(isset($_POST["submit"])){
        $hostname = "localhost";
        $dbname = "theyuxin_user_creation";
        $username = "theyuxin_54321";
        $password =  "5432154321";
        
        $conn = new mysqli($hostname,$username, $password, $dbname);

	if (!$conn)
            die("Could not connect to database");
}
?>


<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>

<h1>Sweet Tooth Ice Cream Shop</h1>
<h3 style = "font-family: arial color: blue">
    Insert user info into our database:
</h3>


</head>
<body>


<?php
      
if(isset($_POST['submit']))
{

    $sql = "INSERT INTO user_information (FirstName, LastName, Email, HomeAddress, HomePhone, CellPhone) VALUES ('".$_POST["FirstName"]."', '".$_POST["LastName"]."', '".$_POST["Email"]."','".$_POST["HomeAddress"]."','".$_POST["HomePhone"]."','".$_POST["CellPhone"]."')";    
        
        
    $result = mysqli_query($conn, $sql);
    
    
    if (mysqli_query($conn, $sql)){
     echo "Your Record Has Been Added Sucessfully!";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
    }
    
    mysqli_close($conn);
}

?>


<form action="" method="post"> 
   
<label>FirstName</label>
<input type="text" name="FirstName" id="FirstName"><br/><br/>

<label>LastName</label>
<input type="text" name="LastName" id="LastName"><br/><br/>

<label>Email</label>
<input type="text" name="Email" id="Email"><br/><br/>

<label>HomeAddress</label>
<input type="text" name="HomeAddress" id="HomeAddress"><br/><br/>

<label>HomePhone</label>
<input type="text" name="HomePhone" id="HomePhone"><br/><br/>

<label>CellPhone</label>
<input type="text" name="CellPhone" id="CellPhone"><br/><br/>


<input type="submit" name="submit" value="submit">






</body>
</html>

