<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('pages.article');
    }

    public function detail()
    {
        return view('pages.articleDetail');
    }
}
