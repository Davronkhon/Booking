<!-- resources/views/places/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список мест</h1>
        <a href="{{ route('place.create') }}" class="btn btn-primary mb-3">Добавить новое место</a>
        <table class="table">
            <thead>
            <tr>
                <th>Название</th>
                <th>Номер</th>
                <th>Подробности</th>
                <th>Город</th>
                <th>Ресторан</th>
                <th>Активно</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($places as $place)
                <tr>
                    <td>{{ $place->name }}</td>
                    <td>{{ $place->number }}</td>
                    <td>{{ $place->description }}</td>
                    <td>{{ $place->capacity }}</td>
                    <td>{{ $place->restaurant_id }}</td>
                    <td>
                        <a href="{{ route('place.edit', $place->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('place.destroy', $place->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this place?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

