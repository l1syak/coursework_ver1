<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING );
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING );
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING );

if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
    }
else if (mb_strlen($name) < 2 || mb_strlen($name) > 20 ){
    echo "Недопустимая длина имени";
    exit();
}
else if (mb_strlen($password) < 8) {
    echo "Минимальная длина пароля - 8";
    exit();
}

$password = md5($password."123asd");

$mysql = new mysqli('localhost', 'root', 'root', 'coursework');
$mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES ('$login', '$name', '$password')");

$mysql->close();
header ('Location: /coursework/admin.php');
?>