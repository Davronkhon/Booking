@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <h1>Список категория ресторанов</h1>

    <a href="{{ route('rest.create') }}" class="btn btn-primary">Добавить категорию ресторанов</a>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Подробности</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rests as $rest)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $rest->name }}</td>
                <td>{{ $rest->description }}</td>
                <td>
                    <a href="{{ route('rest.edit', $rest->id) }}" class="btn btn-primary">Изменить</a>

                    <form action="{{ route('rest.destroy', $rest->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
=======
@section('title')
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif
    <a href="{{route('rest.create')}}" class="btn btn-primary">Добавить</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($rests as $rest)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$rest->name}}</td>
                <td>{{$rest->description}}</td>
                <td>
                    <form action="{{route('rest.destroy', $rest->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить" class="btn btn-danger">
                    </form>
                </td>
                <td>
                    <form action="{{route('rest.edit', $rest->id)}}" method="get">
                        @csrf
                        <input type="submit" value="Изменить" class="btn btn-info">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
@endsection
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
