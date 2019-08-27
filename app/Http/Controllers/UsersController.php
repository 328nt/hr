<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function adminlogin()
    {
        return view('admin.login');
    }
    public function postadminlogin(Request $rq)
    {
        $this->validate($rq,
        [

        ],[

        ]);
        if(Auth::attempt(['email' => $rq->email, 'password' => $rq->password]))
        {
            return redirect('admin/member/list')->with('msg','Đăng nhập thành công');
        }
    }

    public function getadminlogout()
    {
        Auth::logout();
        return redirect('admin/login')->with('msg', 'ok anh ôi !!!');
    }
}
