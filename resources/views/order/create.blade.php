@extends('layouts.app')

@section('title')
    Добавление распоряжения
@endsection
<!-- create -->
@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
            <form action="{{ route('order.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" class="form-control" name="quantity" id="quantity">
                </div>

                <div class="form-group">
                    <label for="date">DateTime:</label>
                    <input type="date"  class="form-control" name="date" id="date">
                </div>

                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" class="form-control" name="status" id="status">
                </div>

                <div class="form-group">
                    <label for="booking_id">Booking:</label>
                    <select class="form-control" name="booking_id" id="booking_id">
                        @foreach($bookings as $booking)
                            <option value="{{ $booking->id }}">{{ $booking->id }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="client_id">Client:</label>
                    <select class="form-control" name="client_id" id="client_id">
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="food_id">Food:</label>
                    <select class="form-control" name="food_id" id="food_id">
                        @foreach($foods as $food)
                            <option value="{{ $food->id }}">{{ $food->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>

    </div>
@endsection

@section('footer')
@endsection
