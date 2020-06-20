<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Bike;
use App\FavAds;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $bikes=auth()->user()->bikes()->get()->take(5);
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



        return view('user/viewprofile',compact('bikes','accessories','favAccessories','favBikes'));
    }
    public function showMain()
    {
//        $bikes=auth()->user()->bikes()->get()->take(12);
        $bikes=Bike::all()->take(12);
        $accessories=Accessories::all()->take(12);
        return view('user/index',compact('bikes','accessories'));
    }
}
