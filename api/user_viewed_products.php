<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header('Access-Control-Allow-Headers: x-requested-with, content-type');

include_once '/home3/theyuxin/public_html/files/db_config.php';

$data = json_decode(file_get_contents("php://input"));
if (empty($data->email)) {
    http_response_code(200);
    echo json_encode(array("status" => "fail","message" => "Data is incomplete."));
    return;
} else {
    $email = $data->email;
    $query = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($db, $query);        
    $count = mysqli_num_rows($res);
    if ($count != 1) {
        http_response_code(200);
        echo json_encode(array("status" => "fail","message" => "Email not exists."));
        return;
    }
    $row = mysqli_fetch_assoc($res);
    $str = $row["viewed_products"];
    http_response_code(200);
    echo json_encode(array("status" => "success","data" => $str));
}
?>