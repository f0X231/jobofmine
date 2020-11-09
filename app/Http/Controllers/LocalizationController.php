<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function lang($locale)
    {
        App::setlocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

}

// ref: https://www.codechief.org/article/create-your-own-multilingual-website-in-laravel-7x
/*namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Http\Requests; 
use App\Http\Controllers\Controller; 

class LocalizationController extends Controller 
{ 
    public function index(Request $request,$locale) 
    { 
        //set's application's locale 
        app()->setLocale($locale); 
        //Gets the translated message and displays it 
        echo trans('lang.msg'); 
    } 
}*/
