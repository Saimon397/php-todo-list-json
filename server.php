<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = './data.json';
$file_text = file_get_contents($file_url);
$todo_list = json_decode($file_text);

if (isset($_POST['newToDoText'])) {
    $newTodo = [
        'text' => $_POST['newToDoText'],
        'done' => false,
    ];
    array_push($todo_list, $newTodo);
    file_put_contents($file_url, json_encode($todo_list));
} else if (isset($_POST['index'])) {

    $todoIndex = $_POST['index'];

    $todo_list[$todoIndex]->done = !$todo_list[$todoIndex]->done;

    file_put_contents($file_url, json_encode($todo_list));
} else if (isset($_POST['indexDelete'])) {

    $todoIndex = $_POST['indexDelete'];

    array_splice($todo_list, $todoIndex, 1);

    file_put_contents($file_url, json_encode($todo_list));
} else {
    header('Content-Type: application/json');
    echo json_encode($todo_list);
}
