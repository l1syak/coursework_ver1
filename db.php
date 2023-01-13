<?php

$host = 'localhost';
$db = 'coursework1';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $password);
}
catch (PDOException $e) {
    echo 'Ошибка соединения с базой данных' .$e->getMessage();
}