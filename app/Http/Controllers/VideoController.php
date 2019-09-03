<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::All();
        return view('admin/videos/list', ['videos'=>$videos]);
        $name = $this->choice('What is your name?', ['Taylor', 'Dayle'], $defaultIndex);
        dd($videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/videos/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [

        ],[

        ]);
        $videos = new Video();
        $videos->title = $request->title;
        $videos->description = $request->description;
        $videos->content = $request->content;
        $videos->link = $request->link;
        $videos->save();
        
        return redirect('admin/video/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $videos= Video::Find($id);
        return view('admin/videos/edit', ['videos'=>$videos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,
        [

        ],[

        ]);
        $videos = Video::find($id);
        $videos->title = $request->title;
        $videos->description = $request->description;
        $videos->content = $request->content;
        $videos->link = $request->link;
        $videos->save();

        return redirect('admin/video/edit/'.$id)->with('msg','edit success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $videos=Video::Find($id);
        $videos->delete();
        return redirect('admin/videos/list')->with('msg','delete success');
    }
}
