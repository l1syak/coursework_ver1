<?php

$result = array();

$link = mysqli_connect("localhost", "root", "root", "coursework1");

$num = $_GET['num'];

$sql = ("SELECT * FROM queue WHERE id ='.$num.'");
$items = mysqli_query($link, $sql);
while($row = $items->fetch_assoc()) {
    $result['items'][] = $row;
}

//$sql = "DELETE FROM queue WHERE id ='".$num."'";
//mysqli_query($link, $sql);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
