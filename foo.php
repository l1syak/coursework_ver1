<?php

include 'db.php';

$name = $_POST['name'];

if(isset($_POST['add'])) {
    $sql = ("INSERT INTO queue (name) VALUE (?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name]);
    if ($query) {
        header("Location: ". $_SERVER['HTTP_REFERER']);
    }
}

$sql = $pdo->prepare("SELECT * FROM queue");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);