<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/main.css">
    <title>Pop it MVC</title>
</head>
<body>
<?php
if (!app()->auth::check()):
    ?>
    <header>
        <nav>
            <div class="nav">
                <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
                <a href="<?= app()->route->getUrl('/login') ?>">Авторизация</a>
            </div>

        </nav>
    </header>
    <main>
        <?= $content ?? '' ?>

    </main>
<?php
else:
    if (app()->auth::checkRole()):
        ?>
        <header>
            <nav>
                <div class="nav">
                    <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
                    <a href="<?= app()->route->getUrl('/signup') ?>">Добавление сотрудника</a>
                    <a href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
                </div>

            </nav>
        </header>
        <main>
            <?= $content ?? '' ?>
        </main>
    <?php
    else:
        ?>
        <header>
            <nav class="nav_employees">
                <a href="<?= app()->route->getUrl('/hello') ?>">Приёмы</a>
                <a href="<?= app()->route->getUrl('/doctors_1') ?>">Врачи</a>
                <a href="<?= app()->route->getUrl('/patients_1') ?>">Пачиенты</a>
                <a href="<?= app()->route->getUrl('/add_doctors') ?>">Добавление врача</a>
                <a href="<?= app()->route->getUrl('/add_patients') ?>">Добавление пачиента</a>
                <a href="<?= app()->route->getUrl('/logout') ?>">Выход </a>
            </nav>
        </header>
        <main>
            <?= $content ?? '' ?>
        </main>
    <?php
    endif;
    ?>

<?php
endif;
?>

</body>
</html>

