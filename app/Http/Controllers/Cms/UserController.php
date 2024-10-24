<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User as User;

class UserController extends Controller
{
    public function index()
    {
        $data = array();
        $allUser = User::where([ 
                                ['is_active', '=', 'Y'], 
                                ['is_delete', '=', 'N'] ])->get();
        print_r($allUser );
exit;
        return view('cms.users', []);
    }


    public function modify()
    {
    }



    public function process()
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
