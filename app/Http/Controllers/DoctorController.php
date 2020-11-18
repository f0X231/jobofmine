<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('pages.doctor');
    }

    public function profile($id, $name)
    {
        return view('pages.doctorProfile');
    }
}
