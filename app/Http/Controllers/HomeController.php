<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Models\Banner as Banner;
use App\Models\Doctors as Doctors;
use App\Models\Articles as Articles;

class HomeController extends Controller
{
    public function index()
    {
        // Get Banner
        $banner = parent::getBanner('home');

        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        // Get Article
        $data = array();
        $article = Articles::where([   ['is_home', '=', 'Y'], 
                                        ['is_active', '=', 'Y'], 
                                        ['is_delete', '=', 'N'] ])
                                ->orderBy('order_no', 'asc')
                                ->get();
        foreach($article as $key => $service) {
            $title      = unserialize($service->title);
            $slugTH     = $this->make_slug($title['th']);
            $slugEN     = $this->make_slug($title['en']);

            $data[$key]['id']           = $service->id;
            $data[$key]['title']        = $title;
            $data[$key]['description']  = '';
            $data[$key]['thumbnail']    = unserialize($service->thumbnail);
            $data[$key]['slug']         = array(
                                                'th'    => 'articles/'.$service->id.'/'.$slugTH,
                                                'en'    => 'articles/'.$service->id.'/'.$slugEN,
                                            );
        }
        // Set SEO
        $seo = parent::getSEO(  'หน้าแรก', 
                                'คลินิก JOY OF MINDS ซึ่งเป็นการรวมตัวกันของแพทย์ที่เชี่ยวชาญด้านจิตเวช คอยเป็นเพื่อนร่วมรับฟังและแก้ไขปัญหาไปพร้อมกับเคียงข้างคุณ', 
                                'คลินิก JOY OF MINDS, แพทย์ที่เชี่ยวชาญด้านจิตเวช', 
                                config('global.sitename').$banner[0]['image']['th'],
                                config('global.sitename').'home'    );

        return view('pages.home', [ 'seo'       => $seo,
                                    'banner'    => $banner, 
                                    'doctor'    => $doctor, 
                                    'services'  => $services,
                                    'data'      => $data    ]);
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
