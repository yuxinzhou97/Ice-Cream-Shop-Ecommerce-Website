<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header('Access-Control-Allow-Headers: x-requested-with, content-type');

include_once '/home3/theyuxin/public_html/files/db_config.php';

$data = json_decode(file_get_contents("php://input"));
if (empty($data->first_name) || empty($data->last_name) || empty($data->password) || empty($data->email)) {
    http_response_code(200);
    echo json_encode(array("status" => "fail","message" => "Data is incomplete."));
    return;
} else {
    $first_name = $data->first_name;
    $last_name = $data->last_name;
    $password = $data->password;
    $email = $data->email;
    $home = $data->home;
    $home_phone = $data->home_phone;
    $cell_phone = $data->cell_phone;

    $query = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($db, $query);        
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        http_response_code(200);
        echo json_encode(array("status" => "fail","message" => "Email exists."));
        return;
    }

    $sql = "INSERT INTO users (email, pwd, first_name, last_name, home_address, home_phone, cell_phone) 
            VALUES ('$email','$password', '$first_name','$last_name','$home','$home_phone','$cell_phone')";
    $res = mysqli_query($db, $sql); 
    if ($res) {
        http_response_code(200);
        echo json_encode(array("status" => "success","message" => "Success."));
        return;
    } else {
        http_response_code(200);
        echo json_encode(array("status" => "fail","message" => "Fail."));
        return;
    }
}
?>