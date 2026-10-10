<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $model = new TaskModel();

        return view('tasks', [
            'title'  => 'Task List',
            'active' => 'tasks',
            'tasks'  => $model->getAllOrdered(),
        ]);
    }
}
