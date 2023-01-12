<?php

namespace App\Http\Controllers;

use App\Models\LevelCourse;
use App\Utils\View;

class Dashboard
{
    public static function index()
    {
        $levelCourse = new LevelCourse;
        $levels = $levelCourse->select('','','')->fetchAll();
            return View::render('dashboard', compact('levels'));
    }

    public static function store()
    {
        $levelCourse = new LevelCourse;
        $levelCourse->insert([
            'title' => $_POST('title'),
            'slug' => $_POST('title'),
        ]);

        var_dump('Sucesso!');
        exit;
    }

    public static function edit()
    {
        $levelCourse = new LevelCourse;
        return View::render('dashboard', compact('levels'));

    }

    public static function show()
    {
        $levelCourse = new LevelCourse;

    }

    public static function update()
    {
        $levelCourse = new LevelCourse;

    }

    public static function delete()
    {
        $levelCourse = new LevelCourse;

    }
}