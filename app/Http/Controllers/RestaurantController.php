<?php

namespace App\Http\Controllers;

use App\Models\RestCategory;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with('restCategory')->get();
        return view('restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        $categories = RestCategory::all();
        return view('restaurant.create', compact('categories', 'restaurants'));
    }

    public function store(Request $request)
    {
        $restaurants = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'rest_category_id' => 'required|string',
        ]);

        Restaurant::create($restaurants);
        return redirect()->route('restaurant.index')->with('success', 'Rest успешно добавлена');
    }

    public function show($id)
    {
        $restaurants = Restaurant::findOrFail($id);
        return view('restaurant.show', compact('restaurants'));
    }

    public function edit($id)
    {
        $categories = RestCategory::all();
        $restaurants = Restaurant::findOrFail($id);
        return view('restaurant.edit', compact('restaurants', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'rest_category_id' => 'required|exists:rest_categories,id',
        ]);

        $restaurants = Restaurant::findOrFail($id);


        $restaurants->name = $request->name;
        $restaurants->address = $request->address;
        $restaurants->phone = $request->phone;
        $restaurants->email = $request->email;
        $restaurants->rest_category_id = $request->rest_category_id;
        $restaurants->save();

        return redirect()->route('restaurant.index')->with('success', 'restaurants updated successfully.');
    }

    public function destroy($id)
    {
        $restaurants = Restaurant::findOrFail($id);
        $restaurants->delete();

        return redirect()->route('restaurant.index')->with('success', 'restaurants deleted successfully.');
    }
}
