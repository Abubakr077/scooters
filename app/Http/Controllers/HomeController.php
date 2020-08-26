<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Bike;
use App\FavAds;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use function Sodium\add;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['showProfile']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return Redirect::back();
    }

    public function showProfile()
    {
        $ads =  Input::get('ads');

        $accessories=auth()->user()->accessories()->get()->take(5);
        $favAds=auth()->user()->favAds()->get();

        $favBikes = FavAds::where('bikes_id', '=', 0);
        $favAccessories = FavAds::where('accessories_id','=',0);

        $favAccessories = array();
        $favBikes = array();
        foreach($favAds as $val){
            $bike = Bike::find($val->bikes_id);
            $accessory = Accessories::find($val->accessories_id);
            $favBikes[] = $bike;
            $favAccessories[] = $accessory;
        }

        if ($ads === 'fav'){
            $bikes=null;
            return view('user/viewprofile',compact('favAccessories','favBikes','bikes'));
        } elseif ($ads === 'pending') {
            $favBikes = null;
            $bikes=auth()->user()->bikes()->where('isApproved', '=', false)->get()->take(5);
            return view('user/viewprofile',compact('bikes','accessories','favBikes','ads'));
        }elseif ($ads === 'live') {
            $favBikes = null;
            $bikes=auth()->user()->bikes()->where('isApproved', '=', true)->get()->take(5);
            return view('user/viewprofile',compact('bikes','accessories','favBikes','ads'));
        }
    }

    public function profileSettings(){
        $user = \auth()->user();
        return view('user/profile-settings',compact('user'));
    }

    public function updateProfile(Request $request, User $user){


        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'confirmed',
            'password_confirmation' => ''
        ]);
//        $user->email = $request->email;
        $user->name = $request->name?$request->name:$user->name;
        $user->phone = $request->phone?$request->phone:$user->phone;
        $user->province = $request->province?$request->province:$user->province;
        $user->city = $request->city?$request->city:$user->city;
        $user->city_area = $request->city_area?$request->city_area:$user->city_area;
        if ($request->password == $request->password_confirmation && $request->password != null){
            $user->password = bcrypt($request->password);
        }
        $user->update();
        return redirect()->back()->with('message', 'Profile Updated Successfully!!!');
    }
    public function showMain()
    {
//        $bikes=auth()->user()->bikes()->get()->take(12);
        $bikes=Bike::where('isApproved', '=', true)->get()->take(12);
        $accessories=Accessories::all()->take(12);
        return view('user/index',compact('bikes','accessories'));
    }
}
