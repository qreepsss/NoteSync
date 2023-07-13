<?php
    $login = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $password = md5($password."DFKJASh2738");

    $mysql = new mysqli('localhost', 'root', '', 'note-register');
    

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    $user = $result->fetch_assoc();

    if ($user === null) {
        echo "Пользователя не существует";
        exit();
    }


    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();

    header('Location: /');

?>