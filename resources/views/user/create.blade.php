@extends('layouts.app')

@section('content')
    <h1>добавить пользователья</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="">Имя:</label>
            <input type="password" name="username" class="form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" id="" placeholder="Password">
        </div>


        <div class="form-group">
            <label for="">Роль:</label>
            <input type="password" name="role" class="form-control" placeholder="role">
        </div>

            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email" class="form-control" id="" placeholder="Enter email">
            </div>

        <button type="submit" class="btn btn-primary">Добавить пользователья</button>
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
