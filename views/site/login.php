
    <link rel="stylesheet" href="/pop-it-mvc/public/css/login.css">
    <title>Document</title>

<body>

    <h3><?= $message ?? ''; ?></h3>


    <form method="post">
        <h2>Авторизация</h2>
        <input placeholder="Логин" type="text" name="login">
        <input placeholder="Пароль" type="password" name="password">
        <button>Войти</button>
    </form>

</body>

