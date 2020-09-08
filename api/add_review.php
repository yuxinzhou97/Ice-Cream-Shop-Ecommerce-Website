<?php
    // error_reporting(0);
    session_start();
    include_once("/home3/theyuxin/public_html/files/db_config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $comment = $_POST['comment'];
        $rating = $_POST['rating']; 
        $product = $_POST['product'];
        if ($comment == "" || $rating == "") {
            print ("<script>alert('Please fill in reivew and rating')</script>");
            header("Location: http://theyuxinzhou.com/products/$name");
            return;
        }
        $author = "anonymous";
        if ($_SESSION["user_email"] != null) {
            $author = $_SESSION["user_email"];
        }
        
        $sql = "INSERT INTO reviews (product_name, rating, comment, user_email) 
                VALUES ('$product', '$rating', '$comment', '$author')";
        $res = mysqli_query($db, $sql);  
        $name = str_replace(" ", "", $product);
        header("Location: http://theyuxinzhou.com/products/$name");
     }
?>