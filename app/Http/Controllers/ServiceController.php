<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Services as Services;
use App\Models\Gallery as Gallery;

class ServiceController extends Controller
{
    public function index()
    {
        // Get Banner
        $id = 0;
        $banner = parent::getBanner('services', $id);

        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        // Get list of Services
        $data = array();
        $servicess = Services::orderBy('order_no', 'asc')->get();
        foreach($servicess as $key => $service) {
            $title      = unserialize($service->title);
            $slugTH     = $this->make_slug($title['th']);
            $slugEN     = $this->make_slug($title['en']);

            $data[$key]['id']           = $service->id;
            $data[$key]['title']        = $title;
            $data[$key]['thumbnail']    = unserialize($service->thumbnail);
            $data[$key]['slug']         = array(
                                                'th'    => 'services/'.$service->id.'/'.$slugTH,
                                                'en'    => 'services/'.$service->id.'/'.$slugEN,
                                            );
        }

        $seo = parent::getSEO(  'services', 
                                'คุณจะได้พูดคุยเล่าเรื่องราวต่างๆ หรือปรึกษาปัญหาที่มีอยู่ในบรรยากาศที่อบอุ่น โดยแพทย์ผู้เชี่ยวชาญด้านสุขภาพจิตที่พร้อมเป็นเพื่อนที่รับฟังไปกับคุณ เน้นการพูดคุย ทำความเข้าใจ และหาทางแก้ปัญหาไปพร้อมกัน สถานที่ตั้งอยู่ใจกลางเมือง ศูนย์กลางการทำงานของชาวกรุงเทพ เดินทางมาพูดคุยกันได้อย่างสะดวกสบาย', 
                                'คลินิก JOY OF MINDS, แพทย์ที่เชี่ยวชาญด้านจิตเวช, services, บริการ', 
                                config('global.sitename').$banner[0]['image']['th'],
                                config('global.sitename').'services'    );

        return view('pages.service', [  'seo'       => $seo,
                                        'banner'    => $banner,
                                        'data'      => $data,
                                        'services'  => $services,
                                        'doctor'    => $doctor       ]);
    }

    public function detail($id, $name)
    {
        // Get Banner
        $banner = parent::getBanner('services', $id);

        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        // Get info of Services
        $data = array();
        $result = Services::where('id', $id)->get();
        foreach($result as $key => $item) {
            $data[$key]['id']           = $item->id;
            $data[$key]['title']        = unserialize($item->title);
            $description                = unserialize($item->description);
            $data[$key]['description']['th']    =  html_entity_decode($description['th']);
            $data[$key]['description']['en']    =  html_entity_decode($description['en']);
            $data[$key]['detail']       = unserialize($item->detail);
            $data[$key]['banner']       = unserialize($item->banner);
        }

        $gallery = array();
        $result = Gallery::where([['page', '=', 'services'], ['page_id', '=', $id]])
                            ->orderBy('order_no', 'ASC')
                            ->get();
        foreach($result as $key => $item) {
            $gallery[$key]['id']            = $item->id;
            $gallery[$key]['image']         = '/images/gallery/'.$item->picture;
            $gallery[$key]['description']   = $item->description;
        }

        $seo = parent::getSEO(  $data[0]['title']['th'], 
                                'คุณจะได้พูดคุยเล่าเรื่องราวต่างๆ หรือปรึกษาปัญหาที่มีอยู่ในบรรยากาศที่อบอุ่น โดยแพทย์ผู้เชี่ยวชาญด้านสุขภาพจิตที่พร้อมเป็นเพื่อนที่รับฟังไปกับคุณ เน้นการพูดคุย ทำความเข้าใจ และหาทางแก้ปัญหาไปพร้อมกัน สถานที่ตั้งอยู่ใจกลางเมือง ศูนย์กลางการทำงานของชาวกรุงเทพ เดินทางมาพูดคุยกันได้อย่างสะดวกสบาย', 
                                'คลินิก JOY OF MINDS, แพทย์ที่เชี่ยวชาญด้านจิตเวช, services, บริการ, '. $data[0]['title']['th'], 
                                config('global.sitename').$banner[0]['image']['th'],
                                config('global.sitename').'services/'.$data[0]['id'].'/'.$this->make_slug($data[0]['title']['th'])    );

        return view('pages.serviceDetail', [    'seo'       => $seo,
                                                'banner'    => $banner,
                                                'data'      => $data[0], 
                                                'gallery'   => $gallery,
                                                'services'  => $services, 
                                                'doctor'    => $doctor     ]);
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
