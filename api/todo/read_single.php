<?php
 // Headers
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');

include_once "../../config/Database.php";
include_once "../../models/Todo.php";

$database = new Database();
$db = $database->connect();

$todo = new Todo($db);

$todo->id = isset($_GET["id"]) ? $_GET["id"] : die();

$todo->read_single();

$todo_arr = array(
    'id' => $todo->id,
    'name' => $todo->name,
    'creationDate' => $todo->creationDate
);

print_r(json_encode($todo_arr));