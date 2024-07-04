@extends('layouts.admin')

@section('content')
            <form action="{{route('user.destroy', $users->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
                <a href="{{route('user.index') }}" class="btn btn-secondary">Отмена</a>
            </form>
@endsection
