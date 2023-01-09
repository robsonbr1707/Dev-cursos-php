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
        $params = [
            0 => [
                'name' => 'teste 1',
                'sobre' => [
                    'title' => 'luiz'
                ]
            ],
            1 => [
                'name' => 'teste 2',
                'sobre' => [
                    'title' => 'luiz'
                ]
            ],
            ];
        return View::render('dashboard', compact('name', 'email', 'params'));
    }
}