<?php
if (!app()->auth::check()):
    ?>
    <div class="logout">
        <form method="post">
            <h2>Авторизация</h2>
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <button class="button_nav"><a href="<?= app()->route->getUrl('/login') ?>" class="button_nav_link">Вход</a></button>

        </form>
    </div>
<?php
else:
    if (app()->auth::checkRole()):
        ?>
        <div class="content_main_admin">
            <div class="add_employee">
                <h1>Добавьте новые данные</h1>
                <div class="add_employee_info">
                    <p>Добавьте нового сотрудника</p>
                    <button class="button_add"><a href="<?= app()->route->getUrl('/addEmployees') ?>" class="button_add_link">Добавить</a></button>
                </div>
            </div>
        </div>
    <?php

    endif;
    ?>

<?php
endif;
?>