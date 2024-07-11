@extends('layouts.app')

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
