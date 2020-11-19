<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors as Doctors;

class DoctorController extends Controller
{
    public function index()
    {
        $data = array();
        $results = Doctors::orderBy('order_no', 'asc')->get();
        foreach($results as $key => $person) {
            $name       = unserialize($person->name);
            $slugTH     = $this->make_slug($name['th']);
            $slugEN     = $this->make_slug($name['en']);

            $data[$key]['id']           = $person->id;
            $data[$key]['title']        = $name;
            $data[$key]['thumbnail']    = unserialize($person->thumbnail);
            $data[$key]['slug']         = array(
                                                'th'    => 'doctor/'.$person->id.'/'.$slugTH,
                                                'en'    => 'doctor/'.$person->id.'/'.$slugEN,
                                            );
        }

        return view('pages.doctor', ['data' => $data]);
    }

    public function profile($id, $name)
    {
        $data = array();
        $result = Doctors::where('id', $id)->get();
        foreach($result as $key => $person) {
            $data[$key]['id']           = $person->id;
            $data[$key]['name']         = unserialize($person->name);
            $data[$key]['license']      = unserialize($person->license);
            $data[$key]['position']     = unserialize($person->description);
            $data[$key]['department']   = unserialize($person->department);
            $data[$key]['education']    = unserialize($person->education);
            $data[$key]['work']         = unserialize($person->work);
            $data[$key]['research']     = unserialize($person->research);
            $data[$key]['extended']     = unserialize($person->extended);
            $data[$key]['picture']      = unserialize($person->picture);
        }

        return view('pages.doctorProfile', ['data' => $data[0]]);
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
