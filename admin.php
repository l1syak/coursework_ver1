<!DOCTYPE html>
<html>

<title>Администратор</title>

<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>
<link rel="stylesheet" href ="css/style.css">
<body>
<form action="exit.php">
    <button type="submit" class="btn btn-primary" style="margin-right: 10px; float: right; margin-top: 5px; font" ><font face="Arial Black">Выйти</font></button>
</form>

<div class="container mt-2" style="width: 500px;">
        <center> <h1>Вы - администратор</h1><br>
            <div class="new_moder" style="
            padding: 10px;
            width: auto;
            height: auto;
            background: #FFF;
            -webkit-box-shadow: 0 1px 3px;rgba(0,0,0, .13);">
            <center><h2>Вы можете добавить модератора:</h2></center>
            <form action="/coursework/register.php" , method="post">
                <input type="text", class="form-control", name="login", id="login", placeholder="Введите логин">
                <br>
                <input type="text", class="form-control", name="name", id="name", placeholder="Введите имя">
                <br>
                <input type="password", class="form-control", name="password", id="password", placeholder="Введите пароль">
                <br>
                <button class="btn btn-primary" type="submit">Зарегистрировать нового модератора</button></center>
        </form>
    </div>

</div>

</body>
</html>
