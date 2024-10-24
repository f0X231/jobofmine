<?php

namespace App\Http\Controllers\Cms;

use DateTime;
use DateTimeZone;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Banner as Pano;

class PanoController extends Controller
{
    private $page = [
        'article'           => 'Articles',
        'doctor'            => 'Doctor',
        'employee-program'  => 'Employee Program',
        'pmanagment'        => 'Pmanagment',
        'services'          => 'Services',
        'home'              => 'Home',
        'aboutus'           => 'About Us'
    ];

    public function index(Request $request)
    {
        parent::chkSessionAuthen();
        $maxPerPage = 10;
        
        $sPage = $request->get("page");
        $page = empty($sPage) ? 1 : $sPage;
        $skip = ($page - 1) * $maxPerPage;
        
        $data = array();
        $allPanorama = Pano::where(['is_delete' => 'N'])->count();
        $results = Pano::where(['is_delete' => 'N'])->orderBy('update_date', 'DESC')->orderBy('id', 'DESC')->skip($skip)->take($maxPerPage)->get();
        foreach($results as $key => $items) {
            $data[$key]['id']           = $items->id;
            $data[$key]['title']        = $items->title;
            $data[$key]['page']         = $items->page;
            $data[$key]['pageid']       = $items->page_id;
            $data[$key]['filetype']     = $items->file_type;
            $data[$key]['sourcefile']   = unserialize($items->sourcefile);
            $data[$key]['link']         = $items->link;
            $data[$key]['startdate']    = $items->start_date;
            $data[$key]['enddate']      = $items->end_date;
            $data[$key]['updatedate']   = empty($items->update_date) ? $items->end_date : $items->update_date;
            $data[$key]['status']       = $items->is_active;
        }
        $header = array(
                        'no'            => 'NO',
                        'picture'       => 'PICTURE',
                        'title'         => 'TITLE',
                        'page'          => 'PAGE',
                        'start_date'    => 'START DATE',
                        'end_date'      => 'END DATE',
                        'update_date'   => 'UPDATE DATE',
                        'status'        => 'STATUS',
                        'tools'         => 'TOOLS',
                    );
        $pagination = array(
            'total_item'    => $allPanorama,
            'total_page'    => (empty($allPanorama) || $allPanorama <= 0) ? 0 : ceil($allPanorama / $maxPerPage),
            'page'          => $page,
            'item_per_page' => $maxPerPage,
        );
        $searchPage = array(
            'article'           => 'Articles',
            'doctor'            => 'Doctor',
            'employee-program'  => 'Employee Program',
            'pmanagment'        => 'Pmanagment',
            'services'          => 'Services',
            'home'              => 'Home',
            'aboutus'           => 'About Us',
        );

        return view('cms.panorama', [   'header'        => $header, 
                                        'panorama'      => $data, 
                                        'pagination'    => $pagination,
                                        'searchpage'    => $searchPage
                                    ]);
    }

    public function modify($id=0, $slug="")
    {
        parent::chkSessionAuthen();

        $getPano = array();
        if(!empty($id) && $id > 0) 
        {
            $getPanoDb = roomModel::where([['id', '=', $id], ['is_delete', '=', 'N']])->get()->toArray();

            if(!empty($getPanoDb))
                $getPano = $getPanoDb[0];
        }

        return view('cms.panorama_modify', [ 
                                            'panorama'      => $getPano,
                                            'searchpage'    => $this->page,
                                        ]);
    }

    public function process(Request $request)
    {
        /*$rules = [
                    'title_th'          => 'required|string|min:3|max:255',
                    'title_en'          => 'required|string|min:3|max:255',
                    'detailArticleThai' => 'required|string|min:3',
                    'detailArticleEng'  => 'required|string|min:3'
                ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
        }
        else {
            
        }*/

        $title = array(
                        'th'    => $_POST['title_th'],
                        'en'    => $_POST['title_en']
                    );
        $detail = array(
                        'th'    => $_POST['detailArticleThai'],
                        'en'    => $_POST['detailArticleThai']
                    );
        $thumbnailPic = array('th' => '', 'en' => '');

        if ($request->hasFile('picture_thai')) {
            if ($request->file('picture_thai')->isValid()) {
                $validated = $request->validate([
                                                    'name'  => 'string|max:40',
                                                    'image' => 'mimes:jpeg,png|max:2048',
                                                ]);
                $path = getcwd().'/images/article/thumbnail';
                $extension = $request->file('picture_thai')->extension();
                $thumbnailPic['th'] = $this->random_string(64).".".$extension;
                $request->file('picture_thai')->move($path, $thumbnailPic['th']);
                $thumbnailPic['th'] = '/images/article/thumbnail/' . $this->random_string(64).".".$extension;
            }
        }
        if ($request->hasFile('picture_eng')) {
            if ($request->file('picture_eng')->isValid()) {
                $validated = $request->validate([
                                                    'name'  => 'string|max:40',
                                                    'image' => 'mimes:jpeg,png|max:2048',
                                                ]);
                $path = getcwd().'/images/article/thumbnail';
                $extension = $request->file('picture_eng')->extension();
                $thumbnailPic['en'] = $this->random_string(64).".".$extension;
                $request->file('picture_eng')->move($path, $thumbnailPic['en']);
                $thumbnailPic['en'] = '/images/article/thumbnail/'.$this->random_string(64).".".$extension;
            }
        }

        try{
            $date = new \DateTime("now", new \DateTimeZone("Asia/Bangkok"));
            $article = new Articles;
            $article->order_no      = 1;
            $article->title         = serialize($title);
            $article->detail        = serialize($detail);
            $article->thumbnail     = serialize($thumbnailPic);
            $article->create_date   = $date->format('Y-m-d H:i:s');
            $article->create_by     = 'ADMIN';
            $article->update_date   = $date->format('Y-m-d H:i:s');
            $article->update_by     = 'ADMIN';

            $article->save();
            return redirect('/cms/article');
        }
        catch(Exception $e){
            return redirect('insert')->with('failed',"operation failed");
        }

        exit;
        /* ============ */
        parent::chkSessionAuthen();
        $date = new \DateTime("now", new \DateTimeZone("Asia/Bangkok"));

        $param = [];
        if(!empty($_POST)) {
            foreach ($_POST as $key => $value) {
                $param[$key] = $value;
            }
        }

        $processStatus = 0;
        if(empty($param['roomInputId'])) 
        {
            $resRoomId = 0;
            try{
                $newRoom = new roomModel;
                $newRoom->name          = $param['roomInputName'];
                $newRoom->size          = $param['roomInputSize'];
                $newRoom->is_active     = $param['roomInputStatus'];
                $newRoom->is_delete     = 'N';
                //$newRoom->created_by    = 'SYSTEM';
                $newRoom->save();
                $resRoomId = $newRoom->id;
            }
            catch(Exception $e) {
                $processStatus = -1;
                // return redirect('rooms')->with('failed', "operation failed");
            }

            return redirect('/cms/rooms');
        }
        else {
            $updateRoom = roomModel::where('id', $param['roomInputId'])->update([
                'name'          => $param['roomInputName'],
                'size'          => $param['roomInputSize'],
                'is_active'     => $param['roomInputStatus'],
                'updated_at'    => $date->format('Y-m-d H:i:s')
            ]);

            return redirect('/cms/rooms');
        }
        exit;
    }

    public function onoff($id=0, $status='')
    {
        parent::chkSessionAuthen();
        if(!empty($id) && $id > 0 && !empty($status) && in_array($status, ['on', 'off'])) {
            $switchStatus = ($status == 'on') ? 'N' : 'Y';
            DB::table('banner')->where('id', $id)->update(array('is_active' => $switchStatus));
        }

        return redirect('/cms/panorama');
    }

    public function delete($id=0)
    {
        parent::chkSessionAuthen();
        if(!empty($id) && $id > 0) {
            DB::table('banner')->where('id', $id)->update(array('is_delete' => 'Y'));
        }

        return redirect('/cms/panorama');
    }

    

    protected function random_string($length) 
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) 
            $key .= $keys[array_rand($keys)];

        return $key;
    }

}
