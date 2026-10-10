<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Welcome extends BaseController
{
    public function index(): string
    {
        $model = new TaskModel();

        return view('welcome', [
            'title'  => 'Welcome',
            'active' => 'home',
            'tasks'  => $model->getToday(),
        ]);
    }
}
