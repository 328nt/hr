<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Member;
use App\Video;
use App\News;
use App\Catalog;
use App\Department;

class FrontController extends Controller
{
    // public function member()
    // {
    //     $member = Member::All();
    //     return view('frontend.member.list',['member'=>$member]);
    // }
    public function member()
    {
        $members = Member::All();
        $departments = Department::All();
        $news = DB::table('news')->take(3)->get();
        // dd($members);
        return view('pages/index',['members'=>$members, 'departments'=>$departments, 'news'=>$news]);
    }

    public function news($id)
    {
        $news = News::find($id);
        $catalogs = Catalog::All();
        $newcatalogs =News::Where('idcatalog', $news->idcatalog)->take(3)->get();
        return view('pages.single',['news'=>$news, 'catalogs'=>$catalogs, 'newcatalogs'=>$newcatalogs]);
    }



    function postsearch(Request $rq)
    {
    	$search = $rq->search;
    	$member = Member::where('fullname','like', '%'.$search.'%')->orWhere('department', 'like', '%'.$search.'%')->take(20)->paginate(5);

    	return view('frontend.member.list', ['member'=>$member, 'search'=>$search]);
    }

    
    public function videos($id)
    {
        $videos = Video::Find($id);
        $videoall = Video::All();
        return view('frontend.videos.index',['videos'=>$videos, 'videoall'=>$videoall]);
    }

}
