<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Banner as Banner;
use App\Models\Doctors as Doctors;
use App\Models\Services as Services;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function getSEO( $title=null, $descriptions=null, $keywords=null, $images=null, $type=null) 
    {
        $seo = $seo = array(
                            'title'         => empty($title)?'JOY OF MINDS by Masterwork clinic':$title,
                            'descriptions'  => empty($descriptions)?'JOY OF MINDS by Masterwork clinic ทีมแพทย์ผู้เชี่ยวชาญด้านการดูแลรักษาปัญหาด้านสุขภาพจิตโดยเฉพาะ':$descriptions,
                            'keywords'      => empty($keywords)?'JOY OF MINDS,รักษาปัญหาด้านสุขภาพจิตโดยเฉพาะ, ผู้เชี่ยวชาญด้านการดูแลรักษาปัญหาด้านสุขภาพจิต':$keywords,
                            'images'        => empty($images)?'http://joyofminds.com/images/banner/banner_home_01.jpg':$images,
                            'type'          => empty($type)?'article':$type
                        );
        return $seo;
    }

    public function getBanner($namePage, $pageId=null) 
    {
        // Get Banner
        $banner = array();
        if(!is_null($pageId)) {
            $results = Banner::where([  ['page', '=', $namePage],
                                        ['page_id', '=', $pageId], 
                                        ['is_active', '=', 'Y'], 
                                        ['is_delete', '=', 'N']])
                                ->orderBy('order_no', 'asc')
                                ->get();
        }
        else {
            $results = Banner::where([  ['page', '=', $namePage],
                                        ['is_active', '=', 'Y'], 
                                        ['is_delete', '=', 'N']])
                                ->orderBy('order_no', 'asc')
                                ->get();
        }

        foreach($results as $key => $items) {
            $banner[$key]['id']           = $items->id;
            $banner[$key]['image']        = unserialize($items->sourcefile);
            $banner[$key]['description']  = $items->title;
            $banner[$key]['link']         = $items->link;
        } 

        return $banner;
    }

    public function getListOfDoctor()
    {
        $data = array();
        $results = Doctors::where([['is_active', '=', 'Y'], ['is_delete', '=', 'N']])
                            ->orderBy('order_no', 'asc')
                            ->get();
        foreach($results as $key => $person) {
            $name       = unserialize($person->name);
            $slugTH     = $this->make_slug($name['th']);
            $slugEN     = $this->make_slug($name['en']);

            $data[$key]['id']           = $person->id;
            $data[$key]['title']        = $name;
            $data[$key]['thumbnail']    = $person->thumbnail;
            $data[$key]['slug']         = array(
                                                'th'    => '/doctor/'.$person->id.'/'.$slugTH,
                                                'en'    => '/doctor/'.$person->id.'/'.$slugEN,
                                            );
        }

        return $data;
    }

    public function getListOfServices() 
    {
        $data = array();
        $services = Services::orderBy('order_no', 'asc')->get();
        foreach($services as $key => $service) {
            $title      = unserialize($service->title);
            $slugTH     = $this->make_slug($title['th']);
            $slugEN     = $this->make_slug($title['en']);

            $data[$key]['id']           = $service->id;
            $data[$key]['title']        = $title;
            $data[$key]['thumbnail']    = unserialize($service->thumbnail);
            $data[$key]['slug']         = array(
                                                'th'    => '/services/'.$service->id.'/'.$slugTH,
                                                'en'    => '/services/'.$service->id.'/'.$slugEN,
                                            );
        }

        return $data;
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
