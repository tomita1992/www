<?php

$conn = mysqli_connect('127.0.0.1', 'root', 'cui02093920', 'demo');

$query = mysqli_query($conn,"SELECT * FROM TEST;");

while($row = mysqli_fetch_assoc($query))
{
    $data[] = $row;
}

//之前不可以这样设置但是现在可以了
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($data);
