<?php

namespace Controller;

use Src\Request;
use Model\Post;
use Src\View;
use Model\User;
use Src\Auth\Auth;



class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Добро пожаловать!']);
    }



//    public function signup(Request $request): string
//    {
//        if ($request->method === 'POST' && User::create($request->all())) {
//            app()->route->redirect('/hello');
//        }
//        return new View('site.signup');
//    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    public function doctors_1(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.doctors_1');
        }
        return new View('site.doctors_1');

    }
    public function add_doctors(): string
    {

        return new View('site.add_doctors');

    }
    public function add_patients(): string
    {

        return new View('site.add_patients');

    }
    public function patients_1(): string
    {

        return new View('site.patients_1');

    }
    public function appointment(): string
    {

        return new View('site.appointment');

    }
    public function doctors_2(Request $request): string
    {
        return new View('site.doctors_2');

    }
    public function add_appointment(Request $request): string
    {
        return new View('site.add_appointment');

    }
    public function patients_2(Request $request): string
    {
        return new View('site.patients_2');

    }





}
