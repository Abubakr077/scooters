<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\AccessoryPhotos;
use App\Helpers\FileHelper;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AccessoriesController extends Controller
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
        $filters = [
            'keyword' => '',
            'city' => '',
            'brand' => '',
            'province' => '',
            'color'    => '',
            'condition'=>'',
            'offer'=>'',
            'price_type'=>'',
            'category'=>'',
            'minPrice'    => '',
            'maxPrice'    => '',
        ];
        $accessories = Accessories::paginate(8);
        return view('user/accessories', compact('accessories','filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/addposting');
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
            'color'    => '',
            'condition'=>'',
            'offer'=>'',
            'price_type'=>'',
            'category'=>'',
            'minPrice'    => '',
            'maxPrice'    => '',
        ];
        $accessory = new Accessories($request->except(['picture']));
        $user->accessories()->save($accessory);
        foreach ($request->picture as $file) {
            if ($file) {
                $filename = $file->getClientOriginalName();
                FileHelper::saveFile($file, 'Image', $filename);
                AccessoryPhotos::create([
                    'accessories_id' => $accessory->id,
                    'name' => strtolower(trim($filename))
                ]);
            }
        }
        $accessories = Accessories::paginate(8);
        return view('user/accessories', compact('accessories','filters'));
    }
    public function filter()
    {

        $filters = [
            'keyword' => Input::get('keyword'),
            'city' => Input::get('city'),
            'brand' => Input::get('brand'),
            'province' => Input::get('province'),
            'color'    => Input::get('color'),
            'condition'=>Input::get('condition'),
            'offer'=>Input::get('offer'),
            'price_type'=>Input::get('price_type'),
            'category'=>Input::get('category'),
            'minPrice'    => Input::get('minPrice'),
            'maxPrice'    => Input::get('maxPrice'),
        ];
        $accessories = Accessories::where(function ($query) use ($filters) {
            if ($filters['keyword'] ) {
                $query->where('name', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('brand', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('color', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('city', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('province', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('offer', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('category', 'LIKE', "%{$filters['keyword']}%")
                    ->orWhere('price_type', 'LIKE', "%{$filters['keyword']}%")
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
            if ($filters['color']) {
                $query->where('color', '=', $filters['color']);
            }
            if ($filters['condition']) {
                $query->where('condition', '=', $filters['condition']);
            }
            if ($filters['offer']) {
                $query->where('offer', '=', $filters['offer']);
            }
            if ($filters['price_type']) {
                $query->where('price_type', '=', $filters['price_type']);
            }
            if ($filters['category']) {
                $query->where('category', '=', $filters['category']);
            }
            if ($filters['minPrice']) {
                $query->where('price', '>=', $filters['minPrice']);
            }if ($filters['maxPrice']) {
                $query->where('price', '<=', $filters['maxPrice']);
            }
        })->paginate(8);

        return view('user/accessories', compact('accessories','filters'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function show(Accessories $accessories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessories $accessories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessories $accessories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessories $accessories)
    {
        //
    }
}
