{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        @if(session('message'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{session('message')}}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <form action="{{ route('booking.update', $booking->id) }}" method="POST">--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}
{{--            <label for="">Start_time</label>--}}
{{--            <input type="date" class="form-control" id="" name="date" value="{{$booking->date}}">--}}
{{--            <label for="">End_time</label>--}}
{{--            <input type="date" class="form-control" id="" name="time" value="{{$booking->time}}">--}}
{{--            <label for="">Guests</label>--}}
{{--            <input type="text" class="form-control" id="" name="guests" value="{{$booking->guests}}">--}}
{{--            <label for="">Status</label>--}}
{{--            <input type="text" class="form-control" id="" name="status" value="{{$booking->status}}">--}}
{{--            <label for="">Place_id : </label>--}}
{{--            <select name="place_id" id="" class="form-control">--}}
{{--                @foreach($places as $place)--}}
{{--                    <option value="{{$place->id}}">{{$place->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <label for="">Client_id : </label>--}}
{{--            <select name="client_id" id="" class="form-control">--}}
{{--                @foreach($clients as $client)--}}
{{--                    <option value="{{$client->id}}">{{$client->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <input type="submit" value="Добавить" class="btn btn-primary form-control">--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('booking.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="start_time">Начало</label>
            <input type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" id="start_time" name="start_time" value="{{ old('start_time', $booking->start_time) }}">
            @error('start_time')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="end_time">Конец</label>
            <input type="datetime-local" class="form-control @error('end_time') is-invalid @enderror" id="end_time" name="end_time" value="{{ old('end_time', $booking->end_time) }}">
            @error('end_time')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="guests">Количество гостей</label>
            <input type="number" class="form-control @error('guests') is-invalid @enderror" id="guests" name="guests" value="{{ old('guests', $booking->guests) }}">
            @error('guests')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="status">Статус</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status', $booking->status) }}">
            @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="place_id">Место</label>
            <select name="place_id" id="place_id" class="form-control @error('place_id') is-invalid @enderror">
                @foreach($places as $place)
                    <option value="{{ $place->id }}" {{ old('place_id', $booking->place_id) == $place->id ? 'selected' : '' }}>{{ $place->name }}</option>
                @endforeach
            </select>
            @error('place_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <label for="client_id">Клиент</label>
            <select name="client_id" id="client_id" class="form-control @error('client_id') is-invalid @enderror">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id', $booking->client_id) == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                @endforeach
            </select>
            @error('client_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Обновить бронирование</button>
        </form>
    </div>
@endsection
