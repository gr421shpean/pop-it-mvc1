<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello']);
Route::add(['GET', 'POST'], '/signup', [Controller\Admin::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/doctors_1', [Controller\Site::class, 'doctors_1']);
Route::add(['GET', 'POST'], '/add_doctors', [Controller\Site::class, 'add_doctors']);
Route::add(['GET', 'POST'], '/add_patients', [Controller\Site::class, 'add_patients']);
Route::add(['GET', 'POST'], '/patients_1', [Controller\Site::class, 'patients_1']);
Route::add(['GET', 'POST'], '/appointment', [Controller\Site::class, 'appointment']);