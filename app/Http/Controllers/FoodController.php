<?php
namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Rules\Time;

class FoodController extends Controller
{
public function index()
{
$foods = Food::with(['restaurant', 'FoodCategory'])->get();
return view('food.index', compact('foods'));
}

public function create()
{
$restaurants = Restaurant::all();
$foodcategories = FoodCategory::all();
return view('food.create', compact('foodcategories', 'restaurants'));
}

public function store(Request $request)
{
$request->validate([
'food_category_id' => 'required|exists:food_categories,id',
'restaurant_id' => 'required|exists:restaurants,id',
'name' => 'required|string|max:255',
'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
'time' => 'required|date_format:H:i',
]);

$data = $request->all();

// Преобразуем время в формат datetime
$data['time'] = now()->format('Y-m-d') . ' ' . $request->input('time') . ':00';

if ($request->hasFile('image')) {
$imageName = time() . '.' . $request->image->extension();
$request->image->move(public_path('assets/images/foods'), $imageName);
$data['image'] = $imageName;
}

Food::create($data);
return redirect()->route('food.index')->with('success', 'Food created successfully.');
}

public function show($id)
{
$food = Food::findOrFail($id);
return view('food.show', compact('food'));
}

public function update(Request $request, $id)
{
$request->validate([
'food_category_id' => 'required|exists:food_categories,id',
'restaurant_id' => 'required|exists:restaurants,id',
'name' => 'required|string|max:255',
'price' => 'required|numeric',
'description' => 'required|string',
'time' => 'required|date_format:H:i',
'is_active' => 'required|boolean',
'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048',
]);

$food = Food::findOrFail($id);
$data = $request->all();

// Преобразуем время в формат datetime
$data['time'] = now()->format('Y-m-d') . ' ' . $request->input('time') . ':00';

if ($request->hasFile('image')) {
$imageName = time() . '.' . $request->image->extension();
$request->image->move(public_path('assets/images/foods'), $imageName);
$data['image'] = $imageName;
}

$food->update($data);
return redirect()->route('food.index')->with('success', 'Food updated successfully.');
}

public function destroy($id)
{
$food = Food::findOrFail($id);
$food->delete();
return redirect()->route('food.index')->with('success', 'Food deleted successfully.');
}

public function edit($id)
{
$food = Food::findOrFail($id);
$foodcategories = FoodCategory::all();
$restaurants = Restaurant::all();
return view('food.edit', compact('food', 'foodcategories', 'restaurants'));
}
}
