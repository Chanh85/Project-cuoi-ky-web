<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cart');

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
    public function store(Request $request)
    {
        //
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        if(Auth::check())
        {
            $prod_check = Product::where('id', $product_id)->first();
            if($prod_check)
            {
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists())
                {
                    $cartItem = Cart::where('product_id',$product_id)->where('user_id', Auth::id())->first();
                    $cartItem->quantity = $product_qty;
                    $cartItem->update();
                    return response()->json(['status' => $prod_check->name." đã có sẵn trong giỏ hàng, vui lòng vào giỏ hàng kiểm tra!"]);
                }
                else{
                        $cartItem = new Cart;
                        $cartItem->user_id = Auth::id();
                        $cartItem->product_id = $product_id;
                        $cartItem->quantity = $product_qty;
                        $cartItem->save();
                        return response()->json(['status' => $prod_check->name." đã được thêm vào giỏ hàng! Vui lòng vào giỏ hàng để kiểm tra"]);
                    
                   
                }
                
            }
        }
        else
        {
            return response()->json(['status' => "Đăng nhập để tiếp tục"]);
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $cartItems = Cart::where('user_id',Auth::id())->get();
        return view('cart', compact('cartItems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
   public function deleteProduct(Request $request)
   {
        $prod_id = $request->input('prod_id');
        $prod_check = Product::where('id', $prod_id)->first();
        if(Cart::where('product_id',$prod_id)->where('user_id', Auth::id())->exists())
        {
            $cartItem = Cart::where('product_id',$prod_id)->where('user_id', Auth::id())->first();
            $cartItem->delete();
            return response()->json(['status' => 'Đã xóa sản phẩm ']);
        }
   }

   public function updateProduct(Request $request)
   {
        $prod_id = $request->input('prod_id');
        $qty = $request->input('qty');
        if(Cart::where('product_id',$prod_id)->where('user_id', Auth::id())->exists())
        {
            $cartItem = Cart::where('product_id',$prod_id)->where('user_id', Auth::id())->first();
            $cartItem->quantity = $qty;
            $cartItem->update();
            return response()->json(['status' => 'Số lượng sản phẩm đã được cập nhật!']);
        }
   }
}
