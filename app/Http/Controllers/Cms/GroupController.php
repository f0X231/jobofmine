<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('cms.groups', ['groups' => $article ]);
    }

    public function actionAdd()
    {
        return view('cms.groups_modify', ['groups' => $article ]);
    }

    public function actionEdit()
    {
        return view('cms.groups_modify', ['groups' => $article ]);
    }

    public function actionDelete()
    {
        
    }

    public function actionSave()
    {
        
    }
}
