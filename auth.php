<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING );
//filtervar - она позволяет отфильтровать значение(2 аргумента), удалить различные html символы, trim - удаляет лишние пробелы из какой либо строки
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$password = md5($password."123asd");
//хеш пароля с солью
$mysql = new mysqli('localhost', 'root', 'root', 'coursework');
//на основе классса mysqli подключаемся к БД.
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
//query принимает sql запрос, в котором необходимо ставить запрос из таблички в БД.
$user = $result->fetch_assoc();
//конвертация данных с БД в массив
if($password == $user['password']){
    setcookie('user', $user['login'], time() + (60*60), "/");
    header ('Location: /coursework/admin.php');
}
else {
    echo 'Неверный пароль! ';
}
if (empty($user)) {
    echo "Такой пользователь не найден";
    exit();
}
//setcookie('user', $user['name'], time() + 3600, "/");
$mysql->close();
header ('Location: /coursework/authhtml.php');
?>