<?php
namespace App\Http\Controllers;

use App\Models\place;
use Illuminate\Http\Request;
use Psr\Log\AbstractLogger;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('place.index', compact('places'));
    }

    public function create()
    {
        return view('place.create');
    }

    public function store(Request $request)
    {
        $plac = $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'description' => 'nullable|string',
            'capacity' => 'required|integer',
            'restaurant_id' => 'required|exists:restaurants,id'
        ]);

        Place::create($plac);

        return redirect('/places')->with('success', 'places created successfully');
    }

    public function show($id)
    {
        $places = Place::findOrFail($id);
        return view('place.show', compact('places'));
    }

    public function edit($id)
    {
        $places = Place::findOrFail($id);
        return view('place.edit', compact('places'));
    }

    public function update(Request $request, $id)
    {
        $plac = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'phone' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'restaurant_id' => 'required|exists:restaurants,id'
        ]);

        $places = Place::findOrFail($id);
        $places->update($plac);

        return redirect('/places')->with('success', 'places updated successfully');
    }

    public function destroy($id)
    {
        $places = Place::findOrFail($id);
        $places->delete();

        return redirect('/places')->with('success', 'places deleted successfully');
    }
}

