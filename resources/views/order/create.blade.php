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
        <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Заголовок : </label>
            <input type="text" name="title" class="form-control">
            <label for="">Текст : </label>
            <input type="text" name="text" class="form-control">
            <label for="">Booking : </label>
            <select name="booking_id" id="" class="form-control">
                @foreach($bookings as $booking)
                    <option value="{{$booking->id}}">{{$booking->name}}</option>
                @endforeach
            </select>


            <label for="">Client: </label>
            <select name="client_id" id="" class="form-control">
                @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>


            <label for="">Food : </label>
            <select name="food_id" id="" class="form-control">
                @foreach($foods as $food)
                    <option value="{{$food->id}}">{{$food->name}}</option>
                @endforeach
            </select>

            <br>
            <input type="submit" value="Добавить" class="btn btn-primary form-control">
        </form>
    </div>
@endsection

@section('footer')
@endsection
