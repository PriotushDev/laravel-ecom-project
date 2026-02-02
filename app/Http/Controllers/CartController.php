<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        Cart::add([
            'id'        => $id,
            'name'      => $product->name,
            'qty'       => $request->qty,
            'price'     => $product->selling_price,
            'weight'    => 550,
            'options'   => [
                'image'  => $product->image,
                'category' => $product->category->name,
                'brand' => $product->brand->name,
            ]
        ]);
        return redirect('/show-cart')->with('message', 'Product info save to cart successfully.');
    }

    public function showCart()
    {
//        return Cart::content(); // testing purpose of show total cart

        return view('website.cart.index', ['cart_products' => Cart::content() ]);
    }

    public function updateCart( Request $request, $rowId)
    {
        Cart::update($rowId, $request->qty);
        return back()->with('message', 'update successfully');
    }
}
