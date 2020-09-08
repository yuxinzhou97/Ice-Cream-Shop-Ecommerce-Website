<?php 
    session_start();
    include("/home3/theyuxin/public_html/files/db_config.php");

    $sql = "SELECT * FROM reviews WHERE product_name = '$current'";
    $res = mysqli_query($db, $sql);  
    $colums = mysqli_num_fields($res);

    echo "<div class='col-8 offset-md-2 my-5'>";
    echo "<p class='h4 ml-5 pt-1 text-muted' style='text-align: center;'>Products reviews</p><br>";
    echo "<table class='table table-bordered'><thead class='thead-light'><tr>";
    echo "<th>Review</th>";
    echo "<th>Rating</th>";
    echo "<th>Author</th>";
    echo "</tr></thead>";
    while ($row = mysqli_fetch_row($res)) {
        echo "<tr>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[4]</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br><p class='h4 ml-5 pt-1 text-muted' style='text-align: center;'>Leave product review</p><br>";
    if ($_SESSION["log_in"]) {
        if ($_SESSION["user_email"] == null) {
          echo "<p class='h4 ml-5 pt-1 text-muted' style='text-align: center;'>Only logged in user is able to leave reviews.</p><br>";
          return;
        } else {
            echo "<form action='/api/add_review.php' method='post'>";  //echo "<form action='/home3/theyuxin/public_html/api/add_review.php' method='post'>";
            echo "<div class='form-group'>";
            echo "<label for='product_review'>Review comment</label>";
            echo "<textarea class='form-control' name='comment' rows='4'></textarea>";
            echo "</div>";
            echo "<div class='form-group'>";
            echo "<label for='product_rating'>Review rating</label>";
            echo "<select class='form-control' name='rating'>";
            echo "<option>1</option>";
            echo "<option>2</option>";
            echo "<option>3</option>";
            echo "<option>4</option>";
            echo "<option>5</option>";
            echo "</select>";
            echo "</div>";
            echo "<button type='submit' class='btn btn-primary mb-2'>Submit review</button>";
            echo "<input name='product' value='$current' style='display:none'></input>";
            echo "</form>";
        }
    } else {
        echo "<p class='h4 ml-5 pt-1 text-muted' style='text-align: center;'>Only logged in user is able to leave reviews.</p><br>";
    }
    echo "</div>";
?>