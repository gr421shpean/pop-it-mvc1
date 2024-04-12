<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/login.css">
    <title>Document</title>
</head>
<body>

    <h3><?= $message ?? ''; ?></h3>


    <form method="post">
        <h2>Авторизация</h2>
        <input placeholder="Логин" type="text" name="login">
        <input placeholder="Пароль" type="password" name="password">
        <button>Войти</button>
    </form>

</body>
</html>
