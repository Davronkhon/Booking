@extends('layouts.app')
@section('content')
    <form action="{{route('food.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Price:</label>
                <input type="text" name="price" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <label for="exampleInputEmail1">Image:</label>
            <input class="form-control" type="file" name="image">
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Description:</label>
            <input class="form-control" type="text" name="description">
        </div>


        <div class="card-body">
            <label for="exampleInputEmail1">Time:</label>
            <input class="form-control" type="time" name="time">
        </div>


        <div class="card-body">
            <label for="exampleInputEmail1">Is_active:</label>
            <input class="form-control" type="text" name="is_active">
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Food_Category:</label>
            <select id="exampleInputEmail1" name="food_category_id">
                @foreach($foodcats as $foodcat)
                    <option value="{{$foodcat->id}}">{{$foodcat->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Restaurant:</label>
            <select id="exampleInputEmail1" name="restaurant_id">
                @foreach($restaurants as $restaurant)
                    <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                @endforeach~
            </select>
        </div>


        <button type="submit">Добавление</button>
    </form>
@endsection
