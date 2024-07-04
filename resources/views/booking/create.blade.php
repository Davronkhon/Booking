@extends('layouts.app')

@section('title')
    Добавление
@endsection
<!-- create -->
@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Начало времени: </label><br>
            <label>
                <input type="date" name="title" class="form-control">
            </label><br>
            <label for="">Конец времени: </label><br>
            <label>
                <input type="date" name="text" class="form-control">
            </label><br>
            <label for="">Гости: </label><br>
            <label>
                <input type="text" name="guests_count" class="form-control">
            </label><br>
            <label for="">Статус: </label><br>
            <label>
                <input type="text" name="status" class="form-control">
            </label><br>
            <label for="">Место: </label><br>
            <select name="place_id" id="" class="form-control">
                @foreach($places as $place)
                    <option value="{{$place->id}}">{{$place->name}}</option>
                @endforeach
            </select><br>
            <label for="">Клиент: </label><br>
            <select name="client_id" id="" class="form-control">
                @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection

@section('footer')
@endsection
