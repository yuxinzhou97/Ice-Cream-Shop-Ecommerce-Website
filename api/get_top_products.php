<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header('Access-Control-Allow-Headers: x-requested-with, content-type');

include_once '/home3/theyuxin/public_html/files/db_config.php';

$query = "SELECT * FROM products ORDER BY viewed DESC LIMIT 5";
$res = mysqli_query($db, $query);
$data = array();
if (mysqli_num_rows($res) > 0) {
    while($row = mysqli_fetch_assoc($res)) {
        array_push($data, $row);
    }
}
http_response_code(200);
echo json_encode(array("status" => "success","data" => $data));   

?>