@extends('layouts.app')
@section('content')
    <h1>Добавить блюда</h1>

    <form action="{{route('food.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="exampleInputEmail1">Name:</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Price:</label>
        <input type="text" name="price" step="0.1" class="form-control" id="exampleInputEmail1">
        <label for="exampleInputEmail1">Image:</label>
        <input class="form-control" type="file" name="image">
        <label for="exampleInputEmail1">Description:</label>
        <input class="form-control" type="text" name="description">
        <label for="exampleInputEmail1">Time:</label>
        <input class="form-control" type="time" name="time">
        <label for="exampleInputEmail1">Is_active:</label><br>
        <input type="text" class="form-control" name="is_active">
        <label for="exampleInputEmail1">Food_Category:</label>
        <select id="exampleInputEmail1" class="form-control" name="food_category_id">
            @foreach($foodcategories as $foodcategory)
                <option value="{{$foodcategory->id}}" class="form-control">{{$foodcategory->name}}</option>
            @endforeach
        </select>
        <label for="exampleInputEmail1">Restaurant:</label>
        <select id="exampleInputEmail1" class="form-control" name="restaurant_id">
            @foreach($restaurants as $restaurant)
                <option value="{{$restaurant->id}}" class="form-control">{{$restaurant->name}}</option>
            @endforeach~
        </select><br>
        <input type="submit" value="Добавить" class="иет btn-primary form-control">
    </form>
@endsection
