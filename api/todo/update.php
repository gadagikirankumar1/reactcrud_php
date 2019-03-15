<?php
 // Headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content_Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');

include_once "../../config/Database.php";
include_once "../../models/Todo.php";

$database = new Database();
$db = $database->connect();

$todo = new Todo($db);

// get row posted data
$data = json_decode(file_get_contents("php://input"));

$todo->name = $data->name;
$todo->id = $data->id;

if ($todo->update()) {
    echo json_encode(array("message" => "Todo Updated!"));
} else {
    echo json_encode(array("message" => "Todo Not Updated!"));
}