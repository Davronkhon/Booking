@extends('layouts.app')

@section('title')
@endsection
<!-- create -->
@section('content')
    <h1>Добавить категорию ресторанов</h1>

    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{ route('rest.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Имя : </label>
            <input type="text" name="name" class="form-control">
            <label for="">Подробности : </label>
            <input type="text" name="description" class="form-control"><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection
@section('footer')
@endsection
