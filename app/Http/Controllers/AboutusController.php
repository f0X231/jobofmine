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
        $banner = array();
        $results = Banner::where([['page', '=', 'aboutus'], ['is_active', '=', 'Y'], ['is_delete', '=', 'N']])
                            ->orderBy('order_no', 'asc')
                            ->get();
        foreach($results as $key => $items) {
            $banner[$key]['id']           = $items->id;
            $banner[$key]['image']        = unserialize($items->sourcefile);
            $banner[$key]['description']  = $items->title;
            $banner[$key]['link']         = $items->link;
        }   

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

        return view('pages.aboutus', ['banner' => $banner, 'gallery' => $data]);
    }
}
