<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrdersResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function make_orders(OrderRequest $request){
        $orders = Order::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'description'=>$request->description,
        ]);
        return response('Successful', 204);
    }

    public function get_orders(Request $request){
        $orders = Order::all();
        return new OrdersResource($orders);
    }
}
