<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.service');
    }

    public function detail()
    {
        return view('pages.serviceDetail');
    }
}
