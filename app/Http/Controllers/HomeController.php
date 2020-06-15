<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Bike;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        return view('user/viewprofile',compact('bikes','accessories'));
    }
    public function showMain()
    {
//        $bikes=auth()->user()->bikes()->get()->take(12);
        $bikes=Bike::all()->take(12);
        $accessories=Accessories::all()->take(12);
        return view('user/index',compact('bikes','accessories'));
    }
}
