<?php

namespace App\Http\Controllers;
use App\Bike;
use App\BikePhotos;
use App\Helpers\FileHelper;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class BikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create','store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::where('condition', '=', 'new')->paginate(8);
        $filters = [
            'keyword' => '',
            'city' => '',
            'brand' => '',
            'province' => '',
            'minYear' => '',
            'maxYear' => '',
            'minPrice'    => '',
            'maxPrice'    => '',
            'regCity'    => '',
            'color'    => '',
            'minMileage'    => '',
            'maxMileage'    => '',
            'minCapacity'    => '',
            'maxCapacity'    => '',
            'type'    => '',
            'bodyType'    => '',
        ];
        return view('user/newbikes', compact('bikes','filters'));
    }
    public function usedBikes(){
        $bikes = Bike::where('condition', '=', 'used')->paginate(8);
        $filters = [
            'keyword' => '',
            'city' => '',
            'brand' => '',
            'province' => '',
            'minYear' => '',
            'maxYear' => '',
            'minPrice'    => '',
            'maxPrice'    => '',
            'regCity'    => '',
            'color'    => '',
            'minMileage'    => '',
            'maxMileage'    => '',
            'minCapacity'    => '',
            'maxCapacity'    => '',
            'type'    => '',
            'bodyType'    => '',
        ];
        return view('user/usedbikes', compact('bikes','filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/sellbike');
    }

    public function filter()
    {

        $filters = [
            'keyword' => Input::get('keyword'),
            'city' => Input::get('city'),
            'brand' => Input::get('brand'),
            'province' => Input::get('province'),
            'minYear' => Input::get('minYear'),
            'maxYear' => Input::get('maxYear'),
            'minPrice'    => Input::get('minPrice'),
            'maxPrice'    => Input::get('maxPrice'),
            'regCity'    => Input::get('regCity'),
            'color'    => Input::get('color'),
            'minMileage'    => Input::get('minMileage'),
            'maxMileage'    => Input::get('maxMileage'),
            'minCapacity'    => Input::get('minCapacity'),
            'maxCapacity'    => Input::get('maxCapacity'),
            'type'    => Input::get('type'),
            'bodyType'    => Input::get('bodyType'),
        ];
        $bikes = Bike::where(function ($query) use ($filters) {
            if ($filters['keyword'] ) {
                $query->where('name', 'LIKE', "%{$filters['keyword']}%")->orWhere('brand', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('color', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('city', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('province', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('engine_type', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('body_type', 'LIKE', "%{$filters['keyword']}%")
                ;
            }
            if ($filters['city'] ) {
                $query->where('city', '=', $filters['city']);
            }
            if ($filters['province']) {
                $query->where('province', '=', $filters['province']);
            }
            if ($filters['brand']) {
                $query->where('brand', '=', $filters['brand']);
            }
            if ($filters['regCity']) {
                $query->where('registration_city', '=', $filters['regCity']);
            }
            if ($filters['color']) {
                $query->where('color', '=', $filters['color']);
            }
            if ($filters['type']) {
                $query->where('engine_type', '=', $filters['type']);
            }
            if ($filters['bodyType']) {
                $query->where('body_type', '=', $filters['bodyType']);
            }
            if ($filters['minPrice']) {
                $query->where('price', '>=', $filters['minPrice']);
            }if ($filters['maxPrice']) {
                $query->where('price', '<=', $filters['maxPrice']);
            }
            if ($filters['minMileage']) {
                $query->where('mileage', '>=', $filters['minMileage']);
            }if ($filters['maxMileage']) {
//                $query->where('mileage', '<=', $filters['maxMileage']);
            }
            if ($filters['minCapacity']) {
                $query->where('engine_capacity', '>=', $filters['minCapacity']);
            }if ($filters['maxCapacity']) {
                $query->where('engine_capacity', '<=', $filters['maxCapacity']);
            }
            if ($filters['minYear']) {
                $query->whereYear('date', '>=', $filters['minYear']);
            }
            if ($filters['maxYear']) {
                $query->whereYear('date', '<=', $filters['maxYear']);
            }
        })->paginate(8);

        return view('user/newbikes', compact('bikes','filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user)
    {
        $filters = [
            'keyword' => '',
            'city' => '',
            'brand' => '',
            'province' => '',
            'minYear' => '',
            'maxYear' => '',
            'minPrice'    => '',
            'maxPrice'    => '',
            'regCity'    => '',
            'color'    => '',
            'minMileage'    => '',
            'maxMileage'    => '',
            'minCapacity'    => '',
            'maxCapacity'    => '',
            'type'    => '',
            'bodyType'    => '',
        ];

        $bike = new Bike($request->except(['picture']));
        $user->bikes()->save($bike);
        foreach ($request->picture as $file) {
//            $file = $request->file('picture');
            if ($file) {
                $filename = $file->getClientOriginalName();
                $picname = FileHelper::saveFile($file, 'Image', $filename);
                BikePhotos::create([
                    'bike_id' => $bike->id,
                    'name' => strtolower(trim($filename))
                ]);
            }
        }
        if ($bike->condition == 'new'){
            $bikes = Bike::where('condition', '=', 'new')->paginate(8);
            return view('user/newbikes', compact('bikes','filters'));
        } else
            {
                $bikes = Bike::where('condition', '=', 'used')->paginate(8);
                return view('user/usedbikes', compact('bikes','filters'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show($user_id,Bike $bike)
    {
        $photos = BikePhotos::where('bike_id', '=', $bike->id)->get();
        return view('user/showadd',compact('bike','photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
