<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Bike;
use App\FavAds;
use App\User;
use Illuminate\Http\Request;

class FavAdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Bike $bike)
    {
        unset($request['_token']);
        $favAd = new FavAds($request->all());
        $favAd->bikes_id = $bike->id;
        $favAd->user_id = auth()->user()->id;
        $favAd->accessories_id = 0;
        if (!(FavAds::where('bikes_id', '=', $bike->id)->exists())) {
            $favAd->save();
            return redirect()->back()->with('message', 'Favourite Added Successfully!!!');
        }else{
            return redirect()->back()->with('error', 'Bike already saved into favourites.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Bike $bike)
    {
    }
    public function storeAccessory(Request $request,Accessories $accessory)
    {
        unset($request['_token']);
        $favAd = new FavAds($request->all());
        $favAd->bikes_id = 0;
        $favAd->user_id = auth()->user()->id;
        $favAd->accessories_id = $accessory->id;
        if (FavAds::where('accessories_id', '=', $accessory->id)->exists()) {
            return redirect()->back()->with('error', 'Accessory already saved into favourites.');
        }else{
            $favAd->save();
            return redirect()->back()->with('message', 'Favourite Added Successfully!!!');
        }
    }
}
