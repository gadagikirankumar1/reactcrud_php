<?php
 // Headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:DELETE/POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content_Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');

include_once "../../config/Database.php";
include_once "../../models/Todo.php";

$database = new Database();
$db = $database->connect();

$todo = new Todo($db);

// get row posted data
$data = json_decode(file_get_contents("php://input"));

// echo json_encode(array("message"=>$data));
// echo json_encode(array("id"=>$data->id));
$todo->id = $data->id;

if ($todo->delete()) {
    echo json_encode(array("message" => "Todo Deleted!"));
} else {
    echo json_encode(array("message" => "Todo Not Deleted!"));
}