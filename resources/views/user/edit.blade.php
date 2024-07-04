@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('user.update', ['user' => $users->id])}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">username:</label>
            <label>
                <input type="text" name="username" class="form-control" value="{{ $users->username }}">
            </label>
        </div>


        <div class="form-group">
            <label for="name">password:</label>
            <label>
                <input type="password" name="password" class="form-control" value="{{ $users->password }}">
            </label>
        </div>

        <div class="form-group">
            <label for="name">role:</label>
            <label>
                <input type="text" name="role" class="form-control" value="{{ $users->role }}">
            </label>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <label>
                <input type="email" name="email" class="form-control" value="{{ $users->email }}">
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
@endsection
