<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRegisterRequest;
use Auth;
use App\Models\UserShop;

class RegisterController extends Controller
{
    public function Register(){
        return view('frontend.register.register');
    }
    public function PostRegister(PostRegisterRequest $request){
        $newUser = new UserShop();
        $newUser->username = $request->name;
        $newUser->password = bcrypt($request->password);
        $newUser->email = $request->email;
        $newUser->phone = $request->phone;
        $newUser->level = 0;
        $newUser->save();
        return redirect()->intended('frontend/login')->with('success','Register Succesfully');
        
    }
}
