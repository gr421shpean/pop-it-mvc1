<link rel="stylesheet" href="/pop-it-mvc/public/css/hello.css">
<?php
if (!app()->auth::check()):
    ?>
    <!--Возвращение данных стартовой страницы main/php-->
    <div class="start_content">
        <h1>Войдите под своими учётными данными</h1>
        <button class="appointment_button"><a href="<?= app()->route->getUrl('/login') ?>">Авторизация</a></button>



    </div>
<?php
else:
    if (!app()->auth::checkRole()):
        ?>
        <h1><?= $message ?? ''; ?></h1>

    <?php
    else:
        ?>
        <h1><?= $message ?? ''; ?></h1>
    <?php
    endif;
    ?>

<?php
endif;
?>
