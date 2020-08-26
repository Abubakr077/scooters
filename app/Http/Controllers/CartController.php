<?php

namespace App\Http\Controllers;

use App\Accessories;
use App\Bike;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Cart::content();
        $total = Cart::subtotal();
        return view('user/checkout',compact('items','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Bike $bike)
    {

        $user_id = auth()->user()->id;

        Cart::add([
            'id' => $bike->id,
            'name' => $bike->name,
            'qty' => 1,
            'price' => $bike->price,
            'weight' => 1,
            'options' => [
                'picture'=>$bike->photos()->first()->getPicture(),
                'bike_id' => $bike->id

            ]
        ]);
        return redirect()->back()->with('message', 'Added To Cart Successfully!!!');
    }
    public function storeAccessory(Request $request,Accessories $accessory)
    {

        $user_id = auth()->user()->id;

        Cart::add([
            'id' => $accessory->id,
            'name' => $accessory->name,
            'qty' => 1,
            'price' => $accessory->price,
            'weight' => 1,
            'options' => [
                'picture'=>$accessory->photos()->first()->getPicture(),
                'accessories_id' => $accessory->id

            ]
        ]);
        return redirect()->back()->with('message', 'Added To Cart Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
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
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
