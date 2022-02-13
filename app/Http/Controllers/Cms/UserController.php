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

    public function actionAdd()
    {
        //return view('cms.users_modify', ['users' => $article ]);
    }

    public function actionEdit()
    {
        //return view('cms.users_modify', ['users' => $article ]);
    }

    public function actionDelete()
    {
        
    }

    public function actionSave()
    {
        
    }
}
