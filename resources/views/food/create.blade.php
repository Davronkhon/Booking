<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <style>
        .card-body, .form-group {
            padding: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
@extends('layouts.app')
@section('content')
    <h1>Добавить блюда</h1>

    <form action="{{route('food.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Название:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <br>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Цена:</label>
                <input type="text" name="price" step="0.1" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <br>
        <div class="card-body">
            <label for="exampleInputEmail1">Фото:</label>
            <input class="form-control" type="file" name="image">
        </div>
        <br>


        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Подробности:</label>
                <input type="text" name="description" class="form-control" id="">
            </div>
        </div>
        <br>

        <div class="bootstrap-timepicker">
            <div class="form-group">
                <label>Время:</label>

                <div class="input-group date" id="timepicker" data-target-input="nearest">
                    <input type="text" name="time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                </div>


                <div class="card-body">
            <label for="exampleInputEmail1">Активно:</label><br>
                 <input type="text" class="form-control" name="is_active"><br>
        </div>
        <br>
        <div class="card-body">
            <label for="exampleInputEmail1">Категория еды:</label>
            <select id="exampleInputEmail1" class="form-control" name="food_category_id">
                @foreach($food_categories as $food_category)
                    <option value="{{$food_category->id}}" class="form-control">{{$food_category->name}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="card-body">
            <label for="exampleInputEmail1">Ресторан:</label>
            <select id="exampleInputEmail1" class="form-control" name="restaurant_id">
                @foreach($restaurants as $restaurant)
                    <option value="{{$restaurant->id}}" class="form-control">{{$restaurant->name}}</option>
                @endforeach~
            </select><br>
        </div>


        <button class="form-control bg-info" type="submit">Добавление</button>
    </form>
@endsection
</body>
</html>
