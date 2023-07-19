<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner as Banner;
use App\Models\Articles as Articles;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // Get Param
        $itemPerPage = 12;
        $prevPage = $nextPage = 0;
        $prev2Page = $next2Page = 0;
        $cpage = empty($request->page) ? 1 : $request->page;


        // Get Doctor
        $doctor = parent::getListOfDoctor();

        // Get Services
        $services = parent::getListOfServices();

        $data = array();
        $resultsAll = Articles::orderBy('order_no', 'desc')->count();
        $results = Articles::orderBy('order_no', 'desc')->offset(($cpage - 1) * $itemPerPage)->limit($itemPerPage)->get();
        $total = $resultsAll;
        $maxPage = ceil($total/$itemPerPage);
        
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

        if($cpage <= 1) {
            $prev2Page = 0;
            $prevPage = 0;
        
            if($maxPage <= 1) {
                $nextPage = 0;
                $next2Page = 0;
            }
            else if($maxPage >= 3) {
                $nextPage = $cpage + 1;
                $next2Page = $cpage + 2;
            }
            else if($maxPage > 1 && $maxPage < 3) {
                $nextPage = $cpage + 1;
                $next2Page = 0;
            }
        }
        else if($cpage > 1 && $cpage <= $maxPage) 
        {
            if($cpage == $maxPage) {
                $nextPage = 0;
                $next2Page = 0;
                
                if($maxPage > 3) {
                    $prev2Page = $maxPage - 2;
                    $prevPage = $maxPage - 1;
                }
                else if($maxPage == 3) {
                    $prev2Page = 0;
                    $prevPage = 1;
                }
                else if($maxPage == 2) {
                    $prev2Page = 0;
                    $prevPage = 0;
                }
            }
            else if($cpage < $maxPage) 
            {
                $prev2Page = $cpage - 2;
                $prevPage = $cpage - 1;

                if($cpage == ($maxPage-1)) {
                    $nextPage = $maxPage;
                    $next2Page = 0;
                }
                else if($cpage == ($maxPage-2)) {
                    $nextPage = $maxPage - 1;
                    $next2Page = $maxPage;
                }
                else if($cpage < ($maxPage-2)) {
                    $nextPage = $cpage + 1;
                    $next2Page = $cpage + 2;
                }
            }
        }
       


        $seo = parent::getSEO(  'articles', 
                                null, 
                                'คลินิก JOY OF MINDS, แพทย์ที่เชี่ยวชาญด้านจิตเวช, บทความเกี่ยวกับทางการแพทย์ด้านจิตเวช', 
                                null,
                                config('global.sitename').'articles' );

        return view('pages.article', [  'seo'           => $seo,
                                        'total'         => $total,
                                        'data'          => $data,
                                        'services'      => $services,
                                        'doctor'        => $doctor,
                                        'pagelase'      => $maxPage,
                                        'pageprev'      => $prevPage,
                                        'page2prev'     => $prev2Page,
                                        'pagecurrent'   => $cpage,
                                        'pagenext'      => $nextPage,
                                        'page2next'     => $next2Page
                                    ]);
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

        $seo = parent::getSEO(  $data[0]['title']['th'], 
                                $data[0]['title']['th'], 
                                'คลินิก JOY OF MINDS, แพทย์ที่เชี่ยวชาญด้านจิตเวช, '. $data[0]['title']['th'], 
                                config('global.sitename').$banner[0]['image']['th'],
                                config('global.sitename').'articles/'.$data[0]['id'].'/'.$this->make_slug($data[0]['title']['th'])    );
               
        return view('pages.articleDetail', ['seo'       => $seo,
                                            'banner'    => $banner, 
                                            'data'      => $data[0],
                                            'services'  => $services, 
                                            'doctor'    => $doctor   ]);
    }

    public function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}
