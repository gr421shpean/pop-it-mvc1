
<link rel="stylesheet" href="/pop-it-mvc/public/css/doctors_1.css">
<div class="doctors_1">
    <h1>Список врачей</h1>
    <button class="appointment_button"><a href="<?= app()->route->getUrl('/add_doctors') ?>">Добавить врача</a></button>
    <div class="doctors_1_carts">

        <div class="doctors">
            <p>Болдырева</p>
            <p>Мария</p>
            <p>Александровна</p>
        </div>
        <div class="post">
            <p>Должность:</p>
            <p>Хирург</p>
        </div>
        <div class="post">
            <p>Специальность:</p>
            <p>Хирург</p>
        </div>
        <button class="appointment_button_1"><a href="<?= app()->route->getUrl('/doctors_2') ?>">Просмотр</a></button>
    </div>
    <div class="doctors_1_carts">

        <div class="doctors">
            <p>Иванов</p>
            <p>Иван</p>
            <p>Иванович</p>

        </div>
        <div class="post">
            <p>Должность:</p>
            <p>Хирург</p>
        </div>
        <div class="post">
            <p>Специальность:</p>
            <p>Хирург</p>
        </div>
        <button class="appointment_button_1"><a href="<?= app()->route->getUrl('/doctors_2') ?>">Просмотр</a></button>

    </div>
</div>
