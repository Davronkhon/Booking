@extends('layouts.app')

@section('content')
    <h1>Добавить ресторан</h1>

    <form action="{{ route('restaurant.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="">Название:</label>
            <input type="text" name="name" class="form-control" placeholder="name">
        </div>


        <div class="form-group">
            <label for="">Адресс:</label>
            <input type="text" name="address" class="form-control" placeholder="name">
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

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" name="email" class="form-control"><br>
        </div>


        <label for="">Категория ресторанов: </label><br>
        <select name="rest_category_id" id="" class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br>

        <button type="submit" class="btn btn-primary">Добавить ресторан</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
