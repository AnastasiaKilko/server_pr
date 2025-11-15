<?php

namespace Controller;

use Model\Doctor;
use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $doctors = Doctor::where('id', $request->id)->get();
        return (new View())->render('site.post', ['doctors' => $doctors]);//надо править здесь
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function add_doctor(Request $request): string
    {
        if ($request->method === 'POST' && Doctor::create($request->all())) {
            app()->route->redirect('/doctor');
        }
        return new View('site.add_doctor');
    }
    public function add_patient(Request $request): string
    {
        if ($request->method === 'POST' && Doctor::create($request->all())) {
            app()->route->redirect('/patient');
        }
        return new View('site.add_patient');
    }

}