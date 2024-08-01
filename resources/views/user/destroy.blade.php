<<<<<<< HEAD
@extends('layouts.admin')

@section('content')
            <form action="{{route('user.destroy', $users->id) }}" method="POST">
=======
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Удалить бронирование #{{ $user->id }}</h3>
        </div>
        <div class="card-body">
            <p>Вы уверены, что хотите удалить это бронирование?</p>
            <form action="{{route('user.destroy', $user->id) }}" method="POST">
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
                <a href="{{route('user.index') }}" class="btn btn-secondary">Отмена</a>
            </form>
<<<<<<< HEAD
=======
        </div>
    </div>
>>>>>>> 0bfbe1554d6e061a4edba81280d3c4dc09e368bc
@endsection
