<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserShop;
use App\Models\Country;


class HomeController extends Controller
{
    public function Index()
    {
        return view('admin.dashboard.dashboard');

    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->intended('/login');

    }
    public function GetProfile()
    {
        $countries = Country::all();
        return view('admin.profile.profile',compact('countries'));

    }
    public function UpdateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = $request->all();
        $user = UserShop::findOrFail($id);
        $avatar = $request->avatar;
        if(!empty($avatar))
        {
            $data['avatar'] = $avatar->getClientOriginalName();
        }
        if($user->update($data))
        {
            if(!empty($avatar))
            {
                $avatar->move('upload/user/avatar',$avatar->getClientOriginalName());
            }
            return redirect()->back()->with('success','Update profile success');
        }else
        {
            return redirect()->back()->withError('Update profile error');
        }

    }
    
    
}
