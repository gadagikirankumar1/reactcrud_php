<?php
 // Headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content_Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');

include_once "../../config/Database.php";
include_once "../../models/Todo.php";

$database = new Database();
$db = $database->connect();

$todo = new Todo($db);

// get row posted data
$data = json_decode(file_get_contents("php://input"));

// var_dump($data);
$todo->name = $data->name;
// echo json_encode(array("name"=>$data->name));


if ($todo->create()) {
    echo json_encode(array("message" => "Todo Created!"));
} else {
    echo json_encode(array("message" => "Todo Not Created!"));
}