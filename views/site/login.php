
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <div class="logout">
        <form method="post">
            <h2>Авторизация</h2>
            <label class="input">Логин <input type="text" name="login"></label>
            <label class="input">Пароль <input type="password" name="password"></label>
            <button class="button_nav"><a href="<?= app()->route->getUrl('/login') ?>" class="button_nav_link">Вход</a></button>

        </form>
    </div>

<?php endif;
