<?php 
// Headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once "../../config/Database.php";
include_once "../../models/Todo.php";

$database = new Database();
$db = $database->connect();

$todo = new Todo($db);

$result = $todo->read();

$num = $result->rowCount();

if ($num > 0) {
    $todo_arr = array();
    $todo_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $todo_item = array(
            'id' => $id,
            'name' => $name,
            'creationDate' => $creationDate
        );
        array_push($todo_arr['data'], $todo_item);
    }

    echo json_encode($todo_arr);
} else {
    echo json_encode(array("message" => "No Todo Found!"));
}