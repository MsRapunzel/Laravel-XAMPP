<?php

namespace App\Http\Controllers;

class RoutesController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function signIn()
    {
        return view('signin');
    }

    public function logIn()
    {
        return view('login');
    }

    public function user($id)
    {
        return view('user', ['id' => $id]);
    }
}
