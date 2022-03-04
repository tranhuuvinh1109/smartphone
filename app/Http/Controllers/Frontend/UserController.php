<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserShop;
use App\Models\Country;
use Illuminate\Support\Facades\DB;
use Auth;

class UserController extends Controller
{
    public function Profile()
    {
        $id_user = Auth::id();
        $newCart = DB::table('cart')->join('product', 'id_product', '=', 'pro_id')->where('id_user',$id_user)->get();
        $sum = 0;
        for($i=0;$i<$newCart->count();$i++){ 
            $sum += $newCart[$i]->quantity;
        }
        $countries = Country::all();
        return view('frontend.user.profile',compact('countries','sum','newCart'));
    }
    public function PostProfile(Request $request)
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
