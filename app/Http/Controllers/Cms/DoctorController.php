<?php

namespace App\Http\Controllers\Cms;


use DateTime;
use DateTimeZone;
use Exception;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctors as Doctor;

class DoctorController extends Controller
{

    // private $doctorType = [ '1' => 'Doctor', '2' => 'Psychologist', '3' => 'Occupational Therapist'];
    private $doctorType = [ '1' => 'Doctor', '2' => 'Psychologist' ];

    public function index()
    {
        parent::chkSessionAuthen();
        $maxPerPage = 10;

        $sPage = $request->get("page");
        $page = empty($sPage) ? 1 : $sPage;
        $skip = ($page - 1) * $maxPerPage;
        
        // Get Doctor
        $allDoctor = Doctor::where(['is_delete' => 'N'])->count();
        $getDoctor = Doctor::where([['doctype', '<>', 3], ['is_active', '=', 'Y'], ['is_delete', '=', 'N']])
                            ->orderBy('update_date', 'DESC')
                            ->orderBy('order_no', 'DESC')
                            ->skip($skip)
                            ->take($maxPerPage)
                            ->get();
        $header = array(
            'picture'       => 'PICTURE',
            'name'          => 'NAME',
            'type'          => 'POSITION',
            'update_date'   => 'UPDATE DATE',
            'tools'         => 'TOOLS',
        );
        $pagination = array(
            'total_item'    => $allDoctor,
            'total_page'    => (empty($allDoctor) || $allDoctor <= 0) ? 0 : ceil($allDoctor / $maxPerPage),
            'page'          => $page,
            'item_per_page' => $maxPerPage,
        );

        return view('cms.doctor', [ 'header'        => $header, 
                                    'doctor'        => $getDoctor,
                                    'pagination'    => $pagination,
                                    'searchtype'    => $this->doctorType,
                                ]);
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
            DB::table('doctors')->where('id', $id)->update(array('is_active' => $switchStatus));
        }

        return redirect('/cms/doctor');
    }

    public function delete($id=0)
    {
        parent::chkSessionAuthen();
        if(!empty($id) && $id > 0) {
            DB::table('doctors')->where('id', $id)->update(array('is_delete' => 'Y'));
        }

        return redirect('/cms/doctor');
    }

}
