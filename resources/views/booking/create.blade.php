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
            <label for="">start_time : </label>
            <input type="date" name="date" class="form-control">
            <label for="">end_time : </label>
            <input type="date" name="time" class="form-control">
            <label for="">guests_count : </label>
            <input type="text" name="guests" class="form-control">
            <label for="">status : </label>
            <input type="text" name="status" class="form-control">
            <label for="">Place_id: </label>
            <select name="place_id" id="" class="form-control">
                @foreach($places as $place)
                    <option value="{{$place->id}}">{{$place->name}}</option>
                @endforeach
            </select>
            <label for="">Client_id: </label>
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
