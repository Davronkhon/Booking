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
<<<<<<< HEAD
            <label for="">Имя : </label>
            <input type="text" name="name" class="form-control">
            <label for="">Подробности : </label>
=======
            <label for="">Name : </label>
            <input type="text" name="name" class="form-control">
            <label for="">Description : </label>
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
            <input type="text" name="description" class="form-control"><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection
@section('footer')
@endsection
