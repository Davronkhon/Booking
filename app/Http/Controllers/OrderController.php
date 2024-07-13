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
        $orders = Order::with('food', 'booking')->get();
        return view('order.index', compact('orders'));
        $orders = Order::all();
        $bookings = Booking::with('orders' )->get();
        return view('order.index', compact('bookings', 'orders'));
    }

    public function create()
    {
        $bookings = Booking::all();
        $clients = Client::all();
        $foods = Food::all();
        return view('order.create', compact('bookings', 'clients', 'foods'));
    }


    public function destroy($id)
    {
        $orders = Order::findOrFail($id);
        $orders->delete();
        return redirect('/order')->with('success', 'book');
    }

    public function edit($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return redirect()->route('order.index')->with('message', 'Order not found.');
        }
        $bookings = Booking::all();
        $foods = Food::all();
        $clients = Client::all();
        return view('order.edit', compact('order', 'bookings', 'foods', 'clients'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order.show', compact('order'));
    }

    public function store(Request $request)
    {
        $order = $request->validate([
            'quantity' => 'required|integer|min:1',
            'date' => 'required|string',
            'status' => 'required|string',
            'booking_id' => 'required|exists:bookings,id',
            'food_id' => 'required|exists:foods,id',
            'client_id' => 'required|exists:clients,id',
        ]);

        $order['order_datetime'] = now();
        $order['order_datetime'] = $order['date'];
        unset($order['date']);
        Order::create($order);
        return redirect()->route('order.index')->with('success', 'Order');
    }

    public function update(Request $request, $id)
    {
        $order = $request->validate([
            'quantity' => 'required|string',
            'date' => 'required|string',
            'status' => 'required|string',
            'booking_id' => 'required|exists:bookings,id',
            'food_id' => 'required|exists:food,id',
            'client_id' => 'required|exists:clients,id'
        ]);

        $orders = Order::findOrFail($id);
        $orders->update($order);
        return redirect('/order')->with('success', 'Order');
    }
}
