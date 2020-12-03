<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner as Banner;
use App\Models\Articles as Articles;

class ArticleController extends Controller
{
    public function index()
    {
        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        $data = array();
        $results = Articles::orderBy('order_no', 'asc')->get();
        foreach($results as $key => $items) {
            $title      = unserialize($items->title);
            $slugTH     = $this->make_slug($title['th']);
            $slugEN     = $this->make_slug($title['en']);

            $data[$key]['id']           = $items->id;
            $data[$key]['title']        = $title;
            $data[$key]['thumbnail']    = unserialize($items->thumbnail);
            $data[$key]['slug']         = array(
                                                'th'    => 'articles/'.$items->id.'/'.$slugTH,
                                                'en'    => 'articles/'.$items->id.'/'.$slugEN,
                                            );
        }

        return view('pages.article', [  'data'      => $data,
                                        'services'  => $services,
                                        'doctor'    => $doctor  ]);
    }

    public function detail($id, $name)
    {
        // Get Banner
        $banner = parent::getBanner('article', $id);

        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        // Get Infomation
        $data = array();
        $result = Articles::where('id', $id)->get();
        foreach($result as $key => $item) {
            $data[$key]['id']           = $item->id;
            $data[$key]['title']        = unserialize($item->title);
            $data[$key]['detail']       = unserialize($item->detail);
            $data[$key]['credit']       = $item->credit;
        }

        return view('pages.articleDetail', ['banner'    => $banner, 
                                            'data'      => $data[0],
                                            'services'  => $services, 
                                            'doctor'    => $doctor   ]);
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
