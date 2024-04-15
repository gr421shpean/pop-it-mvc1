
<link rel="stylesheet" href="/pop-it-mvc/public/css/patients_1.css">
<div class="patients_1">
    <h1>Список пациентов</h1>
    <button class="appointment_button"><a href="<?= app()->route->getUrl('/add_patients') ?>">Добавить пациента</a></button>
    <div class="patients_1_carts">

        <p>Иванов</p>
        <p>Иван</p>
        <p>Иванович</p>
        <p>01.01.2001</p>
        <button class="appointment_button_1"><a href="<?= app()->route->getUrl('/patients_2') ?>">Просмотр</a></button>
    </div>
    <div class="patients_1_carts">

        <p>Иванов</p>
        <p>Иван</p>
        <p>Иванович</p>
        <p>01.01.2001</p>
        <button class="appointment_button_1"><a href="<?= app()->route->getUrl('/patients_2') ?>">Просмотр</a></button>
    </div>
</div>