@extends('layouts.app')

@section('title')
    Добавление бронирования
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

            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <label>Начало времени:</label>

                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="text" name="start_time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                    </div>

                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Конец времени:</label>

                            <div class="input-group date" id="timepicker" data-target-input="nearest">
                                <input type="text" name="end_time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>

                                <div class="form-group">
                                    <label for="">Гости:</label>
                                    <input type="text" name="guests_count" class="form-control" id="">
                                </div>

                                <div class="form-group">
                                    <label for="">Статус:</label>
                                    <input type="text" name="status" class="form-control" id="">
                                </div>

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
