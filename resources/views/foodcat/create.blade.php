@extends('layouts.app')

@section('title')
    Добавление блюда
@endsection
<!-- create -->
@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{route('foodcat.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Имя : </label>
            <input type="text" name="name" class="form-control">
            <label for="">Подробности : </label>
            <input type="text" name="description" class="form-control">
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection

@section('footer')
@endsection
