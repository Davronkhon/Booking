{{--@extends('layouts.app')--}}

{{--@section('title')--}}
{{--    Добавление--}}
{{--@endsection--}}
{{--<!-- create -->--}}
{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        @if(session('message'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{session('message')}}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <label for="">start_time : </label>--}}
{{--            <input type="date" name="date" class="form-control">--}}
{{--            <label for="">end_time : </label>--}}
{{--            <input type="date" name="time" class="form-control">--}}
{{--            <label for="">guests_count : </label>--}}
{{--            <input type="text" name="guests" class="form-control">--}}
{{--            <label for="">status : </label>--}}
{{--            <input type="text" name="status" class="form-control">--}}
{{--            <label for="">Place_id: </label>--}}
{{--            <select name="place_id" id="" class="form-control">--}}
{{--                @foreach($places as $place)--}}
{{--                    <option value="{{$place->id}}">{{$place->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <label for="">Client_id: </label>--}}
{{--            <select name="client_id" id="" class="form-control">--}}
{{--                @foreach($clients as $client)--}}
{{--                    <option value="{{$client->id}}">{{$client->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select><br>--}}
{{--            <input type="submit" value="Добавить" class="btn btn-primary form-control">--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}

{{--@section('footer')--}}
{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Создать Бронирование</h1>

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="start_time">Начало</label>
                <input type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" id="start_time" name="start_time" value="{{ old('start_time') }}" required>
                @error('start_time')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="end_time">Конец</label>
                <input type="datetime-local" class="form-control @error('end_time') is-invalid @enderror" id="end_time" name="end_time" value="{{ old('end_time') }}" required>
                @error('end_time')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="guests">Количество гостей</label>
                <input type="number" class="form-control @error('guests') is-invalid @enderror" id="guests" name="guests" value="{{ old('guests') }}" required>
                @error('guests')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Статус</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}" required>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="place_id">Место</label>
                <select class="form-control @error('place_id') is-invalid @enderror" id="place_id" name="place_id" required>
                    <option value="">Выберите место</option>
                    @foreach($places as $place)
                        <option value="{{ $place->id }}" {{ old('place_id') == $place->id ? 'selected' : '' }}>{{ $place->name }}</option>
                    @endforeach
                </select>
                @error('place_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="client_id">Клиент</label>
                <select class="form-control @error('client_id') is-invalid @enderror" id="client_id" name="client_id" required>
                    <option value="">Выберите клиента</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>{{ $client->name }}</option>
                    @endforeach
                </select>
                @error('client_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Создать бронирование</button>
        </form>
    </div>
@endsection
