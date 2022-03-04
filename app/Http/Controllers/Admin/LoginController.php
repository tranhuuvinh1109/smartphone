<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserShop;
use App\Models\Country;
use App\Http\Requests\PostLoginRequest;

class LoginController extends Controller
{
    public function GetLogin(){
        return view("admin.login.login");
    }

    public function PostLogin(PostLoginRequest $request){
        $arr = [
            'email'=> $request->email, 'password'=> $request->password, 'level'=>1
        ];
        if(Auth::attempt($arr)){
            return redirect()->intended('admin/home');
        }else
        {
            return redirect('/login')->withError('Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
