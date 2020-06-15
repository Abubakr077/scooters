<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function addToCart(Request $request, $id)
    {
        $product = DB::select('select * from products where id='.$id);
        $cart = Session::get('cart');
        $cart[$product[0]->id] = array(
            "id" => $product[0]->id,
            "nama_product" => $product[0]->nama_product,
            "harga" => $product[0]->harga,
            "pict" => $product[0]->pict,
            "qty" => 1,
        );

        Session::put('cart', $cart);
        Session::flash('success','barang berhasil ditambah ke keranjang!');
        //dd(Session::get('cart'));
        return redirect()->back();
    }

    public function updateCart(Request $cartdata)
    {
        $cart = Session::get('cart');

        foreach ($cartdata->all() as $id => $val)
        {
            if ($val > 0) {
                $cart[$id]['qty'] += $val;
            } else {
                unset($cart[$id]);
            }
        }
        Session::put('cart', $cart);
        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $cart = Session::get('cart');
        unset($cart[$id]);
        Session::put('cart', $cart);
        return redirect()->back();
    }
}
