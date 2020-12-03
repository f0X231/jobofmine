<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors as Doctors;

class DoctorController extends Controller
{
    public function index()
    {
        // Get Banner
        $banner = parent::getBanner('doctor');

        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        return view('pages.doctor', [   'banner'    => $banner,
                                        'services'  => $services, 
                                        'doctor'    => $doctor        ]);
    }

    public function profile($id, $name)
    {
        // Get Banner
        $banner = parent::getBanner('doctor');

        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        // Get Infomation of Doctor
        $data = array();
        $result = Doctors::where('id', $id)->get();
        foreach($result as $key => $person) {
            $data[$key]['id']           = $person->id;
            $data[$key]['name']         = unserialize($person->name);
            $data[$key]['nickname']     = $person->nickname;
            $data[$key]['license']      = $person->license;
            $data[$key]['position']     = unserialize($person->description);
            $data[$key]['department']   = unserialize($person->department);
            $data[$key]['education']    = unserialize($person->education);
            $data[$key]['work']         = unserialize($person->work);
            $data[$key]['extended']     = unserialize($person->extended);
            $data[$key]['picture']      = $person->picture;
        }

        return view('pages.doctorProfile', [    'banner'    => $banner, 
                                                'data'      => $data[0],
                                                'services'  => $services,
                                                'doctor'    => $doctor      ]);
    }

    private function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
