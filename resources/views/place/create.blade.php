<!-- resources/views/places/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Добавить новое место</h1>
        <form action="{{ route('place.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number">Номер:</label>
                <input type="text" id="number" name="number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Подробности:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="capacity">Город:</label>
                <input type="number" id="capacity" name="capacity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="restaurant_id">Ресторан:</label>

                <select class ="form-select" name="restaurant_id" id="">

                    @foreach($restourants as $restourant)
                        <option value="{{$restourant->id}}">{{$restourant->name}}</option>
                    @endforeach
                </select>

            </div>
            <button type="submit" class="form-control btn btn-primary">Добавить новое место</button>
        </form>
    </div>
@endsection

