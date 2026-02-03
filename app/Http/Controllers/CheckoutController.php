<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use Session;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('website.checkout.index');
    }

    public function newOrder(Request $request)
    {

        //return $request; // checking input data.

        $customer = Customer::where('email', $request->email)->orWhere('mobile', $request->mobile)->first();
        if($customer)
        {
            Session::put('customer_id', $customer->id);
            Session::put('customer_name', $customer->name);
        }
        else
        {
            $customer = new Customer();
            $customer->name             = $request->name;
            $customer->email            = $request->email;
            $customer->mobile           = $request->mobile;
            $customer->password         = bcrypt($request->mobile);
            $customer->save();

            Session::put('customer_id', $customer->id);
            Session::put('customer_name', $customer->name);
        }


        $order = new Order();
        $order->customer_id                 = $customer->id;
        $order->order_total                 = Session::get('order_total');
        $order->tax_total                   = Session::get('tax_total');;
        $order->shipping_total              = Session::get('shipping_total');;
        $order->order_date                  = date('Y-m-d');
        $order->order_timestamp             = strtotime( date('Y-m-d'));
        $order->delivery_address            = $request->delivery_address;
        $order->payment_method              = $request->payment_method;
        $order->save();


        foreach (Cart::content() as $item){
            $orderDetail                        = new OrderDetail();
            $orderDetail->order_id              = $order->id;
            $orderDetail->product_id            = $item->id;
            $orderDetail->product_name          = $item->name;
            $orderDetail->product_price         = $item->price;
            $orderDetail->product_qty           = $item->qty;
            $orderDetail->save();


            Cart::remove($item->rowId);
        }

        return redirect('/checkout/complete-order')->with('message', 'Order info save successfully');

    }

    public  function completeOrder()
    {
        return view('website.checkout.complete-order');
    }
}
