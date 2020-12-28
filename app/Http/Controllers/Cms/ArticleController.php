<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('cms.articles', ['article' => $article ]);
    }

    public function actionAdd()
    {
        return view('cms.articles_modify', ['article' => $article ]);
    }

    public function actionEdit()
    {
        return view('cms.articles_modify', ['article' => $article ]);
    }

    public function actionDelete()
    {
        
    }

    public function actionSave()
    {
        
    }
}
