<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
class CheckoutController extends Controller
{
    //
    public function index(){
        $cartItems = Cart::where('user_id',Auth::id())->get();
        foreach($cartItems as $item)
        {
            if(!Product::where('id',$item->product_id)->where('quantity','>=',$item->quantity)->exists())
            {
                $removeItem = Cart::where('user_id',Auth::id())->where('product_id',$item->product_id)->first();
                $removeItem->delete();
            }
        }
        $cartItems = Cart::where('user_id',Auth::id())->get();
        return view('checkout',compact('cartItems'));
    } 

    public function placeorder(Request $request){
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('lname');
        $order->lname = $request->input('fname');
        $order->DOB = $request->input('DOB');
        $order->phonenum = $request->input('phonenum');
        $order->email = $request->input('email');
        $order->address = $request->input('address');
        $order->district = $request->input('district');
        $order->city = $request->input('city');
        $order->total_price = $request->input('total_price');
        $order->tracking_no = 'cart'.rand(1000,999999);
        $order->save(); 

        
        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach($cartItems as $item)
        { 
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price
            ]);
            $prod = Product::where('id',$item->product_id)->first();
            $prod->quantity = $prod->quantity - $item->quantity;
            $prod->update();
        } 

        if(Auth::user()->address == NULL )
        {
            $user = User::where('id',Auth::id())->first();
            $user->fname = $request->input('lname');
            $user->lname = $request->input('fname');
            $user->DOB = $request->input('DOB');
            $user->phonenum = $request->input('phonenum');
            $user->address = $request->input('address');
            $user->district = $request->input('district');
            $user->city = $request->input('city');
            $user->total_price = $request->input('total_price');
            $user->tracking_no = 'cart'.rand(1000,999999);
            $user->update();
        }
        $cartItems = Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartItems);
        return redirect('/');
    }
}
