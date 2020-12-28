<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('cms.users', ['users' => $article ]);
    }

    public function actionAdd()
    {
        return view('cms.users_modify', ['users' => $article ]);
    }

    public function actionEdit()
    {
        return view('cms.users_modify', ['users' => $article ]);
    }

    public function actionDelete()
    {
        
    }

    public function actionSave()
    {
        
    }
}
