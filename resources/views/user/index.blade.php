@extends('layouts.app')

@section('content')
    <h1>Список пользователей</h1>

    <a href="{{ route('user.create') }}" class="btn btn-primary">Добавить пользователья</a>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>UserName</th>
            <th>Password</th>
            <th>Role</th>
            <th>Email</th>
            <th>Удалить</th>
            <th>Изменить</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
