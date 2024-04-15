<?php
namespace Controller;
use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Model\User;

class Admin {
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/signup');
        }
        return new View('site.signup');
    }
}
