<?php

namespace App\Http\Controllers;

use App\News;
use App\Catalog;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::All();
        return view('admin/news/list', ['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogs = Catalog::All();
        return view('admin/news/add', ['catalogs'=>$catalogs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

        ],[

        ]);
        $news = new News;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->idcatalog = $request->idcatalog;
        
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $save = str_random(3)."-".$name;
            while (file_exists("upload/news/".$save)){
                $save = str_random(3)."-".$name;
            }
            $file->move("upload/news", $save);
            $news->image = $save;
        }
        else
        {
            $news->image ="";
        }
        $news->save();
        return redirect('admin/news/list')->with('msg','Them thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogs = Catalog::All();
        $news = News::find($id);
        return view('admin/news/edit',['catalogs'=>$catalogs, 'news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $news = News::Find($id);
        $this->validate($request, [

        ],[

        ]);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->idcatalog = $request->idcatalog;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $save = str_random(3)."-".$name;
            while (file_exists("upload/news/".$save)) {
                $save = str_random(3)."-".$name;
            }
            $file->move("upload/news", $save);
            unlink("upload/news/".$news->image);
            $news->image = $save;
        }
        $news->save();
        return redirect('admin/news/edit/'.$id)->with('msg','sửa tin tức thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::Find($id);
        $news->delete();
        return redirect('admin/news/list')->with('msg','xóa bài viết thành công');
    }
}
