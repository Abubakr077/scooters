<?php

namespace App\Http\Controllers;

use App\Orders;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class OrdersController extends Controller
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
    public function index()
    {
        $orders=auth()->user()->orders()->get();
        return view('user/order-history',compact('orders'));
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
    public function store(Request $request,User $user)
    {
        $items = Cart::content();

        foreach ($items as $item){
            $order = new Orders($request->all());
            $order->price = $item->price;
            $order->name = $item->name;
            $order->quantity = $item->qty;
            $order->user_id= auth()->user()->id;
            $order->bikes_id = 0;
            $order->accessories_id = 0;
            $order->picture = $item->options->picture;
            if ($item->options->bike_id){
                $order->bikes_id = $item->options->bike_id;
            }
            if ($item->options->accessories_id){
                $order->accessories_id = $item->options->accessories_id;
            }
            $user->orders()->save($order);
        }
        Cart::destroy();

        return redirect(''.auth()->user()->id.'/orders')->with('message', 'Order Placed successfully!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
