<?php

namespace App\Http\Middleware;
ี
use Closure;
use Illuminate\Support\Facades\App;

// https://dev.to/fadilxcoder/adding-multi-language-functionality-in-a-website-developed-in-laravel-4ech
// https://medium.com/@ultimateakash/how-to-create-multi-language-website-using-laravel-localization-29237f03393b
// https://stackoverflow.com/questions/40770071/how-to-add-multilanguage-to-laravel-5-3-using-session
// https://laraveldaily.com/multi-language-routes-and-locales-with-auth/
// https://shouts.dev/building-a-multilingual-website-with-laravel-localization

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->has('locale')) 
            App::setLocale(session()->get('locale'));

        return $next($request);
    }
}




class Language
{
    public function handle($request, Closure $next) 
    {       
        if(Session::has('locale')) // ตรวจดูว่ามีตัวแปร locale ใน session หรือไหม่
        {
            $locale = Session::get('locale'); // ถ้ามีอยู่ก็ดึงค่าออกมาเก็บไว้         
            App::setLocale($locale); // ตั้งค่าที่ได้รับมาให้เป็นภาษาหลัก
        }
        return $next($request); // ทำตามคำสั่งในลำดับต่อไป
    }
}

// ref: https://benzneststudios.com/blog/laravel/multi-language-on-laravel-5/
