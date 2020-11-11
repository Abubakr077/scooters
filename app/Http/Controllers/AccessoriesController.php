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
        $this->middleware('auth')->only(['create','store','edit','update','allAccessories']);
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
            'dealer'=>''
        ];
        $accessories = Accessories::where([['type', '=', 'Accessory'],['isApproved', '=', true]])->paginate(8);
        return view('user/accessories', compact('accessories','filters'));
    }
    public function autoParts(){
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
            'dealer'=>''
        ];
        $accessories = Accessories::where([['type', '=', 'Auto Parts'],['isApproved', '=', true]])->paginate(8);
        return view('user/autoparts', compact('accessories','filters'));
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
            'dealer'=>''
        ];
        $accessory = new Accessories($request->except(['picture']));
        $user->accessories()->save($accessory);
        foreach ($request->picture as $file) {
            if ($file) {
                $filename = strtolower(trim($file->getClientOriginalName()));
                $picname =FileHelper::saveFile($file, 'Image', $filename);
                if ($picname) {
                    AccessoryPhotos::create([
                        'accessories_id' => $accessory->id,
                        'name' => $filename
                    ]);
                }
            }
        }
        if ($accessory->type == 'Accessory'){
            return redirect()->back()->with('message', 'Accessory sent for approval Successfully!!!');
        } else
        {
            return redirect()->back()->with('message', 'Auto Part sent for approval Successfully!!!');
        }
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
            'dealer'=>Input::get('dealer')
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
            if ($filters['dealer']) {
                $query->where('dealer', '=', $filters['dealer']);
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
    public function show($user_id,Accessories $accessory)
    {

        $bike = $accessory;

        $photos = AccessoryPhotos::where('accessories_id', '=', $accessory->id)->get();
        return view('user/showaccessory',compact('bike','photos'));
    }
    public function showAutoParts($user_id,Accessories $accessory)
    {

        $bike = $accessory;
        $photos = AccessoryPhotos::where('accessories_id', '=', $accessory->id)->get();
        return view('user/showautopart',compact('bike','photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function allAccessories(){

        $bikes = Accessories::where('isApproved', '=', false)->get();
        return view('admin/accessories', compact('bikes'));
    }
    public function edit(Accessories $accessory)
    {
        $product = $accessory;
        $photos = AccessoryPhotos::where('accessories_id', '=', $accessory->id)->get();
        return view('admin/editAccessory', compact('product','photos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessories $accessory)
    {
        if (Input::get('submit') == 'approve'){
            try {
                $accessory->isApproved = true;
                $accessory->update();
                return redirect()->route('admin_accessories')->with('message', 'Accessory approved Successfully!!!');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Accessory could not approve at this moment.Something wrong happened!!!');
            }
        }else if (Input::get('submit') == 'delete'){
            try {
                $accessory->delete();
                return redirect()->route('admin_accessories')->with('message', 'Accessory deleted Successfully!!!');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Accessory could not delete at this moment.Something wrong happened!!!');
            }
        }else{
            $input = $request->all();
            $accessory->fill($input)->save();
            return back()->with('message', 'Accessory Updated Successfully!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accessories  $accessories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessories $accessory)
    {
        try {
            $accessory->delete();
            return redirect()->back()->with('message', 'Accessory deleted Successfully!!!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Accessory could not delete at this moment.Something wrong happened!!!');
        }
    }

}
