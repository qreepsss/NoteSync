<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
    <?php
        if($_COOKIE['user'] == ''):
    ?>
    <div class="wrapper">
        <div class="title_wrap">
            <h1 class="login_title">
                Log in
            </h1>
        </div>


        <form action="action/auth.php" method="post" >
            <label>Логин</label>
            <input type="text" name="email" placeholder="Введите логин">

            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">

            <div class="btn_wrap">
                <button type="submit">Войти</button>
            </div>
            
        </form>


        <p>У вас ещё нет аккаунта ? - <a href="register.html">зарегистрироваться</a></p>

        <?php else: ?> 

            <?php
                header('Location: ../HOME/home.php');
            ?>

        <?php endif; ?>

        
    </div>
</body>
</html>