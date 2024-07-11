@extends('layouts.app')
@section('title')
    <h3>Таблица клиентов</h3>
@endsection

@section('content')
    <a href="{{route('client.create')}}" class="btn btn-info">Добавить</a>
    <br><br>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Телефон</th>
            <th>Ресторан</th>
            <th>Пользователь</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($clients as $client)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->surname}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->restaurants->name}}</td>
                <td>{{$client->user->name}}</td>
                <td>
                    <form action="{{route('client.destroy', $client->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('client.edit', $client->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
