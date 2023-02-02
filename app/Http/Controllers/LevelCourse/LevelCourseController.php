<?php

namespace App\Http\Controllers\LevelCourse;

use App\Models\LevelCourse;
use App\Utils\View;

class LevelCourseController
{    
    /*
    public static function index()
    {
        $levelCourse = new LevelCourse;
        $levels = $levelCourse->select('','','')->fetchAll();
            return View::render('levels/index', compact('levels'));
    }
    */
    public function store()
    {
        /*
        $levelCourse = new LevelCourse;
        $levelCourse->insert([
            'title' => $_POST('title'),
            'slug' => $_POST('title'),
        ]);
        */
        echo 'Parabéns, chegou em store!';

    }

    public static function edit()
    {
        $levelCourse = new LevelCourse;

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