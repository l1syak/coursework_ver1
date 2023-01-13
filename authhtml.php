<!DOCTYPE html>
<html>

<title>Форма авторизации</title>

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>
<link rel="stylesheet" href ="css/style.css">
<body>
<form action="exit.php">
    <button type="submit" class="btn btn-primary" style="margin-right: 10px; float: right; margin-top: 5px; font" ><font face="Arial Black">На главную</font></button>
</form>
<div class="container mt-2" style="width: 500px;">
<!--    div - формочка, в которой будет все поля ввода, кнопки и слова-->
    <?php
    if ($_COOKIE['user'] == ''):
    ?>
        <center> <h1>Форма авторизации</h1><br>
        <form action="/coursework/auth.php" , method="post">
<!--        action - файл, который будет обрабатывать все формы ниже-->
        <input type="text", class="form-control", name="login", id="login", placeholder="Введите логин">
        <br>
        <input type="password", class="form-control", name="password", id="password", placeholder="Введите пароль">
        <br>
        <button class="btn btn-primary" type="submit"><font face="Arial Black">Войти</font></button></center>
    </form>
    <?php else: header ('Location: /coursework/admin.php'); ?>
    <?php endif; ?>

</div>

</body>
</html>
