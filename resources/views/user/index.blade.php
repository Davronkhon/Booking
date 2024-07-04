@extends('layouts.app')

@section('content')
    <h1>Users</h1>

    <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>username</th>
            <th>role</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
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
