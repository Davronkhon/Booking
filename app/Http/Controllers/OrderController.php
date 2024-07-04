<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }
    public function create()
    {
        $bookings = Booking::all();
        $clients = Client::all();
        $foods = Food::all();
        return view('order.create', compact('bookings', 'clients', 'foods'));
    }
    public function destroy(Order $orders, $id)
    {
        $orders = Order::findOrFail($id);
        $orders->delete();
    }
    public function edit(Order $orders, $id)
    {
        $orders = Order::findOrFail($id);
        return view('order.edit', compact('orders'));
    }
    public function show(Order $orders, $id)
    {
        $orders = Order::findOrFail($id);
        return view('order.show', compact('orders'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'quantity' => 'required|string',
            'order_dat' => 'required|string',
            'status' => 'required|string',
            'booking_id' => 'required|exists:users,id',
            'food_id' => 'required|exists:restaurants,id',
            'client_id' => 'required|exists:restaurants,id',
        ]);

        Order::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'restaurant_id' => 'required|exists:restaurants,id'
        ]);

        $orders = Order::findOrFail($id);
        $orders->update($request->all());
    }
}
