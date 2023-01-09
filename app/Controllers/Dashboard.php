<?php

namespace App\Controllers;

use \App\Traits\View;

class Dashboard
{
    public static function index()
    {
        $name = 'Robisu o brabo';
        $email = 'testano@gmail.com';
        $teste = 'test';
        return View::render('dashboard', compact('name', 'email'));
    }
}