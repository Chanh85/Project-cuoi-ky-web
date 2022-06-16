<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $details = new Product;
        // $details->name = 'Xiaomi Redmi Note 11 Pro Plus 5G';
        // $details->picture_1 = '/frontend/images/11-pro-plus-black-1.png';
        // $details->picture_2 = '/frontend/images/11-pro-plus-black-2.png';
        // $details->picture_3 = '/frontend/images/11-pro-plus-black-3.png';
        // $details->picture_4 = '/frontend/images/11-pro-plus-black-4.png';
        // $details->price = 50.00;
        // $details->quantity = 1;
        // $details->description = 'Xiaomi Redmi Note 11 Pro Plus – Cấu hình mạnh mẽ, camera ấn tượng
        // Redmi Note 11 Pro Plus chính là mẫu smartphone tầm trung tiếp theo được Xiaomi cho ra mắt với giá hấp dẫn cùng với thiết kế mới tinh tế, cấu hình mạnh mẽ và cụm camera chất lượng cao cho trải nghiệm nhiếp ảnh đầy hứa hẹn.

        // Thiết kế phẳng, vuông vắn hơn với cụm camera tinh tế, nhiều màu sắc độc đáo
        // Điện thoại Redmi Note 11 Pro+ có thiết kế thanh lịch và vuông vắn hơn, mặt trước và sau được vát phẳng hơn mang đến kiểu dáng hiện đại, hợp xu hướng. Bốn góc của smartphone vẫn được bo cong để hài hòa với tổng thể, mềm mại cũng như cầm nắm thoải mái.';

        // $details->save();

        // $details->save();
        $products = Product::all();
        return view('product.product',['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product;
        $product->name = $request->name; 
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->price = $request->price;
        
        if($request->hasFile('picture1')){
            $file = $request->file('picture1');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/productimg/',$filename);
            $product->picture_1 = $filename;
        }
        
        if($request->hasFile('picture2')){
            $file = $request->file('picture2');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/productimg/',$filename);
            $product->picture_2 = $filename;
        }

        if($request->hasFile('picture3')){
            $file = $request->file('picture3');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/productimg/',$filename);
            $product->picture_3 = $filename;
        }

        if($request->hasFile('picture4')){
            $file = $request->file('picture4');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/productimg/',$filename);
            $product->picture_4 = $filename;
        }
        
        $product->save(); 
        
        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
