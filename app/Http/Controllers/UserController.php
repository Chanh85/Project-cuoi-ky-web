<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $orders = Order::where('user_id',Auth::id())->get();
        return view('userOrder', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id',$id)->where('user_id',Auth::id())->first();
        return view('viewOrder',compact('orders'));
    }

    public function update(Request $request)
    {
        $user = User::where('id',Auth::id())->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phonenum = $request->phonenum;
        $user->address = $request->address;
        $user->DOB = $request->DOB;
        $user->gender = $request->gender;
        $user->update();
        return redirect('/');
    }
}
