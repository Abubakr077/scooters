<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Bike;
use App\FavAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FavAdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
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
            return redirect()->route('bikes.index',[0])->with('message', 'Favourite Added Successfully!!!');
        }else{
            return redirect()->route('bikes.index',[0])->with('error', 'Bike already saved into favourites.');
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
        $url = url()->previous();
        $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        $favAd = new FavAds($request->except(['picture']));
        $favAd->bikes_id = 0;
        $favAd->user_id = auth()->user()->id;
        $favAd->accessories_id = $accessory->id;
        if (FavAds::where('accessories_id', '=', $accessory->id)->exists()) {
            return redirect()->route($route,[0])->with('error', 'Accessory already saved into favourites.');
        }else{
            $favAd->save();
            return redirect()->route($route,[0])->with('message', 'Favourite Added Successfully!!!');
        }
    }
    public function destroyBike(Bike $bike)
    {
        $ad = FavAds::where('bikes_id', '=', $bike->id)->get()->first();
        try {
            $ad->delete();
            return redirect()->back()->with('message', 'Favourite bike deleted Successfully!!!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Favourite bike could not delete at this moment.Something wrong happened!!!');
        }
    }
    public function destroyAccessory(Accessories $accessory)
    {
        $ad = FavAds::where('accessories_id', '=', $accessory->id)->get()->first();
        echo $ad;
        try {
            $ad->delete();
            return redirect()->back()->with('message', 'Favourite accessory deleted Successfully!!!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Favourite accessory could not delete at this moment.Something wrong happened!!!');
        }
    }
}
