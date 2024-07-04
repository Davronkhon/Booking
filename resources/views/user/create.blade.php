@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Username:</label><br>
            <label>
                <input type="text" name="username" class="form-control">
            </label><br>
        </div>

        <div class="form-group">
            <label for="password">Password:</label><br>
            <label>
                <input type="password" name="password" class="form-control">
            </label><br>
        </div>

        <div class="form-group">
            <label for="role">Role:</label><br>
            <label>
                <input type="text" name="role" class="form-control">
            </label><br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" name="email" class="form-control"><br>
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
