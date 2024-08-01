@extends('layouts.app')
@section('title')
    <h3>Таблица блюд</h3>
@endsection

@section('content')
    <br>
    <a href="{{route('food.create')}}" class="btn btn-primary">Добавить</a>
    <br>
    <table class="table">
        <tr>
            <th>#</th>
<<<<<<< HEAD
            <th>Название</th>
            <th>Цена</th>
            <th>Фото</th>
            <th>Подробнее</th>
            <th>Время</th>
            <th>Активно</th>
            <th>Ресторан</th>
            <th>Категория еды</th>
            <th>Удалить</th>
            <th>Изменить</th>
=======
            <th>name</th>
            <th>price</th>
            <th>image</th>
            <th>description</th>
            <th>time</th>
            <th>is_active</th>
            <th>restaurant_id</th>
            <th>food_category_id</th>
            <th>delete</th>
            <th>update</th>
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
        </tr>
        @foreach($foods as $food)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$food->name}}</td>
                <td>{{$food->price}}</td>
                <td>{{$food->image}}</td>
                <td>{{$food->description}}</td>
                <td>{{$food->time}}</td>
                <td>{{$food->is_active}}</td>
                <td>{{ optional($food->restaurant)->name }}</td>
<<<<<<< HEAD
                <td>{{ optional($food->food_category)->name }}</td>
=======
                <td>{{ optional($food->foodcategory)->name }}</td>
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
                <td>
                    <form action="{{route('food.destroy', $food->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('food.edit', $food->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
