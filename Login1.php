<?php
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'automaster'; //имя базы данных

$link = mysqli_connect($host, $user, $password, $db_name);

mysqli_query($link, "SET NAMES 'utf8'");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="body">
    <h2>Войдите в вашу учётную запись</h2>

<form class="log" action="login.php" method="POST">
    <div class="imgcontainer">
        <img src="img/man.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname">Ваш логин:</label>
        <input type="text" placeholder="Введите ваш логин" name="uname" required>

        <label for="psw">Пароль:</label>
        <input type="password" placeholder="Введите пароль" name="psw" required>

       <button type="submit">Войти</a></button>
     <a href="user_cab.html" class="vhod">
        <label>
            <input type="checkbox" checked="checked" name="remember"> Запомнить меня
        </label>
    </div>

    <div class="container bg">
        <button type="reset" class="cancelbtn"><a href="index.html">Выход</a> </button>
        
    </div>
</form>
</body>
</html>