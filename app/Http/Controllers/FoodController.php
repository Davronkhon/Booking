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
        $foods = Food::with(['restaurant', 'food_category'])->get();

        return view('food.index', compact('foods'));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        $food_categories = FoodCategory::all();
        return view('food.create', compact('food_categories', 'restaurants'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'food_category_id' => 'required|exists:food_categories,id',
            'restaurant_id' => 'required|exists:restaurants,id',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/foods'), $imageName);
            $data['image'] = $imageName;
        }

        $food = Food::create($data);
        return redirect('/food')->with('succes', 'food sdlfkho wn');
    }

    /*
        // Преобразование времени в нужный формат, если требуется
        $foods['time'] = date('Y-m-d H:i:s', strtotime($foods['time']));

        Food::create($foods);

        return redirect()->route('food.index')->with('success', 'Food created successfully.');*/


    public function show($id)
    {
        $foods = Food::findOrFail($id);
        return view('food.edit', compact('foods'));
    }

    public function update(Request $request, $id)
    {


        $fileName = "";
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $fileName);


            $request->validate([
                'food_category_id' => 'required|exists:food_categories,id',
                'restaurant_id' => 'required|exists:restaurants,id',
                'name' => 'required',
                'price' => 'required',
                'image' => 'image|mimes:jpeg,png,jpeg,gif|max:2048',
                'description' => 'required',
                'time' => 'required',
                'is_active' => 'required',
            ]);
            $foods = Food::findOrFail($id);

            $foods->food_category_id = $request->food_category_id;
            $foods->restaurant_id = $request->restaurant_id;
            $foods->name = $request->name;
            $foods->price = $request->price;
            $foods->image = $request->image;
            $foods->description = $request->description;
            $foods->time = $request->time;
            $foods->is_active = $request->is_active;
            $foods->save();

            return redirect()->route('food.index')->with('success', 'foods updated successfully.');
        }
    }

    public function destroy($id)
    {
        $foods = Food::findOrFail($id);
        $foods->delete();

        return redirect()->route('food.index')->with('success', 'foods deleted successfully.');
    }


    public function edit($id)
    {
        // Получить существующий ресурс по его идентификатору
        $food = Food::findOrFail($id);
        $food_categories = FoodCategory::all();
        $restaurants = Restaurant::all();
        // Вернуть вид с формой редактирования ресурса
        return view('food.edit', compact('food', 'food_categories', 'restaurants'));
    }
}

