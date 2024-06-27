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
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
    }

    public function create(Request $request)
    {
        $places = Place::all();
        $clients = Client::all();
        return view('booking.create', compact('places', 'clients'));
    }


    public function delete(Booking $bookings)
    {
        // Удаление бронирования
        $bookings->delete();

        return response()->json(['message' => 'Бронирование удалено'], 200);
    }

    private function checkAvailability($date, $time, $seats)
    {
        // Проверка наличия свободных мест для указанного времени и даты

        // Пример: Проверяем, что нет пересечений с существующими бронированиями
        $existingBookings = Booking::where('date', $date)
            ->where('time', $time)
            ->sum('seats');

        $availableSeats = 100; // Предположим, что у нас всего 100 мест

        // Проверяем, есть ли достаточно мест для нового бронирования
        if ($availableSeats - $existingBookings >= $seats) {
            return true; // Места доступны
        } else {
            return false; // Места недоступны
        }
    }

    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'required|date|after_or_equal:start_time',
            'guests_count' => 'required|integer|min:1',
            'status' => 'required|string',
            'place_id' => 'required|exists:places,id',
            'client_id' => 'required|exists:clients,id',
        ]);

        // Сохранение данных
        Booking::create($validated);

        return redirect()->route('booking.create')->with('message', 'Booking created successfully!');
    }

    public function show($id)
    {
        $bookings =Booking::findOrFail($id);
        return view('booking.edit', compact('bookings'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'guests_count' => 'required',
            'status' => 'required',
            'client_id' => 'required|exists:clients,id',
            'place_id' => 'required|exists:places,id',
        ]);

        $bookings = Booking::findOrFail($id);

        $bookings->client_id = $request->client_id;
        $bookings->place_id = $request->place_id;
        $bookings->start_time = $request->start_time;
        $bookings->end_time = $request->end_time;
        $bookings->guests_count = $request->guests_count;
        $bookings->status = $request->status;
        $bookings->save();

        return redirect()->route('booking.index')->with('success', 'bookings updated successfully.');
    }

    public function destroy($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();
        return redirect()->route('booking.index')->with('success', 'bookings deleted successfully.');
    }
}
