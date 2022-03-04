<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserShop;
use App\Http\Requests\PostLoginRequest;

class LoginController extends Controller
{
    public function Login(){
        return view('frontend.login.login');
    }
    public function PostLogin(PostLoginRequest $request){
        $arr = [
            'email'=> $request->email, 'password'=> $request->password,
        ];
        if(Auth::attempt($arr)){
            return redirect()->intended('frontend/home');
        }else
        {
            return redirect()->back()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
