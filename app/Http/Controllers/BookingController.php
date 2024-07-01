<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('place')->get();
        return view('booking.index', compact('bookings'));
    }

    public function create()
    {
        $bookings = Booking::all();
        $places = Place::all();
        $clients = Client::all();
        return view('booking.create', compact('places','bookings', 'clients'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $validated = $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'required|date|after_or_equal:start_time',
            'guests' => 'required',
            'status' => 'required|string',
            'place_id' => 'required|exists:places,id',
            'client_id' => 'required|exists:clients,id',
        ]);
        dd($request->all());

        //Booking::create($validated);
        //return redirect()->route('booking.index')->with('message', 'Booking created successfully!');
    }

    public function show($id)
    {
        $bookings = Booking::findOrFail($id);
        $places = Place::findOrFail($id);
        $clients = Client::findOrFail($id);
        return view('booking.show', compact('bookings', 'places', 'clients'));
    }

    public function edit($id)
    {
        $bookings = Booking::findOrFail($id);
        $places = Place::all();
        $clients = Client::all();
        return view('booking.edit', compact('bookings', 'places', 'clients'));
    }

    public function update(Request $request, $id)
    {
        $vali = $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'guests' => 'required',
            'status' => 'required',
            'client_id' => 'required|exists:clients,id',
            'place_id' => 'required|exists:places,id',
        ]);

        $bookings = Booking::findOrFail($id);
        $bookings->update($vali);
        return redirect('/booking')->with('success', 'bookings updated successfully.');
    }

    public function destroy($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();
        return redirect('/booking')->with('success', 'bookings deleted successfully.');
    }
}
