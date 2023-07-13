<?php
    $login = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);


    //шифрование пароля

    $password = md5($password."DFKJASh2738");

    $mysql = new mysqli('localhost', 'root', '', 'note-register');
    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

    $mysql->close();

    header('Location: /');
    
    
    
?>