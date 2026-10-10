<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();

        return view('profile', [
            'title'  => 'Profile',
            'active' => 'profile',
            'user'   => $model->getDemoUser(),
        ]);
    }
}
