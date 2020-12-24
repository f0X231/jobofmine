<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery as Gallery;
use App\Models\Banner as Banner;

class AboutusController extends Controller
{
    public function index()
    {
        // Get Banner
        $banner = parent::getBanner('aboutus');

        // Get Doctor
        $doctor = parent::getListOfDoctor();
        
        // Get Services
        $services = parent::getListOfServices();

        // Get Gallery
        $data = array();
        $results = Gallery::where([['page', '=', 'aboutus'], ['is_active', '=', 'Y'], ['is_delete', '=', 'N']])
                            ->orderBy('order_no', 'asc')
                            ->get();
        foreach($results as $key => $items) {
            $data[$key]['id']           = $items->id;
            $data[$key]['image']        = '/images/gallery/'.$items->picture;
            $data[$key]['description']  = unserialize($items->description);
        }

        $seo = parent::getSEO(  'เกี่ยวกับเรา', 
                                'คลินิก JOY OF MINDS ซึ่งเป็นการรวมตัวกันของแพทย์ที่เชี่ยวชาญด้านจิตเวช คอยเป็นเพื่อนร่วมรับฟังและแก้ไขปัญหาไปพร้อมกับเคียงข้างคุณ ปรัชญา วิสัยทัศน์ พันธกิจ ของเรา', 
                                'คลินิก JOY OF MINDS, แพทย์ที่เชี่ยวชาญด้านจิตเวช, ปรัชญา, วิสัยทัศน์, พันธกิจ', 
                                config('global.sitename').$banner[0]['image']['th'],
                                config('global.sitename').'aboutus'    );

        return view('pages.aboutus', [  'seo'       => $seo,
                                        'banner'    => $banner,
                                        'gallery'   => $data,
                                        'services'  => $services,
                                        'doctor'    => $doctor ]);
    }
}
