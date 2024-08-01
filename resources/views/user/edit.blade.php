@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
=======
    <div class="card-body">
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <form action="{{route('user.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="">UserName</label>
            <input type="text" class="form-control" id="" name="username" value="{{$user->username}}">
            <label for="">Password</label>
            <input type="password" class="form-control" id="" name="password" value="{{$user->password}}">
            <label for="">Role</label>
            <input type="password" class="form-control" id="" name="role" value="{{$user->role}}">
            <label for="">Email</label>
            <input type="email" class="form-control" id="" name="email" value="{{$user->email}}">
            <input type="submit" value="Изменить" class="btn btn-primary form-control">
        </form>
    </div>
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
@endsection
