<?php

namespace Controller;

use Model\Doctor;
use Model\Doctor_Position;
use Model\Doctor_Specialty;
use Model\Patient;
use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site
{
//    public function index(Request $request): string
//    {
//        $doctors = Doctor::where('id', $request->id)->get();
//        return (new View())->render('site.doctor', ['doctors' => $doctors]);//надо править здесь
//    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if($request->method == 'POST') {
            $errors = [];
            if(empty($request->get('surname'))) $errors['surname'] = 'Заполни Фамилию';
            if(empty($request->get('name'))) $errors['name'] = 'Заполни Имя';
            if(empty($request->get('login'))) $errors['login'] = 'Заполни Логин';
            if(empty($request->get('password')))  $errors['password'] = 'Заполни Пароль';
            if(!empty($errors))
            {
                return new View('site.signup', ['errors' => $errors]);
            }
            else {
            User::create($request->all());
            app()->route->redirect('/');
            }
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        if ($request->method == 'POST') {
            $errors = [];
            if (empty($request->get('login'))) $errors['login'] = 'Заполни Логин';
            if (empty($request->get('password'))) $errors['password'] = 'Заполни Пароль';
            if (!empty($errors)) {
                return new View('site.login', ['errors' => $errors]);
            }
            if ($request->method === 'GET') {
                return new View('site.login');
            }
            if (Auth::attempt($request->all())) {
                app()->route->redirect('/');
            }
            return new View('site.login', ['message' => 'Неправильные логин или пароль']);
        }
        return new View('site.login');
    }

    public function logout(): void {
        Auth::logout();
        app()->route->redirect('/');
    }

    public function add_doctor(Request $request): string
    {
        if ($request->method === 'POST') {
            $res = Doctor::create($request->all());
            Doctor_Specialty::create(['doctors_id' => $res->toArray()['id'], 'specialties_id' => $request->get('specialty')]);
            Doctor_Position::create(['doctors_id' => $res->toArray()['id'], 'positions_id' => $request->get('position')]);
            app()->route->redirect('/doctors');
        }
        return new View('site.add_doctor');
    }
    public function add_patient(Request $request): string
    {
        if ($request->method === 'POST' && Patient::create($request->all())) {
            app()->route->redirect('/patients');
        }
        return new View('site.add_patient');
    }
    public function doctor(Request $request): string
    {
        $doctors = Doctor::all();
        return (new View())->render('site.doctors', ['doctors' => $doctors]);
    }
    public function patient(Request $request): string
    {
        $patients = Patient::all();
        return (new View())->render('site.patients', ['patients' => $patients]);
    }
}