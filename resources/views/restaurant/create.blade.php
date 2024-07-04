@extends('layouts.app')

@section('content')
    <h1>Create Restaurants</h1>

    <form action="{{ route('restaurant.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label><br>
            <label>
                <input type="text" name="name" class="form-control">
            </label><br>
        </div>

        <div class="form-group">
            <label for="password">Address:</label><br>
            <label>
                <input type="text" name="address" class="form-control">
            </label><br>
        </div>

        <div class="form-group">
            <label for="role">Phone:</label><br>
            <label>
                <input type="text" name="phone" class="form-control">
            </label><br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" name="email" class="form-control"><br>
        </div>


        <label for="">Rest_Category: </label><br>
        <select name="rest_category_id" id="" class="form-control">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select><br>

        <button type="submit" class="btn btn-primary">Create Restaurant</button>
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
