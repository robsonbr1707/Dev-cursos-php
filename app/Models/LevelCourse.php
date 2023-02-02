<?php

namespace App\Models;

class LevelCourse extends Model
{
    public $title, $slug;
    protected $table = 'level_courses';

    public function __construct()
    {
        $this->table = 'level_courses';
    }
    
}