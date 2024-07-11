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
    <h1>Добавить клиента</h1>

    <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Имя:</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Фамилия:</label>
                <input type="text" name="surname" class="form-control" id="exampleInputEmail1">
            </div>
        </div>

        <div class="form-group">
            <label for="">Телефон:</label><br>

            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
            </div>
            <input type="text" name="phone" class="form-control" placeholder="phone">
        </div>
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Пользователь:</label><br>
            <select id="exampleInputEmail1" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="card-body">
            <label for="exampleInputEmail1">Рестаран:</label><br>
            <select id="exampleInputEmail1" name="restaurant_id" class="form-control">
                @foreach($restaurants as $restaurant)
                    <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                @endforeach
            </select>
        </div>
        <br>

        <button class="form-control bg-info" type="submit">Добавление</button>
    </form>
@endsection
</body>
</html>
