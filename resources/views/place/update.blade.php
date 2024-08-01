@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div class="container">
        <h1>Update Place</h1>
        <form action="{{ route('place.update', $place->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $place->name }}" required>
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" id="number" name="number" class="form-control" value="{{ $place->number }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required>{{ $place->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="number" id="capacity" name="capacity" class="form-control" value="{{ $place->capacity }}" required>
            </div>
            <div class="form-group">
                <label for="restaurant_id">Restaurant ID:</label>
                <input type="number" id="restaurant_id" name="restaurant_id" class="form-control" value="{{ $place->restaurant_id }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
=======
@section('title')
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif
    <a href="{{route('place.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>number</th>
            <th>description</th>
            <th>capacity</th>
            <th>Restaurant_id</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($places as $place)
            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$place->name }}</td>
                <td>{{$place->number }}</td>
                <td>{{$place->description }}</td>
                <td>{{$place->capacity}}</td>
                <td>{{$place->categories->name }}</td>
                <td>
                    <form action="{{route('place.destroy', $place->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('place.edit', $place->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
@endsection
