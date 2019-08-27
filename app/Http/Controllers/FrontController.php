<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Video;

class FrontController extends Controller
{
    public function member()
    {
        $member = Member::All();
        return view('frontend.member.list',['member'=>$member]);
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
