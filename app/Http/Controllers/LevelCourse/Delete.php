<?php

namespace App\Http\Controllers\LevelCourse;

use App\Models\LevelCourse;

class Delete
{        
    public function __construct()
    {
        //$fields = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $fields['title'] = $_POST['title'];
        $this->validate($fields);
    }

    protected function validate($fields)
    {
        if ($fields == '') {
            return header('Location:', 'index.php');
        }
        //$data['title'] = json_encode($fields['title']);
        $this->store($fields);
    }
    
    protected function store($fields)
    {
        $table = new LevelCourse;
        $table->delete("id == 13");
        return ['success' => true];
    }
}

require __DIR__.'/../../../../vendor/autoload.php';
new Delete;