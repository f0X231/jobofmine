<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services as Services;
use App\Models\Gallery as Gallery;

class ServiceController extends Controller
{
    public function index()
    {
        parent::chkSessionAuthen();
        
        // Get list of Services
        $data = array();
        $services = Services::orderBy('order_no', 'asc')->get();
        foreach($services as $key => $items) {
            $title      = unserialize($items->title);
            $slugTH     = $this->make_slug($title['th']);
            $slugEN     = $this->make_slug($title['en']);

            $data[$key]['id']           = $items->id;
            $data[$key]['title']        = $title;
            $data[$key]['thumbnail']    = unserialize($items->thumbnail);
            $data[$key]['slug']         = array(
                                                'th'    => 'services/'.$items->id.'/'.$slugTH,
                                                'en'    => 'services/'.$items->id.'/'.$slugEN,
                                            );
            $data[$key]['status']       = $items->is_active;
        }

        return view('cms.services', ['services' => $data ]);
    }

    public function modify($id=0, $slug="")
    {
        parent::chkSessionAuthen();
    }
    
    public function process(Request $request)
    {
    }

    public function onoff($id=0, $status='')
    {
        parent::chkSessionAuthen();
        if(!empty($id) && $id > 0 && !empty($status) && in_array($status, ['on', 'off'])) {
            $switchStatus = ($status == 'on') ? 'N' : 'Y';
            DB::table('room')->where('id', $id)->update(array('is_active' => $switchStatus));
        }

        return redirect('/cms/rooms');
        //return view('cms.articles_modify', ['article' => $article ]);
    }

    public function delete($id=0)
    {
        parent::chkSessionAuthen();
        if(!empty($id) && $id > 0) {
            DB::table('room')->where('id', $id)->update(array('is_delete' => 'Y'));
        }

        return redirect('/cms/rooms');
    }
}
