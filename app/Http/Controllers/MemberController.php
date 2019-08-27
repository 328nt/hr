<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getlist()
    {
        $member = Member::All();
        return view('admin/member/list', ['member'=>$member]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getadd()
    {
        return view('admin.member.add');
    }
    public function postadd(Request $rq)
    {
        $member = new Member;
        $member->email = $rq->email;
        $member->fullname = $rq->fullname;
        $member->position = $rq->position;
        $member->phone = $rq->phone;
        $member->dayin = $rq->dayin;
        $member->department = $rq->department;
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
        	$name = $file->getClientOriginalName();
            $image = str_random(3)."-".$name;
            while (file_exists("upload/member".$image))
            {
                $image = str_random(3)."-".$name;
            }
            $file->move("upload/member",$image);
            $member->image = $image;
        }
        else {
            $member->image = "";
        }
        $member->save();
        return redirect('admin/member/add')->with('msg', 'thêm nhân viên thành công');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getedit($id)
    {
        $member = Member::find($id);
        return view('admin/member/edit', ['member'=>$member]);
    }
    public function postedit(Request $rq, $id)
    {
        $member = Member::find($id);
        $member->email = $rq->email;
        $member->fullname = $rq->fullname;
        $member->position = $rq->position;
        $member->phone = $rq->phone;
        $member->dayin = $rq->dayin;
        $member->department = $rq->department;
        if($rq->hasFile('image'))
        {
            $file = $rq->file('image');
        	$name = $file->getClientOriginalName();
            $image = str_random(3)."-".$name;
            while (file_exists("upload/member".$image))
            {
                $image = str_random(3)."-".$name;
            }
            $file->move("upload/member",$image);
        	unlink("upload/member/".$member->image);
            $member->image = $image;
        }
        $member->save();
        return redirect('admin/member/edit/'.$id)->with('msg', 'sửa nhân viên thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function getdelete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('admin/member/list')->with('msg','đã xóa nhân viên thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
