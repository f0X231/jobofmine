<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Models\Banner as Banner;
use App\Models\Doctors as Doctors;
use App\Models\Articles as Articles;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $services = Articles::where([   ['is_home', '=', 'Y'], 
                                        ['is_active', '=', 'Y'], 
                                        ['is_delete', '=', 'N'] ])
                                ->orderBy('order_no', 'asc')
                                ->get();
        foreach($services as $key => $service) {
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
        
        return view('pages.home', [ 'banner'    => $banner, 
                                    'doctor'    => $doctor, 
                                    'services'  => $services,
                                    'services'  => $data    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
