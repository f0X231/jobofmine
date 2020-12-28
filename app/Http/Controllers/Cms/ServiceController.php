<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('cms.services', ['services' => $article ]);
    }

    public function actionAdd()
    {
        return view('cms.services_modify', ['services' => $article ]);
    }

    public function actionEdit()
    {
        return view('cms.services_modify', ['services' => $article ]);
    }

    public function actionDelete()
    {
        
    }

    public function actionSave()
    {
        
    }
}
